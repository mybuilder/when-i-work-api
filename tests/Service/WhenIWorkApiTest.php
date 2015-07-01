<?php

namespace MyBuilder\Library\WhenIWork\Tests\Service;

use MyBuilder\Library\WhenIWork\Service\WhenIWorkApi;
use MyBuilder\Library\WhenIWork\Exception\WhenIWorkApiException;

/**
 * @group unit
 */
class WhenIWorkApiTest extends \PHPUnit_Framework_TestCase
{
    const DEVELOPER_KEY = '12345';
    const USERNAME  = 'test@test.test';
    const PASSWORD = 'heavypass';
    const TOKEN = 'someHiddenToken';

    /**
     * @var WhenIWorkApi
     */
    private $whenIWorkApi;

    /**
     * @var Client|\Mockery\MockInterface
     */
    private $guzzleClient;

    /**
     * @var Request|\Mockery\MockInterface
     */
    private $request;

    public function setUp()
    {
        $this->request = \Mockery::mock('Guzzle\Http\Message\Request');
        $this->guzzleClient = \Mockery::mock('Guzzle\Http\Client');

        $this->whenIWorkApi = new WhenIWorkApi(
            $this->guzzleClient,
            self::DEVELOPER_KEY,
            self::USERNAME,
            self::PASSWORD
        );
    }

    /**
     * @expectedException MyBuilder\Library\WhenIWork\Exception\WhenIWorkApiException
     */
    public function test_setup_and_exception_from_guzzle_client()
    {
        $this->guzzleClientShouldSetupToken();

        $this->guzzleClient->shouldReceive('get')
            ->with(WhenIWorkApi::WHEN_I_WORK_ENDPOINT . '/users')
            ->once()
            ->andThrow('Guzzle\Http\Exception\ClientErrorResponseException');

        $this->whenIWorkApi->usersListingUsers();
    }

    private function guzzleClientShouldSetupToken()
    {
        $this->guzzleClient
            ->shouldReceive('post')
            ->with(
                WhenIWorkApi::WHEN_I_WORK_ENDPOINT . '/login',
                array('W-Key' => self::DEVELOPER_KEY),
                json_encode(
                    array('username' => self::USERNAME, 'password' => self::PASSWORD)
                )
            )
            ->once()
            ->andReturn($this->request);

        $this->request->shouldReceive('send')->atLeast(1)->andReturn($this->request);
        $this->request->shouldReceive('json')->andReturn(array('login' => array('token' => self::TOKEN)));
    }
}

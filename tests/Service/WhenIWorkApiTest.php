<?php

namespace MyBuilder\Library\WhenIWork\Tests\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Request;
use MyBuilder\Library\WhenIWork\Service\WhenIWorkApi;

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
        $this->request = \Mockery::mock('GuzzleHttp\Psr7\Message\Request');
        $this->guzzleClient = \Mockery::mock('GuzzleHttp\Client');

        $this->whenIWorkApi = new WhenIWorkApi(
            $this->guzzleClient,
            self::DEVELOPER_KEY,
            self::USERNAME,
            self::PASSWORD
        );
    }

    /**
     * @expectedException \MyBuilder\Library\WhenIWork\Exception\WhenIWorkApiException
     */
    public function test_setup_and_exception_from_guzzle_client()
    {
        $this->guzzleClientShouldSetupToken();

        $this->guzzleClient->shouldReceive('get')
            ->with(
                WhenIWorkApi::WHEN_I_WORK_ENDPOINT . '/users',
                array('headers' => array('W-Token' => self::TOKEN))
            )
            ->once()
            ->andThrow(new BadResponseException('', new Request('GET', 'foo')));

        $this->whenIWorkApi->usersListingUsers();
    }

    private function guzzleClientShouldSetupToken()
    {
        $this->guzzleClient
            ->shouldReceive('post')
            ->with(
                WhenIWorkApi::WHEN_I_WORK_ENDPOINT . '/login',
                array(
                    'headers' => array('W-Key' => self::DEVELOPER_KEY),
                    'json' => array('username' => self::USERNAME, 'password' => self::PASSWORD)
                )
            )
            ->once()
            ->andReturn($this->request);

        $mockStream = \Mockery::mock('GuzzleHttp\Psr7\Stream');
        $mockStream->shouldReceive('close')->once();
        $mockStream->shouldReceive('getContents')->once()->andReturn('{"login":{"token":"someHiddenToken"}}');

        $this->request->shouldReceive('getBody')->once()->andReturn($mockStream);
        $this->request->shouldReceive('\GuzzleHttp\json_decode')->andReturn(array('login' => array('token' => self::TOKEN)));
    }
}

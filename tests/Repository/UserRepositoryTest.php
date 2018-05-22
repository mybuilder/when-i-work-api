<?php

namespace MyBuilder\Bundle\WhenIWorkBundle\Tests\Service\Repository;

use JMS\Serializer\SerializerInterface;
use MyBuilder\Library\WhenIWork\Service\WhenIWorkApi;
use MyBuilder\Library\WhenIWork\Repository\UserRepository;
use MyBuilder\Library\WhenIWork\Repository\WhenIWorkRepository;

/**
 * @group unit
 * @coversDefaultClass MyBuilder\Library\WhenIWork\Repository\UserRepository
 */
class UserRepositoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var SerializerInterface|\Mockery\MockInterface
     */
    private $serializer;

    /**
     * @var WhenIWorkApi|\Mockery\MockInterface
     */
    private $whenIWorkApi;

    public function setUp()
    {
        $this->whenIWorkApi = \Mockery::mock(WhenIWorkApi::class);
        $this->serializer = \Mockery::mock(SerializerInterface::class);
        $this->userRepository = new UserRepository(
            $this->whenIWorkApi,
            $this->serializer
        );

    }

    public function test_it_delegates_find_by_id_to_api(): void
    {
        $user = \Mockery::mock('stdClass');
        $userRaw = \Mockery::mock('stdClass');
        $userRaw->user = $user;

        $this->whenIWorkApi
            ->shouldReceive('usersGetExistingUser')
            ->with($someId = 123)
            ->once()
            ->andReturn($userRaw);

        $this->serializer->shouldReceive('deserialize')->once();

        $this->userRepository->findById($someId);
    }

    public function test_it_is_an_instance_of_when_i_work_repository(): void
    {
        $this->assertInstanceOf(WhenIWorkRepository::class, $this->userRepository);
    }


    public function test_it_delegates_find_all_to_api(): void
    {
        $this->whenIWorkApi
            ->shouldReceive('usersListingUsers')
            ->once();

        $this->serializer->shouldReceive('deserialize')->once();

        $this->userRepository->findAll();
    }
}

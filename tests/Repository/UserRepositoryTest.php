<?php

namespace MyBuilder\Bundle\WhenIWorkBundle\Tests\Service\Repository;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use MyBuilder\Library\WhenIWork\Model\User;
use MyBuilder\Library\WhenIWork\Service\WhenIWorkApi;
use MyBuilder\Library\WhenIWork\Repository\UserRepository;
use PHPUnit\Framework\TestCase;

/**
 * @group unit
 * @coversDefaultClass \MyBuilder\Library\WhenIWork\Repository\UserRepository
 */
class UserRepositoryTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private UserRepository $userRepository;
    private SerializerInterface $serializer;

    /**
     * @var WhenIWorkApi|\Mockery\MockInterface
     */
    private $whenIWorkApi;

    public function setUp(): void
    {
        $this->whenIWorkApi = \Mockery::mock(WhenIWorkApi::class);
        $this->serializer = SerializerBuilder::create()->build();
        $this->userRepository = new UserRepository(
            $this->whenIWorkApi,
            $this->serializer
        );
    }

    public function test_it_delegates_find_by_id_to_api(): void
    {
        $user = new User();

        $this->whenIWorkApi
            ->shouldReceive('usersGetExistingUser')
            ->with($someId = 123)
            ->once()
            ->andReturn([$user]);

        $this->assertEquals($user, $this->userRepository->findById($someId));
    }

    public function test_it_delegates_find_all_to_api(): void
    {
        $user = new User();

        $this->whenIWorkApi
            ->shouldReceive('usersListingUsers')
            ->once()
            ->andReturn([$user]);

        $this->assertEquals([$user], $this->userRepository->findAll());
    }
}

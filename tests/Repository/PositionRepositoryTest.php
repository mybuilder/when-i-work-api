<?php

namespace MyBuilder\Bundle\WhenIWorkBundle\Tests\Service\Repository;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use MyBuilder\Library\WhenIWork\Model\Position;
use MyBuilder\Library\WhenIWork\Repository\PositionRepository;
use MyBuilder\Library\WhenIWork\Service\WhenIWorkApi;
use PHPUnit\Framework\TestCase;

/**
 * @group unit
 * @coversDefaultClass \MyBuilder\Library\WhenIWork\Repository\PositionRepository
 */
class PositionRepositoryTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private PositionRepository $positionRepository;
    private SerializerInterface $serializer;

    /**
     * @var WhenIWorkApi|\Mockery\MockInterface
     */
    private $whenIWorkApi;

    public function setUp(): void
    {
        $this->whenIWorkApi = \Mockery::mock(WhenIWorkApi::class);
        $this->serializer = SerializerBuilder::create()->build();
        $this->positionRepository = new PositionRepository(
            $this->whenIWorkApi,
            $this->serializer
        );
    }

    public function test_find_by_id(): void
    {
        $someId = 123;
        $position = new Position();

        $this->whenIWorkApi
            ->shouldReceive('positionsGetExistingPosition')
            ->with($someId)
            ->once()
            ->andReturn([$position]);

        $this->assertEquals($position, $this->positionRepository->findById($someId));
    }

    public function test_find_all(): void
    {
        $position = new Position();

        $this->whenIWorkApi
            ->shouldReceive('positionsListingPositions')
            ->once()
            ->andReturn([$position]);

        $this->assertEquals([$position], $this->positionRepository->findAll());
    }
}

<?php

namespace MyBuilder\Bundle\WhenIWorkBundle\Tests\Service\Repository;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use MyBuilder\Library\WhenIWork\Model\Payroll;
use MyBuilder\Library\WhenIWork\Model\Time;
use MyBuilder\Library\WhenIWork\Repository\TimeRepository;
use MyBuilder\Library\WhenIWork\Service\WhenIWorkApi;
use PHPUnit\Framework\TestCase;

/**
 * @group unit
 * @coversDefaultClass \MyBuilder\Library\WhenIWork\Repository\TimeRepository
 */
class TimeRepositoryTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private TimeRepository $timeRepository;
    private SerializerInterface $serializer;

    /**
     * @var WhenIWorkApi|\Mockery\MockInterface
     */
    private $whenIWorkApi;

    public function setUp(): void
    {
        $this->whenIWorkApi = \Mockery::mock(WhenIWorkApi::class);
        $this->serializer = SerializerBuilder::create()->build();
        $this->timeRepository = new TimeRepository(
            $this->whenIWorkApi,
            $this->serializer
        );
    }

    public function test_find_by_id(): void
    {
        $someId = 123;
        $time = new Time();

        $this->whenIWorkApi
            ->shouldReceive('timesGetExistingTime')
            ->with($someId)
            ->once()
            ->andReturn([$time]);

        $this->assertEquals($time, $this->timeRepository->findById($someId));
    }
}

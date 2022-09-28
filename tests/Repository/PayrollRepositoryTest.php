<?php

namespace MyBuilder\Bundle\WhenIWorkBundle\Tests\Service\Repository;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use MyBuilder\Library\WhenIWork\Model\Payroll;
use MyBuilder\Library\WhenIWork\Repository\PayrollRepository;
use MyBuilder\Library\WhenIWork\Service\WhenIWorkApi;
use PHPUnit\Framework\TestCase;

/**
 * @group unit
 * @coversDefaultClass \MyBuilder\Library\WhenIWork\Repository\PayrollRepository
 */
class PayrollRepositoryTest extends TestCase
{
    use MockeryPHPUnitIntegration;

    private PayrollRepository $payrollRepository;
    private SerializerInterface $serializer;

    /**
     * @var WhenIWorkApi|\Mockery\MockInterface
     */
    private $whenIWorkApi;

    public function setUp(): void
    {
        $this->whenIWorkApi = \Mockery::mock(WhenIWorkApi::class);
        $this->serializer = SerializerBuilder::create()->build();
        $this->payrollRepository = new PayrollRepository(
            $this->whenIWorkApi,
            $this->serializer
        );
    }

    public function test_find_by_id(): void
    {
        $someId = 123;
        $payRoll = new Payroll();

        $this->whenIWorkApi
            ->shouldReceive('timesGetExistingTime')
            ->with($someId)
            ->once()
            ->andReturn([$payRoll]);

        $this->assertEquals($payRoll, $this->payrollRepository->findById($someId));
    }

    public function test_find_by_period(): void
    {
        $payRoll = new Payroll();

        $this->whenIWorkApi
            ->shouldReceive('payrollListingPayrolls')
            ->once()
            ->andReturn([$payRoll]);

        $this->assertEquals([$payRoll], $this->payrollRepository->findByPeriod());
    }
}

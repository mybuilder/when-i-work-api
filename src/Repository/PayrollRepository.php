<?php
namespace MyBuilder\Library\WhenIWork\Repository;

use MyBuilder\Library\WhenIWork\Model\Payroll;

class PayrollRepository extends WhenIWorkRepository
{
    /**
     * Find a pay period by its ID
     *
     * @param $payrollId
     *
     * @return Payroll
     */
    public function findById($payrollId)
    {
        $payroll = $this->whenIWorkApi->timesGetExistingTime($payrollId);

        return $this->deserializeModel($payroll, Payroll::class);
    }

    /**
     * Find all pay periods that have any day in start->end dates
     *
     * @param \DateTimeInterface|null $startDate
     * @param \DateTimeInterface|null $endDate
     *
     * @return Payroll[]
     */
    public function findByPeriod(\DateTimeInterface $startDate = null, \DateTimeInterface $endDate = null): array
    {
        $payrollRaw  = $this->whenIWorkApi->payrollListingPayrolls($startDate, $endDate);

        return $this->deserializeModel($payrollRaw, 'ArrayCollection<'.Payroll::class.'>')->toArray();
    }
}

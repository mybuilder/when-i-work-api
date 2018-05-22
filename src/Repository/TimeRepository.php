<?php

namespace MyBuilder\Library\WhenIWork\Repository;

use MyBuilder\Library\WhenIWork\Model\Time;

class TimeRepository extends WhenIWorkRepository
{
    /**
     * @param $timeId
     *
     * @return Time
     */
    public function findById($timeId)
    {
        $time =  $this->whenIWorkApi->timesGetExistingTime($timeId);

        return $this->deserializeModel($time, Time::class);
    }

    /**
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     *
     * @return Time[]
     */
    public function findByPeriod(\DateTime $startDate, \DateTime $endDate)
    {
        $timesRaw  = $this->whenIWorkApi->timesListingTimes($startDate, $endDate);

        return $this->deserializeModel($timesRaw, 'ArrayCollection<MyBuilder\Library\WhenIWork\Model\Time>');
    }

    /**
     * @param           $userId
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     *
     * @return Time[]
     */
    public function findByUserIdAndPeriod($userId, \DateTime $startDate, \DateTime $endDate)
    {
        $timesRaw = $this->whenIWorkApi->timesGetUserTimes($userId, $startDate, $endDate);

        return $this->deserializeModel($timesRaw, 'ArrayCollection<MyBuilder\Library\WhenIWork\Model\Time>');
    }

}

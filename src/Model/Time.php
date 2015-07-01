<?php

namespace MyBuilder\Library\WhenIWork\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;

/**
 * @AccessType("public_method")
 */
class Time 
{
    /**
     * @var int
     * @Type("integer")
     */
    private $id;

    /**
     * @var int
     * @Type("integer")
     * @SerializedName("account_id")
     */
    private $accountId;

    /**
     * @var int
     * @Type("integer")
     * @SerializedName("user_id")
     */
    private $userId;

    /**
     * @var int
     * @Type("integer")
     * @SerializedName("creator_id")
     */
    private $creatorId;

    /**
     * @var int
     * @Type("integer")
     * @SerializedName("position_id")
     */
    private $positionId;

    /**
     * @var int
     * @Type("integer")
     * @SerializedName("location_id")
     */
    private $locationId;

    /**
     * @var int
     * @Type("integer")
     * @SerializedName("site_id")
     */
    private $siteId;

    /**
     * @var int
     * @Type("integer")
     * @SerializedName("shift_id")
     */
    private $shiftId;

    /**
     * @var \DateTime
     * @Type("DateTime<'D, d F Y H:i:s O'>")
     * @SerializedName("start_time")
     */
    private $startTime;

    /**
     * @var \DateTime
     * @Type("DateTime<'D, d F Y H:i:s O'>")
     * @SerializedName("end_time")
     */
    private $endTime;

    /**
     * @var double
     * @Type("double")
     */
    private $length;

    /**
     * @var double
     * @Type("double")
     * @SerializedName("hourly_rate")
     */
    private $hourlyRate;

    /**
     * @var boolean
     * @Type("boolean")
     * @SerializedName("isAlerted")
     */
    private $isAlerted;

    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("alert_type")
     */
    private $alertType;

    /**
     * @var boolean
     * @Type("boolean")
     * @SerializedName("is_approved")
     */
    private $isApproved;

    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("modified_by")
     */
    private $modifiedBy;

    /**
     * @var \DateTime
     * @Type("DateTime<'D, d F Y H:i:s O'>")
     * @SerializedName("updated_at")
     */
    private $updatedAt;

    /**
     * @var \DateTime
     * @Type("DateTime<'D, d F Y H:i:s O'>")
     * @SerializedName("created_at")
     */
    private $createdAt;

    /**
     * Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Id
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * AccountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * AccountId
     *
     * @param int $accountId
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * UserId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * UserId
     *
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * CreatorId
     *
     * @return int
     */
    public function getCreatorId()
    {
        return $this->creatorId;
    }

    /**
     * CreatorId
     *
     * @param int $creatorId
     */
    public function setCreatorId($creatorId)
    {
        $this->creatorId = $creatorId;
    }

    /**
     * PositionId
     *
     * @return int
     */
    public function getPositionId()
    {
        return $this->positionId;
    }

    /**
     * PositionId
     *
     * @param int $positionId
     */
    public function setPositionId($positionId)
    {
        $this->positionId = $positionId;
    }

    /**
     * LocationId
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * LocationId
     *
     * @param int $locationId
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;
    }

    /**
     * SiteId
     *
     * @return int
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * SiteId
     *
     * @param int $siteId
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
    }

    /**
     * ShiftId
     *
     * @return int
     */
    public function getShiftId()
    {
        return $this->shiftId;
    }

    /**
     * ShiftId
     *
     * @param int $shiftId
     */
    public function setShiftId($shiftId)
    {
        $this->shiftId = $shiftId;
    }

    /**
     * StartTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * StartTime
     *
     * @param \DateTime $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * EndTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * EndTime
     *
     * @param \DateTime $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    /**
     * Length
     *
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Length
     *
     * @param float $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * HourlyRate
     *
     * @return float
     */
    public function getHourlyRate()
    {
        return $this->hourlyRate;
    }

    /**
     * HourlyRate
     *
     * @param float $hourlyRate
     */
    public function setHourlyRate($hourlyRate)
    {
        $this->hourlyRate = $hourlyRate;
    }

    /**
     * IsAlerted
     *
     * @return boolean
     */
    public function getIsAlerted()
    {
        return $this->isAlerted;
    }

    /**
     * IsAlerted
     *
     * @param boolean $isAlerted
     */
    public function setIsAlerted($isAlerted)
    {
        $this->isAlerted = $isAlerted;
    }

    /**
     * AlertType
     *
     * @return int
     */
    public function getAlertType()
    {
        return $this->alertType;
    }

    /**
     * AlertType
     *
     * @param int $alertType
     */
    public function setAlertType($alertType)
    {
        $this->alertType = $alertType;
    }

    /**
     * IsApproved
     *
     * @return boolean
     */
    public function getIsApproved()
    {
        return $this->isApproved;
    }

    /**
     * IsApproved
     *
     * @param boolean $isApproved
     */
    public function setIsApproved($isApproved)
    {
        $this->isApproved = $isApproved;
    }

    /**
     * ModifiedBy
     *
     * @return int
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * ModifiedBy
     *
     * @param int $modifiedBy
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;
    }

    /**
     * UpdatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * UpdatedAt
     *
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * CreatedAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * CreatedAt
     *
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

}

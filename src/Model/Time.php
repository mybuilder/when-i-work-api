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
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Id
     *
     * @param int $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * AccountId
     *
     * @return int
     */
    public function getAccountId(): int
    {
        return $this->accountId;
    }

    /**
     * AccountId
     *
     * @param int $accountId
     */
    public function setAccountId($accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * UserId
     *
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * UserId
     *
     * @param int $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    /**
     * CreatorId
     *
     * @return int
     */
    public function getCreatorId(): int
    {
        return $this->creatorId;
    }

    /**
     * CreatorId
     *
     * @param int $creatorId
     */
    public function setCreatorId($creatorId): void
    {
        $this->creatorId = $creatorId;
    }

    /**
     * PositionId
     *
     * @return int
     */
    public function getPositionId(): int
    {
        return $this->positionId;
    }

    /**
     * PositionId
     *
     * @param int $positionId
     */
    public function setPositionId($positionId): void
    {
        $this->positionId = $positionId;
    }

    /**
     * LocationId
     *
     * @return int
     */
    public function getLocationId(): int
    {
        return $this->locationId;
    }

    /**
     * LocationId
     *
     * @param int $locationId
     */
    public function setLocationId($locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * SiteId
     *
     * @return int
     */
    public function getSiteId(): int
    {
        return $this->siteId;
    }

    /**
     * SiteId
     *
     * @param int $siteId
     */
    public function setSiteId($siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * ShiftId
     *
     * @return int
     */
    public function getShiftId(): int
    {
        return $this->shiftId;
    }

    /**
     * ShiftId
     *
     * @param int $shiftId
     */
    public function setShiftId($shiftId): void
    {
        $this->shiftId = $shiftId;
    }

    /**
     * StartTime
     *
     * @return \DateTime
     */
    public function getStartTime(): \DateTime
    {
        return $this->startTime;
    }

    /**
     * StartTime
     *
     * @param \DateTime $startTime
     */
    public function setStartTime($startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * EndTime
     *
     * @return \DateTime
     */
    public function getEndTime(): \DateTime
    {
        return $this->endTime;
    }

    /**
     * EndTime
     *
     * @param \DateTime $endTime
     */
    public function setEndTime($endTime): void
    {
        $this->endTime = $endTime;
    }

    /**
     * Length
     *
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * Length
     *
     * @param float $length
     */
    public function setLength($length): void
    {
        $this->length = $length;
    }

    /**
     * HourlyRate
     *
     * @return float
     */
    public function getHourlyRate(): float
    {
        return $this->hourlyRate;
    }

    /**
     * HourlyRate
     *
     * @param float $hourlyRate
     */
    public function setHourlyRate($hourlyRate): void
    {
        $this->hourlyRate = $hourlyRate;
    }

    /**
     * IsAlerted
     *
     * @return boolean
     */
    public function getIsAlerted(): bool
    {
        return $this->isAlerted;
    }

    /**
     * IsAlerted
     *
     * @param boolean $isAlerted
     */
    public function setIsAlerted($isAlerted): void
    {
        $this->isAlerted = $isAlerted;
    }

    /**
     * AlertType
     *
     * @return int
     */
    public function getAlertType(): int
    {
        return $this->alertType;
    }

    /**
     * AlertType
     *
     * @param int $alertType
     */
    public function setAlertType($alertType): void
    {
        $this->alertType = $alertType;
    }

    /**
     * IsApproved
     *
     * @return boolean
     */
    public function getIsApproved(): bool
    {
        return $this->isApproved;
    }

    /**
     * IsApproved
     *
     * @param boolean $isApproved
     */
    public function setIsApproved($isApproved): void
    {
        $this->isApproved = $isApproved;
    }

    /**
     * ModifiedBy
     *
     * @return int
     */
    public function getModifiedBy(): int
    {
        return $this->modifiedBy;
    }

    /**
     * ModifiedBy
     *
     * @param int $modifiedBy
     */
    public function setModifiedBy($modifiedBy): void
    {
        $this->modifiedBy = $modifiedBy;
    }

    /**
     * UpdatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * UpdatedAt
     *
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * CreatedAt
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * CreatedAt
     *
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

}

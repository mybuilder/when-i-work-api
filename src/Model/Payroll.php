<?php
namespace MyBuilder\Library\WhenIWork\Model;

use DateTime;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;

/**
 * @AccessType("public_method")
 */
class Payroll
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
     * @var DateTime
     * @Type("DateTime<'D, d F Y H:i:s O'>")
     * @SerializedName("start_date")
     */
    private $startDate;

    /**
     * @var DateTime
     * @Type("DateTime<'D, d F Y H:i:s O'>")
     * @SerializedName("end_date")
     */
    private $endDate;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("notes")
     */
    private $notes;

    /**
     * @var boolean
     * @Type("boolean")
     * @SerializedName("is_closed")
     */
    private $closed;

    /**
     * Note American spelling - with a Z
     *
     * @var boolean
     * @Type("boolean")
     * @SerializedName("is_finalized")
     */
    private $finalized;

    /**
     * @var DateTime
     * @Type("DateTime<'D, d F Y H:i:s O'>")
     * @SerializedName("finalized_at")
     */
    private $finalizedAt;

    /**
     * @var DateTime
     * @Type("DateTime<'D, d F Y H:i:s O'>")
     * @SerializedName("created_at")
     */
    private $createdAt;

    /**
     * @var DateTime
     * @Type("DateTime<'D, d F Y H:i:s O'>")
     * @SerializedName("updated_at")
     */
    private $updatedAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getAccountId(): int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     */
    public function setAccountId(int $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getCreatorId(): int
    {
        return $this->creatorId;
    }

    /**
     * @param int $creatorId
     */
    public function setCreatorId(int $creatorId): void
    {
        $this->creatorId = $creatorId;
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     */
    public function setStartDate(DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return DateTime
     */
    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    /**
     * @param DateTime $endDate
     */
    public function setEndDate(DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getNotes(): string
    {
        return $this->notes ?? '';
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes): void
    {
        $this->notes = $notes;
    }

    /**
     * @return bool
     */
    public function isClosed(): bool
    {
        return $this->closed ?? false;
    }

    /**
     * @param bool $closed
     */
    public function setClosed(bool $closed): void
    {
        $this->closed = $closed;
    }

    /**
     * @return bool
     */
    public function isFinalized(): bool
    {
        return $this->finalized ?? false;
    }

    /**
     * @param bool $finalized
     */
    public function setFinalized(bool $finalized): void
    {
        $this->finalized = $finalized;
    }

    /**
     * @return DateTime
     */
    public function getFinalizedAt(): ?DateTime
    {
        return $this->finalizedAt;
    }

    /**
     * @param DateTime $finalizedAt
     */
    public function setFinalizedAt(?DateTime $finalizedAt): void
    {
        $this->finalizedAt = $finalizedAt;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     */
    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): ?DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     */
    public function setUpdatedAt(DateTime $updatedAt = null): void
    {
        $this->updatedAt = $updatedAt;
    }

}

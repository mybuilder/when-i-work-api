<?php

namespace MyBuilder\Library\WhenIWork\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;

/**
 * @AccessType("public_method")
 */
class Position 
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
     * @var string
     * @Type("string")
     */
    private $name;

    /**
     * @var string
     * @Type("string")
     */
    private $color;

    /**
     * @var \DateTime
     * @Type("DateTime<'D, d F Y H:i:s O'>")
     * @SerializedName("created_at")
     */
    private $createdAt;

    /**
     * @var \DateTime
     * @Type("DateTime<'D, d F Y H:i:s O'>")
     * @SerializedName("updated_at")
     */
    private $updatedAt;

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
     * Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name
     *
     * @param string $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * Color
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Color
     *
     * @param string $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
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



}

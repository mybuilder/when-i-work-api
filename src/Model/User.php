<?php

namespace MyBuilder\Library\WhenIWork\Model;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;

/**
 * @AccessType("public_method")
 */
class User
{
    /**
     * @var int
     * @Type("integer")
     */
    private $id;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("first_name")
     */
    private $firstName;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("last_name")
     */
    private $lastName;

    /**
     * @var string
     * @Type("string")
     */
    private $email;

    /**
     * @var string
     * @Type("string")
     * @SerializedName("phone_number")
     */
    private $phoneNumber;

    /**
     * @var float
     * @Type("double")
     * @SerializedName("hours_preferred")
     */
    private $hoursPreffered;

    /**
     * @var float
     * @Type("double")
     * @SerializedName("hours_max")
     */
    private $hoursMax;

    /**
     * @var float
     * @Type("double")
     * @SerializedName("hours_rate")
     */
    private $hourlyRate;

    /**
     * @var int
     * @Type("integer")
     */
    private $role;

    /**
     * @var int[]
     * @Type("array<integer>")
     */
    private $positions;

    /**
     * @var int[]
     * @Type("array<integer>")
     */
    private $locations;

    /**
     * @var string
     * @Type("string")
     */
    private $notes;

    /**
     * @var boolean
     * @Type("boolean")
     */
    private $activated;

    /**
     * @var string
     * @Type("string")
     */
    private $password;

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
     * FirstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * FirstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * LastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * LastName
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * PhoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * PhoneNumber
     *
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * HoursPreffered
     *
     * @return float
     */
    public function getHoursPreffered()
    {
        return $this->hoursPreffered;
    }

    /**
     * HoursPreffered
     *
     * @param float $hoursPreffered
     */
    public function setHoursPreffered($hoursPreffered)
    {
        $this->hoursPreffered = $hoursPreffered;
    }

    /**
     * HoursMax
     *
     * @return float
     */
    public function getHoursMax()
    {
        return $this->hoursMax;
    }

    /**
     * HoursMax
     *
     * @param float $hoursMax
     */
    public function setHoursMax($hoursMax)
    {
        $this->hoursMax = $hoursMax;
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
     * Role
     *
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Role
     *
     * @param int $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * Positions
     *
     * @return \int[]
     */
    public function getPositions()
    {
        return $this->positions;
    }

    /**
     * Positions
     *
     * @param \int[] $positions
     */
    public function setPositions($positions)
    {
        $this->positions = $positions;
    }

    /**
     * Locations
     *
     * @return \int[]
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Locations
     *
     * @param \int[] $locations
     */
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }

    /**
     * Notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Notes
     *
     * @param string $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * Activated
     *
     * @return boolean
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * Activated
     *
     * @param boolean $activated
     */
    public function setActivated($activated)
    {
        $this->activated = $activated;
    }

    /**
     * Password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 18.2.2017
 * Time: 15:33
 */

namespace Pine\Human;

use Pine\Enum\Gender;
use Pine\Enum\Location;
use Pine\Enum\Activity;

/**
 * Class AbstractHuman
 *
 * @package Pine
 */
abstract class AbstractHuman
{

    /**
     * Birth date
     *
     * @var string $birthDate
     */
    protected $birthDate;

    /**
     * Gender
     *
     * @var integer $gender
     */
    protected $gender;

    /**
     * First name
     *
     * @var string $firstName
     */
    protected $firstName;

    /**
     * Last name
     *
     * @var string $lastName
     */
    protected $lastName;

    /**
     * Location
     *
     * @var integer $location
     */
    protected $location;

    /**
     * Activity
     *
     * @var integer $activity
     */
    protected $activity;

    /**
     * AbstractHuman constructor.
     *
     * @param string $birthDate
     * @param integer $gender
     * @param string $firstName
     * @param string $lastName
     * @param integer $location
     * @param integer $activity
     */
    public function __construct($birthDate='', $gender=Gender::NONE, $firstName='', $lastName='', $location=Location::NONE, $activity=Activity::NONE)
    {
        $this->birthDate = $birthDate;
        $this->gender = $gender;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->location = $location;
        $this->activity = $activity;
    }

    /**
     * Get the birth date
     *
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the birth date
     *
     * @param string $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * Get the gender
     *
     * @return integer
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the gender
     *
     * @param integer $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Get the first name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the first name
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get the last name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the last name
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get the location
     *
     * @return integer
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the location
     *
     * @param integer $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Get the activity
     *
     * @return integer
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set the activity
     *
     * @param integer $activity
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;
    }

}
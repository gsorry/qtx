<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 18.2.2017
 * Time: 17:04
 */

namespace Pine;


use Pine\Enum\Activity;
use Pine\Enum\Gender;
use Pine\Enum\Location;
use Pine\Human\Human;

class Man extends Human
{
    /**
     * Man constructor.
     *
     * @param string $birthDate
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct($birthDate = '', $firstName = '', $lastName = '')
    {
        parent::__construct($birthDate, Gender::MALE, $firstName, $lastName);
    }

    /**
     * Go to job
     */
    public function goToJob()
    {
        $this->goToLocation(Location::JOB);
    }

    /**
     * Go to vacation
     */
    public function goToVacation()
    {
        $this->goToLocation(Location::VACATION);
    }

    /**
     * Do work
     */
    public function doWork()
    {
        $this->startDoingActivity(Activity::WORK);
    }

}
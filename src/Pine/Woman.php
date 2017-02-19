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

class Woman extends Human
{
    /**
     * Woman constructor.
     *
     * @param string $birthDate
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct($birthDate = '', $firstName = '', $lastName = '')
    {
        parent::__construct($birthDate, Gender::FEMALE, $firstName, $lastName);
    }

    /**
     * Go to shopping
     */
    public function goToShopping()
    {
        $this->goToLocation(Location::SHOPPING);
    }

    /**
     * Go to vacation
     */
    public function goToVacation()
    {
        $this->goToLocation(Location::VACATION);
    }

    /**
     * Do shopping
     */
    public function doShopping()
    {
        $this->startDoingActivity(Activity::SHOPPING);
    }
}
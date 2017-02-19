<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 18.2.2017
 * Time: 16:21
 */

namespace Pine;

use Pine\Enum\Activity;
use Pine\Enum\Gender;
use Pine\Enum\Location;
use Pine\Human\Human;

/**
 * Class Child
 *
 * @package Pine
 */
class Child extends Human
{
    /**
     * Child constructor.
     *
     * @param string $birthDate
     * @param integer $gender
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct($birthDate = '', $gender = Gender::NONE, $firstName = '', $lastName = '')
    {
        parent::__construct($birthDate, $gender, $firstName, $lastName);
    }

    /**
     * Go to school
     */
    public function goToSchool()
    {
        $this->goToLocation(Location::SCHOOL);
    }

    /**
     * Do play
     */
    public function doPlay()
    {
        $this->startDoingActivity(Activity::PLAY);
    }

    /**
     * Do learn
     */
    public function doLearn()
    {
        $this->startDoingActivity(Activity::LEARN);
    }
}
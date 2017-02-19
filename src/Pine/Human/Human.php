<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 18.2.2017
 * Time: 15:38
 */

namespace Pine\Human;
use Pine\Enum\Activity;
use Pine\Enum\Location;

/**
 * Class Human
 * @package Pine
 */
class Human extends AbstractHuman implements HumanInterface
{

    /**
     * Go to location
     *
     * @param integer $location
     */
    public function goToLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Start doing activity
     *
     * @param integer $activity
     */
    public function startDoingActivity($activity)
    {
        $this->activity = $activity;
    }

    /**
     * Go to home location
     */
    public function goHome()
    {
        $this->goToLocation(Location::HOME);
    }

    /**
     * Do nothing
     */
    public function doNothing()
    {
        $this->startDoingActivity(Activity::NONE);
    }

    /**
     * Do sleep
     */
    public function doSleep()
    {
        $this->startDoingActivity(Activity::SLEEP);
    }

    /**
     * Do rest
     */
    public function doRest()
    {
        $this->startDoingActivity(Activity::REST);
    }

    /**
     * Do Eat
     */
    public function doEat()
    {
        $this->startDoingActivity(Activity::EAT);
    }
}
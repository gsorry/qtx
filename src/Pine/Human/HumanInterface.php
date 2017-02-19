<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 18.2.2017
 * Time: 15:39
 */

namespace Pine\Human;

/**
 * Interface HumanInterface
 *
 * @package Pine
 */
interface HumanInterface
{
    /**
     * Go to location
     *
     * @param integer $location
     */
    public function goToLocation($location);

    /**
     * Start doing activity
     *
     * @param integer $activity
     */
    public function startDoingActivity($activity);
}
<?php
namespace Sigbits\RoombaLib\OperatingMode;

use Sigbits\RoombaLib\OperatingMode;


/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */
class Safe implements OperatingMode
{
    public function getName()
    {
        return OperatingMode::MODE_SAFE;
    }
}
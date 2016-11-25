<?php
namespace Sigbits\RoombaLib\SCI\OperatingMode;

/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */
class Off implements OperatingModeInterface
{
    public function getName()
    {
        return OperatingModeInterface::MODE_OFF;
    }
}
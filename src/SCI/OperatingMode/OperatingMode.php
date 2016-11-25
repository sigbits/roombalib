<?php
namespace Sigbits\RoombaLib\SCI\OperatingMode;

/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */
interface OperatingModeInterface
{
    const MODE_OFF = 'off';

    const MODE_PASSIVE = 'passive';

    const MODE_SAFE = 'safe';

    const MODE_FULL = 'full';

    /**
     * @return string
     */
    public function getName();
}
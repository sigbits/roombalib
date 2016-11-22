<?php
namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\Command;

/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */
class ForceSeekingDock implements Command
{
    /**
     * @return string represents a byte
     */
    public function getOpcode()
    {
        return Opcode::FORCE_SEEKING_DOCK;
    }
}
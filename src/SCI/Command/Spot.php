<?php
namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\SCI\Opcode;
use Sigbits\RoombaLib\SCI\Command;

/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */
class Spot extends Command
{
    /**
     * @return string represents a byte
     */
    public function getOpcode()
    {
        return Opcode::SPOT;
    }
}
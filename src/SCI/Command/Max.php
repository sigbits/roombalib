<?php
namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\SCI\Command;

/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */
class Max implements Command
{
    /**
     * @return string represents a byte
     */
    public function getOpcode()
    {
        return Opcode::MAX;
    }
}
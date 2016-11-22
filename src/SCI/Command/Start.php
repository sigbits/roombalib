<?php
namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\Command;

/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */
class Start implements Command
{
    /**
     * @return string represents a byte
     */
    public function getOpcode()
    {
        return Opcode::START;
    }
}
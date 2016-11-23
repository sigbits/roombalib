<?php
namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\SCI\Opcode;

/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */
class Motors extends AbstractDataCommand
{
    /**
     * @return string represents a byte
     */
    public function getOpcode()
    {
        return Opcode::MOTORS;
    }
}
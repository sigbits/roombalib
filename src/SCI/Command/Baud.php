<?php
namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\SCI\Opcode;

/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 */
class Baud extends AbstractDataCommand
{
    /**
     * @return string represents a byte
     */
    public function getOpcode()
    {
        return Opcode::BAUD;
    }
}
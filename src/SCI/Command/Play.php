<?php
namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\Command\Opcode;

/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */
class Play extends AbstractDataCommand
{
    /**
     * @return string represents a byte
     */
    public function getOpcode()
    {
        return Opcode::PLAY;
    }
}
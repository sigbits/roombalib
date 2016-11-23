<?php
/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */

namespace Sigbits\RoombaLib\SCI;

/**
 * Commands consist of a single byte opcode and optionally a string of databytes
 *
 * Interface Command
 * @package Sigbits\RoombaLib
 */
abstract class Command
{
    /**
     * @return string represents a byte
     */
    abstract public function getOpcode();

    /**
     * @return string
     */
    public function asByteString()
    {
        return pack("C*", $this->getOpcode());
    }
}
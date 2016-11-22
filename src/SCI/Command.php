<?php
/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */

namespace Sigbits\RoombaLib;

/**
 * Commands consist of a single byte opcode and optionally a string of databytes
 *
 * Interface Command
 * @package Sigbits\RoombaLib
 */
interface Command
{

    /**
     * @return string represents a byte
     */
    public function getOpcode();
}
<?php
/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */

namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\SCI\Opcode;

/**
 * Commands consist of a single byte opcode and optionally a string of databytes
 *
 * abstract class AbstractCommand
 * @package Sigbits\RoombaLib
 */
abstract class AbstractCommand
{
    /**
     * @var int
     */
    private $opcode;

    /**
     * Command constructor.
     * @param int $opcode
     */
    public function __construct(Opcode $opcode)
    {
        $this->opcode = $opcode;
    }

    public function create($name)
    {

    }

    /**
     * @return Opcode
     */
    public function getOpcode()
    {
        return $this->opcode;
    }

    /**
     * @return string
     */
    public function asByteString()
    {
        return pack("C", $this->getOpcode()->getValue());
    }
}

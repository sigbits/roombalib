<?php
/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */

namespace Sigbits\RoombaLib\SCI;

use Sigbits\RoombaLib\DataType\ByteInt;

/**
 * Class Opcode
 * @package Sigbits\RoombaLib\SCI\Command
 */
class Opcode extends ByteInt
{
    const START = 128;

    const BAUD = 129;

    const CONTROL = 130;

    const SAFE = 131;

    const FULL = 132;

    const POWER = 133;

    const SPOT = 134;

    const CLEAN = 135;

    const MAX = 136;

    const DRIVE = 137;

    const MOTORS = 138;

    const LEDS = 139;

    const SONG = 140;

    const PLAY = 141;

    const SENSORS = 142;

    const FORCE_SEEKING_DOCK = 143;

    /**
     * Opcode constructor.
     */
    public function __construct($value)
    {
        if (false === $this->isValidOpcodeValue($value)) {
            throw new \Exception('%s is not a valid Opcode value', $value());
        }

        parent::__construct($value);
    }

    /**
     * @param $value
     */
    private function isValidOpcodeValue($value)
    {
        return (in_array(
            $value,
            [
                self::START,
                self::BAUD,
                self::CONTROL,
                self::SAFE,
                self::FULL,
                self::POWER,
                self::SPOT,
                self::CLEAN,
                self::MAX,
                self::DRIVE,
                self::MOTORS,
                self::LEDS,
                self::SONG,
                self::PLAY,
                self::SENSORS,
                self::FORCE_SEEKING_DOCK,
            ]
        ));
    }
}
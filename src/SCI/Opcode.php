<?php
/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */

namespace Sigbits\RoombaLib\SCI;

/**
 * Class Opcode
 * @package Sigbits\RoombaLib\SCI\Command
 */
class Opcode
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
     * @var int
     */
    private $value;


    /**
     * Opcode constructor.
     */
    public function __construct($value)
    {
        $value = (int) $value;

        if ($this->isValidOpcode($value)) {
            $this->value = $value;
        } else {
            throw new \Exception('%d is not a valid Opcode value', $value);
        }
    }

    /**
     * @param $value
     */
    private function isValidOpcode($value)
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

    public function getValue()
    {
        return $this->value;
    }
}
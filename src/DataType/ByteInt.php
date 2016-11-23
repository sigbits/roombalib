<?php
/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 23/11/2016
 */

namespace Sigbits\RoombaLib\DataType;

/**
 * Class ByteInt
 * @package Sigbits\RoombaLib\DataType
 */
class ByteInt
{
    /**
     * @var int
     */
    private $value;

    /**
     * ByteInt constructor.
     * @param $value
     */
    public function __construct($value)
    {
        if (is_int($value) && (0 <= $value) && (256 > $value)) {
            $this->value = $value;
        } else {
            throw new \RuntimeException('ByteInt must be constructed with an integer between 0 and 255 (inclusive)');
        }
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getByte()
    {
        return pack("C", $this->getValue());
    }
}
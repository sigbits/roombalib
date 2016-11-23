<?php
/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 23/11/2016
 */

namespace Sigbits\RoombaLib\SCI;

use Sigbits\RoombaLib\DataType\ByteInt;

class CommandData
{
    /**
     * @var ByteInt[]
     */
    private $values;

    /**
     * CommandData constructor.
     * @param array $data
     */
    public function __construct(array $values = [])
    {
        $this->values = [];

        foreach($values as $key => $byteValue) {
            $byte = new ByteInt($byteValue);
            $this->$values[] = $byte;
        }
    }

    /**
     * @return string
     */
    public function getByteString()
    {
        return pack("C*", ...$this->values);
    }

    /**
     * @return ByteInt[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @return int
     */
    public function size()
    {
        return count($this->values);
    }
}
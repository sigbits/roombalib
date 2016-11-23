<?php
namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\SCI\Opcode;

/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */
class Leds extends AbstractDataCommand
{
    /**
     * Leds constructor.
     */
    public function __construct($data)
    {
        parent::__construct(Opcode::LEDS, $data);
    }
}
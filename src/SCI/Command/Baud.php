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
     * Baud constructor.
     */
    public function __construct($data)
    {
        parent::__construct(Opcode::BAUD, $data);
    }
}
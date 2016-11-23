<?php
namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\SCI\Opcode;
use Sigbits\RoombaLib\SCI\Command;

/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */
class Safe extends Command
{
    /**
     * Safe constructor.
     */
    public function __construct()
    {
        parent::__construct(Opcode::SAFE);
    }
}
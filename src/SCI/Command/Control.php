<?php
namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\SCI\Opcode;

/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */
class Control extends AbstractCommand
{
    /**
     * Control constructor.
     */
    public function __construct()
    {
        parent::__construct(new Opcode(Opcode::CONTROL));
    }
}
<?php
namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\SCI\Opcode;

/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */
class Play extends AbstractDataCommand
{
    /**
     * Play constructor.
     */
    public function __construct($data)
    {
        parent::__construct(Opcode::PLAY, $data);
    }
}
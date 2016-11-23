<?php
namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\SCI\CommandData;
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
    public function __construct(CommandData $data)
    {
        parent::__construct(new Opcode(Opcode::BAUD), $data);
    }

    /**
     * @param CommandData $data
     */
    protected function assertDataPassesCommandSpecificValidations(CommandData $data)
    {
        $this->assertNumberOfDataBytesBetween(1, 1, $data);
    }
}
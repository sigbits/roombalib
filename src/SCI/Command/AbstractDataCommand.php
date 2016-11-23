<?php
/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */

namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\SCI\Command;
use Sigbits\RoombaLib\SCI\Opcode;

/**
 * Data commands carry optional data
 * Concrete implementations should validate this data
 *
 * Class AbstractDataCommand
 * @package Sigbits\RoombaLib\SCI\Command
 */
abstract class AbstractDataCommand extends Command
{
    /**
     * @var string $data
     */
    private $data;

    /**
     * AbstractDataCommand constructor.
     * @param Opcode $opcode
     * @param $data
     */
    public function __construct(Opcode $opcode, $data)
    {
        parent::__construct($opcode);
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function asByteString()
    {
        return pack("C*", $this->getOpcode()->getValue() . $this->getData());
    }
}
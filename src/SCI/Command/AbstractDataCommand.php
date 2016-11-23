<?php
/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */

namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\SCI\Command;
use Sigbits\RoombaLib\SCI\CommandData;
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
     * @var CommandData $data
     */
    private $data;

    /**
     * AbstractDataCommand constructor.
     * @param Opcode $opcode
     * @param CommandData $data
     */
    public function __construct(Opcode $opcode, CommandData $data)
    {
        parent::__construct($opcode);

        // A valid CommandData object is byte-serializable,
        // every command has it's own additional validation rules

        $this->assertDataPassesCommandSpecificValidations($data);
        $this->data = $data;
    }

    /**
     * @param CommandData $data
     */
     protected function assertDataPassesCommandSpecificValidations(CommandData $data)
     {
         return; // by default allow any command data
     }

    /**
     * @param int $min
     * @param null $max
     * @param CommandData $data
     * @throws \Exception
     */
     protected function assertNumberOfDataBytesBetween($min = 0, $max = null, CommandData $data)
     {
         $min = (int) $min;
         $max = is_null($max) ? null : (int) $max;
         $size = $data->size();

         if ($min > $size) {
             throw new \Exception(
                 sprintf('Expected at least %d databytes, but got %d', $min, $size)
             );
         }

         if (!is_null($max) && ($max < $size)) {
             throw new \Exception(
                 sprintf('Expected at most %d databytes, but got %d', $max, $size)
             );
         }
     }

     /**
      * @return CommandData
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
        $opCode = $this->getOpcode()->getValue();
        $data = $this->getData()->getValues();
        array_unshift($data, $opCode);

        return pack("C*", ...$data);
    }
}
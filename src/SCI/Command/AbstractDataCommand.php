<?php
/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 */

namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\Command;

/**
 * Data commands carry optional data
 * Concrete implementations should validate this data
 *
 * Class AbstractDataCommand
 * @package Sigbits\RoombaLib\SCI\Command
 */
abstract class AbstractDataCommand implements Command
{
    /**
     * @var string $data
     */
    private $data;

    /**
     * AbstractDataCommand constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }
}
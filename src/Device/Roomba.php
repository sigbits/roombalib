<?php
namespace Sigbits\RoombaLib\Device;

use Sigbits\RoombaLib\Socket\Connection;

/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 22/11/2016
 *
 * Represents a Roomba vacuum cleaner with a socket connection
 */
class Roomba
{
    /**
     * Roomba constructor.
     * @param Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Sends a command to the connection
     * @param \Sigbits\RoombaLib\SCI\Command $command
     */
    public function execute(\Sigbits\RoombaLib\SCI\Command $command)
    {
        var_dump($command);
    }
}
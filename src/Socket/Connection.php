<?php
/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 18/11/2016
 */
namespace Sigbits\RoombaLib\Socket;

use Sigbits\RoombaLib\SCI\Command;
use Sigbits\RoombaLib\SCI\Command\AbstractDataCommand;

/**
 * Represents a socket connection to a Roomba
 * Class Connection
 * @package Sigbits\RoombaLib\Socket
 */
class Connection
{
    /**
     * @var resource
     */
    private $client;

    /**
     * @var int
     */
    private $lastErrorNumber;

    /**
     * @var string
     */
    private $lastErrorMessage;

    /**
     * Create a new socket connection
     * @param string $host
     * @param int $port
     * @param int $timeout
     */
    public function __construct($host, $port = 9001, $timeout = 30)
    {
        $this->client = stream_socket_client(
            sprintf('tcp://%s:%d',$host, $port),
            $errorNumber,
            $errorMessage
        );

        $this->lastErrorNumber = $errorNumber;
        $this->lastErrorMessage = $errorMessage;
    }

    /**
     * @param Command $data
     */
    public function write(Command $command)
    {
        fwrite($this->client, $command->asByteString());
    }
}
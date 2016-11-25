<?php
/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 18/11/2016
 */
namespace Sigbits\RoombaLib\Socket;

use Sigbits\RoombaLib\SCI\Command\AbstractCommand;

/**
 * Represents a socket connection to a Roomba
 * Class Connection
 * @package Sigbits\RoombaLib\Socket
 */
class Connection
{
    /**
     * @var string
     */
    private $host;

    /**
     * @var int
     */
    private $port;

    /**
     * @var bool
     */
    private $initialized;

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
    public function __construct($host, $port = 9001)
    {
        $this->host = $host;
        $this->port = $port;

        $this->initialized = false;
    }

    /**
     */
    public function init()
    {
        $this->client = stream_socket_client(
            sprintf('tcp://%s:%d',$this->host, $this->port),
            $errorNumber,
            $errorMessage
        );

        $this->initialized = true;

        $this->lastErrorNumber = $errorNumber;
        $this->lastErrorMessage = $errorMessage;
    }

    /**
     * @return bool
     */
    public function isInitialized()
    {
        return $this->initialized;
    }

    /**
     * @return string
     */
    public function getLastErrorMessage()
    {
        return $this->lastErrorMessage;
    }

    /**
     * @return int
     */
    public function getLastErrorNumber()
    {
        return $this->lastErrorNumber;
    }

    /**
     * @param AbstractCommand $data
     */
    public function write(AbstractCommand $command)
    {
        fwrite($this->client, $command->asByteString());
    }
}
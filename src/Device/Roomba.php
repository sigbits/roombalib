<?php
namespace Sigbits\RoombaLib\Device;

use Sigbits\RoombaLib\SCI\Command\AbstractCommand;
use Sigbits\RoombaLib\SCI\Command\CommandFactory;
use Sigbits\RoombaLib\SCI\CommandData;
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
     * @var Connection
     */
    private $connection;

    /**
     * @var CommandFactory
     */
    private $commandFactory;


    /**
     * Roomba constructor.
     * @param Connection $connection
     */
    public function __construct(Connection $connection, CommandFactory $commandFactory = null)
    {
        $this->connection = $connection;

        if (is_null($commandFactory)) {
            $commandFactory = new CommandFactory();
        }

        $this->commandFactory = $commandFactory;
    }

    /**
     * Sends a command to the connection
     * @param AbstractCommand $command
     */
    public function execute(AbstractCommand $command)
    {
        return $this->connection->write($command);
    }

    /**
     * @param $name
     * @param array $arguments
     * @throws \Exception
     */
    public function __call($name, array $arguments)
    {
        $data = (empty($arguments) ? null : array_shift($data));

        if (!empty($arguments) || (!is_null($data) && (!is_array($data)) || (!$data instanceof CommandData))) {
            throw new \Exception('Roomba::_call() magic method supports only virtual method calls with zero or one CommandData or array arguments');
        }

        return $this->executeCommandByMethodName($name, $data);

    }

    /**
     * @param $name
     * @param null $data
     */
    private function executeCommandByMethodName($name, $data = null)
    {
        $command = $this->commandFactory->create(ucfirst($name), $data);

        return $this->execute($command);
    }
}
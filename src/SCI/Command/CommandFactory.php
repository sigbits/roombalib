<?php
/**
 * Created by PhpStorm.
 * User: Maarten van Leeuwen <maarten@sigbits.nl>
 * Date: 25/11/2016
 */

namespace Sigbits\RoombaLib\SCI\Command;

use Sigbits\RoombaLib\SCI\CommandData;

/**
 * Class CommandBuilder
 * @package Sigbits\RoombaLib\SCI\Command
 */
class CommandFactory
{
    /**
     * @param string $commandName
     * @param array | CommandData $data
     * @return AbstractCommand|AbstractDataCommand
     */
    public function create($commandName, $data = null)
    {
        $fqcn = sprintf('%s\\%s', __NAMESPACE__, ucfirst($commandName));

        if (is_subclass_of($fqcn, sprintf('%s\\%s', __NAMESPACE__, 'AbstractDataCommand'))) {
            return $this->createAbstractDataCommand($fqcn, $data);
        }

        if (is_subclass_of($fqcn, sprintf('%s\\%s', __NAMESPACE__, 'AbstractCommand'))) {
            return $this->createAbstractCommand($fqcn);
        }
    }

    /**
     * @param string $fqcn
     * @return AbstractCommand
     */
    private function createAbstractCommand($fqcn)
    {
        return new $fqcn();
    }

    /**
     * @param string $fqcn
     * @param array | CommandData $data
     * @return AbstractDataCommand
     */
    private function createAbstractDataCommand($fqcn, $data = null)
    {
        if (!$data instanceof CommandData) {
            $data = new CommandData($data);
        }

        return new $fqcn($data);
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: seanboyle
 * Date: 3/11/15
 * Time: 5:15 PM
 */

namespace seniorproject\Core;

use App;

trait CommandBus {

    /**
     * Execute the command
     * @param $command
     * @return mixed
     */
    public function execute($command)
    {
        return $this->getCommandBus()->execute($command);
    }

    /**
     * Fetch the command bus
     * @return mixed
     */
    public function getCommandBus()
    {
        return App::make('Laracasts\Commander\CommandBus');
    }
}
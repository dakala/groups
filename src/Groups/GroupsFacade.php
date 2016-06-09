<?php

namespace Dakala\Groups;

use Illuminate\Support\Facades\Facade;

class GroupsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'groups';
    }
}

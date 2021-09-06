<?php

namespace Ibrah\Ibrahipkg;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ibrah\Ibrahipkg\Ibrahipkg
 */
class IbrahipkgFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}

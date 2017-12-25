<?php

namespace Toolkito\Larabase;

use \Illuminate\Support\Facades\Facade;

class LarabaseFacade extends Facade
{

    protected static function getFacadeAccessor() {
        return 'lara_base';
    }
}

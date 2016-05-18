<?php namespace carl\test\Facades;

use Illuminate\Support\Facades\Facade;

class OK extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ok';
    }
}

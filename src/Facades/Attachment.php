<?php

namespace Akkurate\LaravelDialog\Facades;

use Illuminate\Support\Facades\Facade;

class Attachment extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'attachment';
    }
}
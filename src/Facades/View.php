<?php

namespace VC\Slider\Facades;

use Illuminate\Support\Facades\Facade;

class View extends Facade
{
    protected static function getFacadeAccessor()
    {
        return new \VC\Slider\Services\View;
    }
}

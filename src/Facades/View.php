<?php

namespace NF\Slider\Facades;

use Illuminate\Support\Facades\Facade;

class View extends Facade
{
    protected static function getFacadeAccessor()
    {
        return new \NF\Slider\Services\View;
    }
}

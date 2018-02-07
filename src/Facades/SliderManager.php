<?php

namespace VC\Slider\Facades;

use Illuminate\Support\Facades\Facade;
use VC\Slider\Manager;

class SliderManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SliderManager';
    }
}

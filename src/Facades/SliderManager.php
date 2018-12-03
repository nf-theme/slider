<?php

namespace NF\Slider\Facades;

use Illuminate\Support\Facades\Facade;
use NF\Slider\Manager;

class SliderManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'SliderManager';
    }
}

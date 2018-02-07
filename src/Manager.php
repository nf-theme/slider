<?php

namespace VC\Slider;

use Illuminate\Support\Collection;
use NightFury\Option\Facades\ThemeOptionManager;
use VC\Slider\Abstracts\Slider;

class Manager
{
    public $sliders;
    
    public function add($data)
    {
        if (!isset($data['fields']) || !is_array($data['fields'])) {
            throw new \Exception("Please register your fields attribute", 1);
        }
        $slider = new Slider;
        $slider->setName($data['name']);
        $slider->setType($data['type']);
        $slider->setStyle($data['style']);
        $slider->setSize($data['size']);

        $args_themeoption = [
            'name'   => $data['name'],
            'fields' => $data['fields'],
        ];
        ThemeOptionManager::add($args_themeoption);

        $fields = new Collection();
        if (!isset($data['options'])) {
            $default_options = [
                "slidesToShow"   => 1,
                "slidesToScroll" => 1,
                "autoplay"       => true,
                "pauseOnHover"   => true,
                "infinite"       => true,
                "dots"           => true,
            ];
        }
        $options = wp_parse_args($data['options'], $default_options);

        $slider->setOptions($options);
        $slider->setNameGallery($data['fields'][0]['name']);
        $slider->setFields($data['fields']);

        if($this->sliders == null) {
            $this->sliders = new Collection([$slider]);
        } else {
            $this->sliders->push($slider);
            die('ok');
        }
    }

    /**
     * Retrievie the list of slider
     *
     * @return \Illuminate\Support\Collection
     */
    public function getSliders()
    {
        return $this->sliders;
    }

    /**
     * Get page by slug
     *
     * @return array
     */

    public function getSlider($slug)
    {
        if (!isset($slug)) {
            if ($this->getSliders()->count() == 0) {
                throw new \Exception("Slider not found", 1);
            }
            return $this->getSliders()->first();
        }
        $k = $this->getSliders()->search(function ($item) use ($slug) {
            return str_slug($item->name) == str_slug($slug);
        });
        if ($k === false) {
            throw new \Exception("Slider not found", 1);
        }
        return $this->getSliders()->get($k);
    }
}

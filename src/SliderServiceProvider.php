<?php

namespace NF\Slider;

use Illuminate\Support\ServiceProvider;
use NF\Facades\App;
use NF\Slider\Manager;

class SliderServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('SliderView', function ($app) {
            $view = new \NF\View\View;
            $view->setViewPath(__DIR__ . '/../resources/views');
            $view->setCachePath(__DIR__ . '/../resources/cache');
            return $view;
        });
        $this->app->singleton('SliderManager', function ($app) {
            return new Manager;
        });
        $this->registerAction();
    }

    public function registerAction()
    {
        add_action('wp_enqueue_scripts', function () {
            wp_enqueue_style(
                'slider-module-style',
                wp_slash(get_stylesheet_directory_uri() . '/vendor/nf/slider/assets/dist/app.css'),
                false
            );
            wp_enqueue_script(
                'slider-module-scripts',
                wp_slash(get_stylesheet_directory_uri() . '/vendor/nf/slider/assets/dist/app.js'),
                'jquery',
                '1.2',
                true
            );
        });
        add_shortcode('nf-slider', function ($args) {
            $manager      = App::make('SliderManager');
            $slider       = $manager->getSlider($args['name']);
            $type         = $slider->getType();
            $style        = $slider->getStyle();
            $options      = $slider->getOptions();
            $size         = get_stylesheet_directory_uri() . '/vendor/nf/slider/assets/images/' . $slider->getSize() . '.png';
            $name_gallery = $slider->getNameGallery();

            $list_slider = get_option(str_slug($name_gallery));
            return App::make('SliderView')->render('slider', compact('type', 'style', 'name_gallery', 'options', 'size', 'list_slider'));
        });
    }

    public function registerCommand()
    {
        // Register your command here, they will be bootstrapped at console
        //
        // return [
        //     PublishCommand::class,
        // ];
    }
}

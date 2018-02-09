# Slider package
 > It's an extension kit for our theme https://github.com/hieu-pv/nf-theme 
 
## Before Installation
##### Step 1: Install Nf-Theme-Option package
> [nf-theme-option](https://github.com/hieu-pv/nf-theme-option)

<a name="installation"></a>
## Installation
##### Step 1: Install Through Composer
```
composer require vicoders/slider-for-nftheme
```
##### Step 2: Add the Service Provider
> Open `config/app.php` and register the required service provider.

```php
  'providers'  => [
        // .... Others providers 
        \VC\Slider\SliderServiceProvider::class
    ],
```

##### Step 3: Register your option scheme
> You can add your option scheme to `functions.php`

All supported type can be found here 
- [Size](https://github.com/garungabc/SliderForNftheme/blob/master/src/Abstracts/Size.php)
- [SliderType](https://github.com/garungabc/SliderForNftheme/blob/master/src/Abstracts/SliderType.php)

```php
use VC\Slider\Abstracts\Size;
use VC\Slider\Abstracts\Type;
use VC\Slider\Facades\SliderManager;

SliderManager::add([
    'name'    => 'Slider Homepage',
    'type'    => Type::SLICK,
    'style'   => 'style-1',
    'size'    => Size::SIZE_3X1,
    'fields'  => [
        [
            'label'       => 'Slider',
            'name'        => 'slider',
            'type'        => Input::GALLERY,
            'description' => 'Gallery with meta field, for now we support text and textarea on meta field.',
        ],
    ],
    'options' => [
        'slidesToShow'   => 1,
        'slidesToScroll' => 1,
        'autoplay'       => true,
        'pauseOnHover'   => true,
        'infinite'       => true,
        'dots'           => true,
    ],
]);
```

##### Step 4: Add shortcode
> Automatic create a shortcode name `vc-slider` with a attribute `name` is require:

```php
[vc-slider name="{slider name}"]
```

Example:
```php
[vc-slider name="Banner homepage"]
```

##### Step 5: Insert shortcode wherever you need
> Very easy
```php
do_shortcode("[vc-slider name='Banner homepage']")
```

## Last step
> {tip} Drink tea and relax !
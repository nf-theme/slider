<?php 

namespace VC\Slider\Abstracts;

use VC\Slider\Abstracts\Size;
use VC\Slider\Abstracts\SliderType;

class Slider 
{
	/**
	 * [$name Name of slider object]
	 * @var string
	 */
	public $name = '';

	/**
	 * [$type slick, owl-carousel]
	 * @var string
	 */
	public $type = SliderType::SLICK;

	/**
	 * [$fields options for slider]
	 * @var array
	 */
	public $fields = [];

	/**
	 * [$style style type for slider]
	 * @var string
	 */
	public $style = 'slider-1';

	/**
	 * [$options options for slider type]
	 * @var string
	 */
	public $options = '';

	/**
	 * [$name_gallery]
	 * @var string
	 */
	public $name_gallery = '';

	/**
	 * [$size background size]
	 * @var [type]
	 */
	public $size = Size::SIZE_1X1;

	/**
	 * [setName set name for slider]
	 * @param string $name name to configuration
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * [getName get name of slider]
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * [setType set type for slider]
	 * @param string $type configuration type for slider
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}

	/**
	 * [getName get name of slider]
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * [setFields set fields for slider]
	 * @param array $fields fields to configuration
	 */
	public function setFields($fields) {
		$this->fields = $fields;
		return $this;
	}

	/**
	 * [getFields get fields of slider]
	 * @return array
	 */
	public function getFields() {
		return $this->fields;
	}

	/**
	 * [setStyle set style for slider]
	 * @param string $style style to configuration
	 */
	public function setStyle($style) {
		$this->style = $style;
		return $this;
	}

	/**
	 * [getStyle get style of slider]
	 * @return string
	 */
	public function getStyle() {
		return $this->style;
	}

	/**
	 * [seOptions set options for slider]
	 * @param array $options options to configuration
	 */
	public function setOptions($options) {
		$options = json_encode($options);
		$this->options = $options;
		return $this;
	}

	/**
	 * [getOptions get options of slider]
	 * @return string
	 */
	public function getOptions() {
		return $this->options;
	}

	/**
	 * [setNameGallery description]
	 * @param [type] $name_gallery [description]
	 */
	public function setNameGallery($name_gallery) {
		$this->name_gallery = $name_gallery;
		return $this;
	}

	/**
	 * [getNameGallery get name gallery input of slider]
	 * @return string
	 */
	public function getNameGallery() {
		return $this->name_gallery;
	}

	/**
	 * [setSize set background image url for slider]
	 * @param [type] $size [description]
	 */
	public function setSize($size) {
		$this->size = $size;
		return $this;
	}

	/**
	 * [getSize return image url to set background for slider]
	 * @return string [description]
	 */
	public function getSize() {
		return $this->size;
	}
}
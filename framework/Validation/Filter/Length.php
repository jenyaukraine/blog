<?php
namespace Framework\Validation\Filter;

class Length implements ValidationFilterInterface{
  protected $min;
	protected $max;
	/**
	 * @param $min
	 * @param $max
	 */
	public function __construct($min, $max){
		$this->min = $min;
		$this->max = $max;
	}
	public function isValid($value){
		return ((strlen($value)>=$this->min) && (strlen($value)<=$this->max))?true:"Length are less then ".$this->min." symbols";
	}
}

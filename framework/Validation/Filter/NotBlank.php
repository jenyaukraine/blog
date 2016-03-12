<?php
namespace Framework\Validation\Filter;

class NotBlank implements ValidationFilterInterface{
  public function isValid($value){
		return !empty($value)?true:"Sorry field can't be empty";
	}
}


?>

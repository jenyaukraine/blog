<?php
namespace Framework\Validation;

class Validator{
    public $isValid = false;
    public $errors = array();

    public function __construct($data)
    {
      $Params = (array) $data;
      foreach ($Params as $key => $value)
      {
          if(array_key_exists($key, $data->getRules()))
          {
            foreach($data->getRules()[$key] as $checkObj)
            {
             if(!($checkObj->isValid($value) == 1))
                $this->errors[$key] = $checkObj->isValid($value);
            }
          }
      }
      if(empty($this->errors))
        $this->isValid = true;
    }
    public function isValid(){
      return $this->isValid;
    }
    public function getErrors(){
      return $this->errors;
    }
}
 ?>

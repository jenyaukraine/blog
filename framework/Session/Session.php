<?php
namespace Framework\Session;

class Session {

      public $returnUrl = '/';

      public function __construct()
      {
        session_start();
      }
      public function __set($name, $val){

      }
      public function __get($name){

      }
      

}


?>

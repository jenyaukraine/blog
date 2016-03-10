<?php
namespace Framework\Session;

class Session {

      public $returnUrl = '/';

      public function __construct()
      {
        if ($this->status() !== PHP_SESSION_ACTIVE)
            session_start();
        //print_r($_SESSION);
      }
      public function __set($name, $val){

      }
      public function __get($name){
        return $_SESSION[$name];
      }
      public function status()
      {
        return session_status();
      }

}


?>

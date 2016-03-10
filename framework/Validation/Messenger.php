<?php
namespace Framework\Validation;

class Messenger{

    public static $error = array();

    public function __construct(){}

    public static function get()
    {
      isset($_SESSION['error'])? self::$error = $_SESSION['error']:'';
      unset($_SESSION['error']);
      return self::$error;
    }
    public static function set($message = '',$type='msgs'){
          $_SESSION['error'][] = $type=array($message);
    }
}

?>

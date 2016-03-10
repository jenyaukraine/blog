<?php
namespace Framework\Security;

class Security {

    public function isAuthenticated()
    {
      if(isset($_SESSION['role']))
      return true;
      else return false;
    }

    public function clear(){
      session_destroy();
    }
    public function getUserRole()
    {
      if(isset($_SESSION['role']))
        return $_SESSION['role'];
      else return false;
    }
    public function setUser($user)
    {
      foreach(get_object_vars($user) as $key => $value)
        $_SESSION[$key] = $value;
    }
}


 ?>

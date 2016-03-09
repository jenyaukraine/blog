<?php
namespace Framework\Security;

class Security {

    public function isAuthenticated()
    {
      return true;
    }

    public function clear(){}

    public function getUserRole()
    {
       return 'ROLE_USER';
    }
    public function setUser($user)
    {
      //($user);
    }
}


 ?>

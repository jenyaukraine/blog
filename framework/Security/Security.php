<?php
namespace Framework\Security;

class Security {

    public function isAuthenticated()
    {
        return false;
    }

    public function clear(){}

    public function getUserRole()
    {
      //TODO: complete consideration of roles.
      return 'ROLE_USER';
    }
}


 ?>

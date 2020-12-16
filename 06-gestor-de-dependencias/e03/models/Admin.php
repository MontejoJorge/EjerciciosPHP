<?php
require "User.php";

class Admin extends User {
    private $admin_level;

    public function __construct($admin_level)
    {
        if ($admin_level==1||2||3){
            $this->admin_level = $admin_level;
        } else {
            $this->admin_level = 1;
        }
    }

    public function desactivarUsuario(){

    }


}
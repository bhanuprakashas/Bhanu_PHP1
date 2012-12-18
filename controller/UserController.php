<?php


class UserController extends Controller
{

    public $default = "test";
    
    public function test($username, $password) {
        if($username == "username" && $password == "password") {
            echo "Welcome!";
        } else {
            echo "Username and Password do not match";
        }
    }


}
?>
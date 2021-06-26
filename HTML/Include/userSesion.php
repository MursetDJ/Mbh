<?php
class UserSession{
    public function __construct(){
        session_start();
    }
    public function setCurrentUser($user){
        $_SESSION['user']=$user;
    }
    public function getCurrentUser(){
        $_SESSION['user']=$user;
    }
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>
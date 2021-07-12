<?php

// manejar la session
class UserSession{

    public function __construct(){
        // iniciar la sesion
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
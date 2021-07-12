<?php
    include_once 'userSesion.php';

    $userSesion = new UserSesion();
    $userSesion->closeSession();
    
    header("location: ../index.php")
    
?>
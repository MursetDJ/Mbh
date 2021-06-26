<?php
    include_once 'include/user.php';
    include_once 'include/userSesion.php';
    $userSesion = new userSesion();
    $user = new User();
    if(isset($_SESSION['user'])){
       // echo "Hay sesion";
       $user->setUser($userSesion->getCurrentUser());
       include_once 'home.php';
    }else if(isset($_POST['username']) && isset($_POST['password'])){
        //echo "validacion de login";
        $userForm= $_POST['username'];
        $passForm= $_POST['password'];
        if($user->userExists($userForm,$passForm)){
           // echo "usuario validado";
            $userSesion->setCurrentUser($userForm);
            $user->setUser($userForm);

            include_once 'home.php';
        }
        else{
           // echo "Nombre de usuario o contraseña incorrecta";
            $errorLogin = "Nombre de usuario y/o contraseña incorrecta";
            include_once 'login.php';
        }
    }else{
        //echo "login";
        include_once 'login.php';
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <form action="" method="POST">
       <?php
            include_once 'DB.php';
            session_start();
            if(isset($_GET['cerrar_sesion'])){
                session_unset();
                session_destroy();
            }
            if(isset($_SESSION['rol'])){
                switch($_SESSION['rol']){
                    case 1:
                        header('location: admin.php');
                    case 2:
                        header('location: insp.php');
                    case 3:
                        header('location: usuario.php');
                    break;

                    }
            }
            if(isset($_POST['username']) && isset($_POST['password'])){
        //echo "validacion de login";
             $userForm= $_POST['username'];
            $passForm= $_POST['password'];
            $db= new dataBase();
            if($user->userExists($userForm,$passForm)){
           // echo "usuario validado";
                $userSesion->setCurrentUser($userForm);
                $user->setUser($userForm);

            include_once 'home.php';
             }
            }
            if(isset($errorLogin)){
                echo $errorLogin;
            }


       ?>
        <h2>Iniciar sesión</h2>
        <p>Nombre de usuario: <br>
        <input type="text" name="username"></p>
        <p>Password: <br>
        <input type="password" name="password"></p>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
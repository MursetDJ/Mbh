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
            include_once 'include/DB.php';
            session_start();
            
            if(isset($_GET['cerrar_sesion'])){
                session_unset();
                session_destroy();
            
            }
            
            if(isset($_POST['User_NombreUsuario']) && isset($_POST['User_password'])){
        //echo "validacion de login";
             $userForm= $_POST['User_NombreUsuario'];
            $passForm= $_POST['User_password'];
            $db= new dataBase();
            $query= $db->connect()->prepare('SELECT * FROM usuario WHERE User_NombreUsuario= :User_NombreUsuario AND User_password =:User_password');
            $query->execute(['User_NombreUsuario'=>$username, 'User_password'=>$password]);
            $row=$query->fetch(PDO::FETCH_NUM);
            if($row==true){
                $row=$row[3];
                $_SESSION['rol']=$rol;
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
            else{

            }
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
        <input type="text" name="User_NombreUsuario"></p>
        <p>Password: <br>
        <input type="password" name="User_password"></p>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
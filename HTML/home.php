<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">   

<title>
    MBH Group S.A.C.
</title>
</head>|

<body> 
    <div id=menu>
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion">
                <a href="include/logout.php">Cerrar sesion</a>
            </li>
        </ul>
    </div>
    <section>
        <h1>Bienvenido <?php echo $user->getUser();?></h1>
    </section>      
</body>
</html>
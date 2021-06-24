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
</head>
<body class="bg-color">
    <header id="main-header">
        <h1>INICIO DE SESION</h1>
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="#main-header">Inicio de sesion</a></li>
                <li class=""><a href="#feature">Interfaz</a></li>
                <li class=""><a href="#service">Inpeccion</a></li>
                <li class="active"><a href="#portfolio">Observacion</a></li>
                <li class=""><a href="#testimonial">Reunion</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="relleno">
        <h2>Codigo</h2>       
            <form action="" method="get">
                <input type="text" name="busqueda" placeholder="Ingrese código"><hr>
                <input type="submit" name="Buscar" value="Buscar">
            </form>
          <?php
            if(isset($_GET['enviar'])){
              $busqueda= $_GET['busqueda'];
              $consulta=$con->query("SELECT * FROM observacion WHERE obs_codgenerado LIKE '%$busqueda%'");
            while($row=$consulta->fetch_array()){
              echo $row['porque'].'<br>';
            }
            }
           

          ?>
        <div class="textoaux">
            <a href="Interfaz.html" >¿Olvidaste tu contraseña?</a>
        </div>
        <div class="distanciamiento">
            <button class="btn btn-primary width-100" style="height: 20%;width: 20%;" type="submit">
               Ingresar
            </button>  
        
        <button class="btn btn-primary width-100" style="height: 20%;width: 20%;" type="submit">
                Regresar
            </button>
        </div>
        </div>    
</body>

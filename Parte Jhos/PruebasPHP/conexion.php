<?php

    // creando las variables
    $host = "localhost";
    $db  = "mbh";
    $usuario  = "root";
    $password = "Jhosmer1997*";
    $charset = "utf8mb4";


    $conexion = 
    mysqli_connect($host,$usuario,$password,$db);
    if(!$conexion)
    {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    }
    else
    {
        echo "<h3>Conexion Exitosa PHP - MySQL</h3><hr><br>";
    }
    

    // //creamos la variable para conectarnos a la bd
    // $conexion = mysqli_connect($host,$db,$usuario,$password,$charset);

    // //si no se lleva correcta la conexion
    // if(!$conexion) 
    // {
    //     echo "la conexion fallo";
    // } else{
    //     echo "la conexion fue exitosa";
    // }
?>
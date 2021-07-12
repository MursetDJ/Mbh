<?php

//nesecitamos la conexion
 include ("conexion.php");



// echo $_SERVER['REQUEST_METHOD'];

// if ($_SERVER['REQUEST_METHOD' ]== 'POST'){

//     header('Location: olvidar.html');
// } 



//variables para cada entrada
$usuario = $_POST["usuario"];
$pass = $_POST["pass"];
$dni = $_POST["dni"];
// $fotocheck = $_POST["fotocheck"];
// $nombre_completo = $_POST["nombre_completo"];
// $empresa = $_POST["empresa"];
// $cargo = $_POST["cargo"];
// $tipo = $_POST["tipo"];
// $area_trabajo = $_POST["area_trabajo"];

// //login
if (isset($_POST["ingresar"])) 
{
    //lo que tiene =  a lo que ingresamos
    $query=mysqli_connect($conexion,"SELECT * FROM usuario WHERE User_NombreUsuario=:'$usuario' AND User_password =:'$pass'");
    //si lo encuentra, hay filas (1) quiere decir que existe y lo deja avanzar
    $nr=mysqli_num_rows($query);
    
    if ($nr==1) {
        echo "<script> alert('bienvenido $usuario'); window.location='principal.html' </script>";
    }
    //si no hay nada volver a cargar el login
    else{
        echo "<script> alert('Usuario o contraseña incorrecto'); window.location='index.html' </script>";
    }
}

//registrar, depende de la hoja de registro
 if (isset($_POST["bntonregistrar"])) {
    $sqlgrabar="UPDATE `usuario` SET `User_NombreUsuario`='Cleider' WHERE 1";
  
    // $sqlgrabar="INSERT INTO `usuario`( `User_NombreUsuario`, `User_password`, `User_DNI`, `User_FC`, `User_Nombre`, `User_Empresa`, `User_Cargo`, `User_Tipo`, `User_Estado`, `User_Area`, `User_EmpresaId`) VALUES ('$usuario','$pass','$dni','$fotocheck','$nombre_completo','$empresa','$cargo','$tipo','$area_trabajo')";

     if(mysqli_query($conexion,$sqlgrabar))
 	{
 		// echo "<script> alert('Usuario registrado con exito: $usuario'); window.location='index.html' </script>";
         echo "en una paaa ";
 	}else 
 	{
 		// echo "Error: ".$sqlgrabar."<br>".mysql_error($conexion);
         echo "nada ";
 	}

}

?>
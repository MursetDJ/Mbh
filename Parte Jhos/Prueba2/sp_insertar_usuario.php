<?php

    $usuario= $_POST['usuario'];
    $pass= md5( $_POST['pass']);
    $dni= $_POST['dni'];
    $fotocheck= $_POST['fotocheck'];
    $nombre= $_POST['nombre'];
    $empresa= $_POST['empresa'];
    $cargo= $_POST['cargo'];
    $tipo= $_POST['tipo'];
    $area= $_POST['area'];
    $idempresa= $_POST['idempresa'];


  $cnx = mysqli_connect("localhost","root","Jhosmer1997*","mbh");

  $sql="INSERT INTO `usuario`(`User_NombreUsuario`, `User_password`, `User_DNI`, `User_FC`, `User_Nombre`, `User_Empresa`, `User_Cargo`, `User_Tipo`, `User_Area`, `User_EmpresaId`) VALUES ( '$usuario','$pass','$dni','$fotocheck','$nombre','$empresa','$cargo','$tipo','$area','$idempresa')";
  $rta=mysqli_query($cnx,$sql);

  if ($rta) {
    

      echo "<script> alert('Usuario registrado con exito: $usuario'); window.location= '../Prueba2/index_usuario.php' </script>";
      
      
  }
  else {
    echo "Ups ocurrio un error";
    // header ("Location: index.php");
  }
?>
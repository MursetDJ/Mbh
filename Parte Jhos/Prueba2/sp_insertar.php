<?php

    $empresa= $_POST['empresa'];
    $ruc= $_POST['ruc'];
    $telefono= $_POST['telefono'];
    $ciudad= $_POST['ciudad'];


  $cnx = mysqli_connect("localhost","root","Jhosmer1997*","mbh");

  $sql="INSERT INTO `empresa`( `Empresa_RazonSocial`, `Empresa_RUC`, `Empresa_Telefono`, `Empresa_Ciudad`) VALUES ('$empresa','$ruc','$telefono','$ciudad')";
  $rta=mysqli_query($cnx,$sql);

  if ($rta) {
      echo "se inserto correctamente";
  }
  else {
    echo "Ups ocurrio un error";
    // header ("Location: index.php");
  }
?>
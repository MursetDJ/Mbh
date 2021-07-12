<?php
    $id= $_POST['id'];
    $empresa= $_POST['empresa'];
    $ruc= $_POST['ruc'];
    $telefono= $_POST['telefono'];
    $ciudad= $_POST['ciudad'];


  $cnx = mysqli_connect("localhost","root","Jhosmer1997*","mbh");

  $sql= "UPDATE empresa SET Empresa_RazonSocial='$empresa',Empresa_RUC='$ruc',Empresa_Telefono='$telefono',Empresa_Ciudad='$ciudad' WHERE Empresa_Id = $id" ;
  $rta=mysqli_query($cnx,$sql);

  if ($rta) {
      echo "se actualizaron los campos correctamente";
  }
  else {
    echo "Ups ocurrio un error, revisar";
    // header ("Location: index.php");
  }
?>
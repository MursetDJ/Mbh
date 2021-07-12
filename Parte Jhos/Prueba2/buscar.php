<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba para mostrar </title>
</head>
<body>
    <div>
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Nuevo</a>
        </form>
    </div>


    <div>
        <p>

        </p>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Nombre empresa</td>
                <td>RUC</td>
                <td>Telefono</td>
                <td>ciudad</td>
                <td>opciones</td>
                

            </tr>
            <?php

            //Agregamos el buscar
            $buscar = $_POST['buscar'];


            $cnx = mysqli_connect("localhost","root","Jhosmer1997*","mbh");
            
            // $sql="SELECT `Empresa_Id`, `Empresa_RazonSocial`, `Empresa_RUC`, `Empresa_Telefono`, `Empresa_Ciudad` FROM `empresa` WHERE Empresa_Telefono LIKE '$buscar' '%' ";
            $sql="SELECT `Empresa_Id`, `Empresa_RazonSocial`, `Empresa_RUC`, `Empresa_Telefono`, `Empresa_Ciudad` FROM `empresa` WHERE Empresa_RazonSocial LIKE '$buscar' '%' OR Empresa_Telefono LIKE '$buscar' '%'";
            $rta=mysqli_query($cnx,$sql);
            //
            // echo $mostrar;
            // die();
            while ($mostrar=mysqli_fetch_row ($rta)) {

               ?>
               <tr>
                   <td><?php echo $mostrar['0'] ?></td>
                   <td><?php echo $mostrar['1'] ?></td>
                   <td><?php echo $mostrar['2'] ?></td>
                   <td><?php echo $mostrar['3'] ?></td>
                   <td><?php echo $mostrar['4'] ?></td>
                   <td>
                       <a href="editar.php? 
                       id=<?php echo $mostrar['0'] ?> &
                       empresa=<?php echo $mostrar['1'] ?> &
                       ruc=<?php echo $mostrar['2'] ?> &
                       telefono=<?php echo $mostrar['3'] ?> &
                       ciudad=<?php echo $mostrar['4'] ?> 
                       ">Editar</a>
                       <a href="eliminar.php">Eliminar</a>
                   </td>
               </tr>
               <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
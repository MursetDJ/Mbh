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
            <a href="nuevo_usuario.php">Nuevo</a>
        </form>
    </div>


    <div>
        <p>

        </p>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>usuario</td>
                <td>contraseña</td>
                <td>dni</td>
                <td>Fotocheck</td>
                <td>nombre</td>
                <td>empresa</td>
                <td>rol</td>
                <td>Tipo</td>
                <td>Estado</td>
                <td>area de trabajo</td>
                <td>Empresa ID</td>

                <td>opciones</td>
                

            </tr>
            <?php
            $cnx = mysqli_connect("localhost","root","Jhosmer1997*","mbh");

            $sql="SELECT `User_Id`, `User_NombreUsuario`, `User_password`, `User_DNI`, `User_FC`, `User_Nombre`, `User_Empresa`, `User_Cargo`, `User_Tipo`, `User_Estado`, `User_Area`, `User_EmpresaId` FROM `usuario` ";
            $rta=mysqli_query($cnx,$sql);

            while ($mostrar=mysqli_fetch_row ($rta)) {

               ?>
               <tr>
                   <td><?php echo $mostrar['0'] ?></td>
                   <td><?php echo $mostrar['1'] ?></td>
                   <td><?php echo $mostrar['2'] ?></td>
                   <td><?php echo $mostrar['3'] ?></td>
                   <td><?php echo $mostrar['4'] ?></td>
                   <td><?php echo $mostrar['5'] ?></td>
                   <td><?php echo $mostrar['6'] ?></td>
                   <td><?php echo $mostrar['7'] ?></td>
                   <td><?php echo $mostrar['8'] ?></td>
                   <td><?php echo $mostrar['9'] ?></td>
                   <td><?php echo $mostrar['10'] ?></td>
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
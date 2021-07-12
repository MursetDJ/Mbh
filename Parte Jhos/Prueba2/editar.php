<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro de empresa</title>
</head>
<body>

<?php
 $id= $_GET['id'];
 $empresa= $_GET['empresa'];
 $ruc= $_GET['ruc'];
 $telefono= $_GET['telefono'];
 $ciudad= $_GET['ciudad'];

?>
    <div>
        <form action="sp_editar.php" method="post">
            <table border="1">
                <tr>
                    <td> Actualizar Datos</td>
                    <td><input type="text" name="id" id="" style="" value="<?=$id?>"></td>
                </tr>

                <tr>
                <td>Ingrese Empresa</td>
                    <td><input type="text" name="empresa" id="" value="<?=$empresa?>"></td>
                </tr>

                <tr>
                <td>Ingrese RUC</td>
                    <td><input type="text" name="ruc" id="" value="<?=$ruc?>"></td>
                </tr>

                <tr>
                <td>Ingrese telefono</td>
                    <td><input type="text" name="telefono" id="" value="<?=$telefono?>"></td>
                </tr>

                <tr>
                <td>Ingrese ciudad de la empresa</td>
                    <td><input type="text" name="ciudad" id="" value="<?=$ciudad?>"></td>
                </tr>


                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
       
    </div>
</body>
</html>
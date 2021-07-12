<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo registro</title>
</head>
<body>
    <div>
        <form action="sp_insertar_usuario.php" method="post">
            <table border="1">
                <tr>
                    <td>Ingresar datos del nuevo registro de usuario</td>
                </tr>

            
                 <tr>
                    <td>Ingrese Usuario</td>
                    <td><input type="text" name="usuario" id=""></td>
                </tr>

                <tr>
                    <td>Ingrese contraseña</td>
                    <td><input type="password" name="pass" id=""></td>
                </tr>

                <tr>
                    <td>Ingrese Nombre DNI</td>
                    <td><input type="number" name="dni" id=""></td>
                </tr>

                <tr>
                    <td>Ingrese Nombre fotocheck</td>
                    <td><input type="number" name="fotocheck" id=""></td>
                </tr>

                <tr>
                    <td>Ingrese Nombre completo</td>
                    <td><input type="text" name="nombre" id=""></td>
                </tr>

                <tr>
                    <td>Ingrese empresa</td>
                    <td><input type="text" name="empresa" id=""></td>
                </tr>

                <tr>
                    <td>Ingrese Cargo</td>
                    <td><input type="text" name="cargo" id=""></td>
                </tr>

                <tr>
                    <td>Ingrese Tipo</td>
                    <td><input type="text" name="tipo" id=""></td>
                </tr>

            
                <tr>
                    <td>Ingrese Area</td>
                    <td><input type="text" name="area" id=""></td>
                </tr>

                <tr>
                    <td>Ingrese ID Empresa</td>
                    <td><input type="number" name="idempresa" id=""></td>
                </tr> 

                <tr>
                    <td><input type="submit" value="Guardar"></td>
                </tr>
            </table>
        </form>
       
    </div>
</body>
</html>
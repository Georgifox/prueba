<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario y expresiones regulares</title>
</head>
<body>

    <form action="PR09.php" method="get" enctype="multipart/form-data">
        <p>
            <label for="idName">Nombre</label>
            <input type="text" name="nombre" id="idName">
            <?php
                 $patron='/[[:upper:]]\D{3,}$/';
                $cadena=$_GET['nombre'];

                if(enviado() && vacio("nombre"))
                ?>
                    <span class="alerta"><-Rellena el campo</span>
                <?
            ?>
              
        </p>
    
        <p>
            <label for="idApellido">Apellidos</label>
            <input type="text" name="nombre" id="idApellido">
            <?php
                 $patron='/[[:upper:]]\D{5,}/';
                $cadena=$_GET['nombre'];
            ?>
        </p>

        <p>
            <label for="idpass">Contraseña</label>
            <input type="text" name="pass" id="idpass">
        </p>

        <p>
            <label for="idRepPass">Repetir Contraseña</label>
            <input type="text" name="repPass" id="idRepPass">
        </p>

        <p>
            <label for="idRepPass">Repetir Contraseña</label>
            <input type="text" name="repPass" id="idRepPass">
        </p>

        
        <p>
            <label for="idDni">Dni</label>
            <input type="text" name="dni" id="idDni">
        </p>

        <p>
            <label for="idEmail">Correo Electronico</label>
            <input type="text" name="email" id="idEmail">
        </p>

        <input type="submit" value="enviar" name="enviar"><br>

    </form>
    
</body>
</html>
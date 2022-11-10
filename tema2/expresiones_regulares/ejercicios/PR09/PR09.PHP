<?php 
    require("../funciones/funcionesValida.php");
?>
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
                if(preg_match($patron,$cadena)!=1){
                    echo"no cumple con el patron";
                }
                //validacion
                if(enviado() && vacio("nombre"))
                ?>
                    <span class="alerta"><-Rellena el campo</span>
                <?
            ?>
              
        </p>
    
        <p>
            <label for="idApellido">Apellidos</label>
            <input type="text" name="apellido" id="idApellido">
            <?php
                $patron='/^[[:upper:]]\D{3,}\s{1}[[:upper:]]\D{3,}$/';
                $cadena=$_GET['apellido'];
                if(preg_match($patron,$cadena)!=1){
                    echo"no cumple con el patron";
                }
                //validacion
                if(enviado() && vacio("apellido"))
                ?>
                    <span class="alerta"><-Rellena el campo</span>
                <?
            ?>
        </p>
        
        <p>
            <label for="idFecha">Fecha</label>
            <input type="text" name="fecha" id="idFecha">
            <?php
                $patron='/^[1-9]{1,2}-[1-9]{1,2}-\d{4}$/';
                $cadena=$_GET['fecha'];
                strtotime($cadena);
                if(preg_match($patron,$cadena)!=1){
                    echo"no cumple con el patron";
                }
                //validacion
                if(enviado() && vacio("apellido"))
                ?>
                    <span class="alerta"><-Rellena el campo</span>
                <?
            ?>
        </p>
   


        
        <p>
            <label for="idDni">Dni</label>
            <input type="text" name="dni" id="idDni">
            <?php
                $patron='/^\d{8}\D{1}$/';;
                $cadena=$_GET['dni'];
                if(preg_match($patron,$cadena)!=1){
                    echo"no cumple con el patron";
                }
                //validacion letra
                validarDNI();
                //validacion
                if(enviado() && vacio("dni"))
                ?>
                    <span class="alerta"><-Rellena el campo</span>
                <?
            ?>
        </p>

        <p>
            <label for="idEmail">Correo Electronico</label>
            <input type="text" name="email" id="idEmail">
            <?php
                $patron='/^[A-Za-z0-9]{1,}@[A-Za-z0-9]{1,}\.[A-Za-z0-9]{2,}$/';
                $cadena=$_GET['email'];
                if(preg_match($patron,$cadena)!=1){
                    echo"no cumple con el patron";
                }
                //validacion letra
                validarDNI();
                //validacion
                if(enviado() && vacio("dni"))
                ?>
                    <span class="alerta"><-Rellena el campo</span>
                <?
            ?>
        </p>
        <input type="submit" value="enviar" name="enviar"><br>
    </form>
    
</body>
</html>
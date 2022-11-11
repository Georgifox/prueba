

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post" enctype="multipart/form-data" id="msform"> <!--  ********** ARCHIVO 1º enctype="multipart/form-data" 2º crear la carpeta para Llos archivos -->
       <fieldset>PR09 PATRONES Y VALIDACION DE FORMULARIO<br>
            <input type="text" name="nombre" placeholder="Nombre" id="idNombre"> 
            <input type="text" name="apellidos" placeholder="Apellidos" id="idApellidos">
            <input type="text" name="pass" placeholder="Contraseña" id="idPass"> 
            <input type="text" name="repPass" placeholder="Repetir Contraseña" id="idRepPass">
            <input type="text" name="dni" placeholder="DNI" id="idDni"> 
            <input type="text" name="date" placeholder="Fecha" id="idDate"> 
            <input type="text" name="mail" placeholder="Correo Electronico" id="idMail"> 
            <p>
                <input type="file" name="img" class="botonImagen">
            </p>
            <input type="submit" value="Enviar" name="submit" class="boton">

            <?php
                include("validar.php");
            ?>
        </fieldset> 
    </form>
    
</body>
</html>
<?php 
    require("./funciones.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheros</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <?php
        if(isset($_REQUEST['enviar'])){
            if(isset($_REQUEST['fichero'])){
                if(file_exists($_REQUEST['fichero'])){
                    header('Location: ./leer.php?fichero='.$_REQUEST['fichero']);
                    exit();
                }
            }
        }
    ?>


    <form  method="get">
        <p> 
            <label for="idFichero">Nombre: </label>
            <input type="text" name="fichero" id="idFichero"><br>
            <input type="submit" value="Editar" onclick="this.form.action='./editaFichero.php'">
            <?php
                if(enviadoEditar()) editar();
            ?>
            <input type="submit" value="Leer">

        </p>
    </form>
</body>
</html>
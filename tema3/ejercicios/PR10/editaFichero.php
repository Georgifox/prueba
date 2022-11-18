<?php 
     include("funciones.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="GET" action='editaFichero.php'>
    <input type="hidden" id="ocultoId" name="oculto">
    <textarea id="idAreaEditar" name="areaEditar" rows="4" cols="50">

    <?php
    echo $_REQUEST['fichero'];
    ?>

    </textarea>
    <input type="button" value="Confirmar Edicion" name="editarFichero">
</form>
    
</body>
</html>
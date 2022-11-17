    <?php
            include("funciones.php");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficheros</title>
    <!-- <link rel="stylesheet" href="./css/styles.css"> -->
</head>
<body>
    <?php
        if(isset($_REQUEST['leer'])){
            if(isset($_REQUEST['fichero'])){
                if(file_exists($_REQUEST['fichero'])){
                    header('Location: ./leerFichero.php?fichero='.$_REQUEST['fichero']);
                    exit();
                }
                else{
                    echo"<p class='error'>* Rellena el nombre del fichero<p>";
                }
            }
            if(isset($_REQUEST['editar'])){
                header('Location: ./editarFichero.php?fichero='.$_REQUEST['fichero']);
                    exit();
            }
        }

    ?>




    <form  method="GET" action='eligeFichero.php'>
        <p> 
            <label for="idFichero">Nombre del fichero: </label>
            <input type="text" name="fichero" id="idFichero"><br>
            <textarea id="idAreaEditar" name="areaEditar" rows="4" cols="50" placeholder="introduce el texto del fichero"></textarea>
            <input type="submit" value="editar"name='editar' >
            <input type="submit" value="leer" name="leer"><br>
        </p>

    </form>
</body>
</html>
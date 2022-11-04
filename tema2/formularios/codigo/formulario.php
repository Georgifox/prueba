<?php 
    require("tema2/funciones/funcionesValida.php");
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
    <form action="formulario.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="idNombre">Nombre</label>
            <input type="text" name="nombre" id="idNombre" placeholder="escribe tu nombre"
            value="">
             <?php
                if(vacio("nombre")&& enviado()){
                    ?>
                        <span>Debe elegir genero</span>
                    <?
                }
            ?>
        </p>    

        <p>
            <label for="pass">contraseña</label>
            <input type="password" name="contraseña" id="pass">

            <?php 
                    if vacio("contraseña"){
                        ?>
                        <span>RELLENA contraseña</span>
                        <?
                    }
            ?>
        </p>

        <p>
            <label for="idMasculino">masculino</label>
            <input type="radio" name="genero" id="idMasculino" value="masculino">
            <label for="idFemenino">femenino</label>
            <input type="radio" name="genero" id="idFemenino" value="femenino">

            <?php
                if(enviado()&&vacio("genero"){

                }
            ?>

            <?php
                if(!existe("genero")&& enviado()){
                    ?>
                        <span>Debe elegir genero</span>
                    <?
                }
            ?>
        </p>

        <p>
            <b>Asignaturas</b>
            <label for="asignaturas">Asignatura1</label>
            <input type="checkbox" name="asignatura[]" id="c_asignaturas" value="matematicas">
            <label for="asignaturas2">Asignatura2</label>
            <input type="checkbox" name="asignatura[]" id="c_asignaturas" value="php">
        </p>

        <p><b>Curso</b>
        <select name="cursos" id="idCursos">
            <option value="0">Seleccionar</option>
            <option value="1">Primero</option>
            <option value="2">Segundo</option>
        </select>
        </p>
        
        <p>
        <label for="idarchivos">selecciona los archivos</label>
        <input type="file" name="archivos" id="idArchivos">
        </p>
            <input type="submit" value="enviar" name="enviar"><br>

    </form>
    bien
</body>
</html>


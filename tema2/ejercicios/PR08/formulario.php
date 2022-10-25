<?php 
    require("./validar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR08 formulario</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <h1>Formulario de registro</h2>
    <form action="formulario.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="name">nombre</label>
                <input type="text" name="nombre" id="name">
                    <?php
                        if(enviado() && vacio("nombre"))
                            ?>
                                <span class="alerta"><-Rellena el campo</span>
                            <?
                    ?>
        </p>

        <p>
            <label for="name2">nombre</label>
                <input type="text" name="nombre2" id="name2">
                    <?php
                            if(enviado() && vacio("nombre2"))
                                ?>
                                    <span class="alerta"><-Rellena el campo</span>
                                <?
                        ?>
        </p>

        <p>
        <label for="idapellido">apellido</label>
            <input type="text" name="apellido" id="idapellido">
                    <?php
                                if(enviado() && vacio("nombre2"))
                                    ?>
                                        <span class="alerta"><-Rellena el campo</span>
                                    <?
                            ?>
        </p>
        <label for="idapellido2">apellido</label>
            <input type="text" name="apellido2" id="idapellido2">
                    <?php
                        if(enviado() && vacio("nombre2"))
                            ?>
                                <span class="alerta"><-Rellena el campo</span>
                            <?
                    ?>
        </p>
        <p>
            <label for="idfecha">fecha</label>
                <input type="date" name="fecha" id="idfecha">
                    <?php
                        if(enviado() && vacio("fecha"))
                            ?>
                                <span class="alerta"><-introduce la fecha</span>
                            <?
                    ?>
        </p>

        <p>
            <label for="idfecha_op">fecha</label>
                <input type="date" name="fechaOp" id="idfecha_op">
        </p>

        <p>
        <label for="idopcion1">opcion1</label>
            <input type="radio" name="opcion" id="idopcion1" value="opcion 1">
            <label for="idopcion2">opcion2</label>
            <input type="radio" name="opcion" id="idopcion2" value="opcion 2">
            <label for="idopcion3">opcion3</label>
            <input type="radio" name="opcion" id="idopcion3" value="opcion 3">
                <?php
                    if(enviado() && vacio("opcion"))
                        ?>
                            <span class="alerta"><-selecciona una opcion</span>
                        <?
                ?>
        </p>

        <p><b>elige una opcion</b>
        <select name="opciones" id="idopciones">
            <option value="seleccionar">Seleccionar</option>
            <option value="opcion 1">opcion 1</option>
            <option value="opcion 2">opcion 2</option>
            <option value="opcion 3">opcion 3</option>
        </select>
        
                <?php
                    if(enviado()&& vacio("opciones"))
                        ?>
                            <span class="alerta"><-selecciona una opcion</span>
                        <?
                ?>
        </p>

        <p>
            <b>Elige almenos 1 y maximo 3</b><br>
            <label for="asignaturas">check1</label>
                <input type="checkbox" name="check[]" id="idcheck1" value="op1">
                    <?php
                        if(existe("check")){
                            if(in_array('op1',$_REQUEST['check'])){

                            }
                        } 
                    ?>
            <label for="asignaturas2">check2</label>
                <input type="checkbox" name="check[]" id="idcheck2" value="op2">
                    <?php
                        if(existe("check")){
                            if(in_array('op2',$_REQUEST['check'])){

                            }
                        } 
                    ?>
            <label for="asignaturas2">check3</label>
                <input type="checkbox" name="check[]" id="idcheck3" value="op3">
                    <?php
                        if(existe("check")){
                            if(in_array('op3',$_REQUEST['check'])){

                            }
                        } 
                    ?>
                <label for="asignaturas">check4</label>
                <input type="checkbox" name="check[]" id="idcheck4" value="op4">
                    <?php
                        if(existe("check")){
                            if(in_array('op4',$_REQUEST['check'])){

                            }
                        } 
                    ?>
            <label for="asignaturas2">check5</label>
                <input type="checkbox" name="check[]" id="idcheck5" value="op5">
                    <?php
                        if(existe("check")){
                            if(in_array('op5',$_REQUEST['check'])){

                            }
                        } 
                    ?>
            <label for="asignaturas2">check6</label>
                <input type="checkbox" name="check[]" id="idcheck6" value="op6">
                    <?php
                        if(existe("check")){
                            if(in_array('op6',$_REQUEST['check'])){

                            }
                        } 
                    ?>


        </p>
        
        <p>
            <label for="idtelefono">telefono</label>
                <input type="tel" name="telefono" id="idtelefono">
        </p>
      
        <p>
            <label for="idpass">telefono</label>
                <input type="password" name="pass" id="idpass">
        </p>

        <p>
            <label for="idarchivos">selecciona los archivos</label>
                <input type="file" name="archivos" id="idArchivos">
        </p>

            <input type="submit" value="enviar" name="enviar"><br>


        
    </form>
    
</body>
</html>
<?php
    if($_REQUEST['nombre']<= 0){
        echo"rellena el campo";
    }else{
        echo"El nombre es ". $_REQUEST['nombre'];  
    } 
    echo "<br>";

    if($_REQUEST['nombre']<= 0){
        echo"rellena el campo";
    }else{
        echo"La contraseña es". $_REQUEST['contraseña']; 
    } 
    echo "<br>";

    if(isset($_REQUEST['genero']))
    echo "<br>El genero es ". $_REQUEST['genero'];
    else
        echo"debes rellenar el genero";
    echo "<br>";  
    echo"las asignaturas elegidas son:";
    if(isset($_REQUEST['asignatura']))
    foreach ($_REQUEST['asignatura'] as $key => $value) {
        print_r($_REQUEST);
    }

    echo"ninguna";
    if(isset($_FILES['archivos']));
    print_r($_FILES['archivos']);



    $ubicacion="/var/www/html/prueba/tema2/formularios/";
    $nombreTemporal= basename($_FILES['archivos']['name']);
    $tmp_name=$_FILES["archivos"]["tmp_name"];
    $ubicacion=$ubicacion.$nombreTemporal;
    
    if(move_uploaded_file($_FILES['archivos']["tmp_name"],$ubicacion)){
        echo "<br>se ha subido";
    }else{
        echo"<br> ha fallado";
    }




?>

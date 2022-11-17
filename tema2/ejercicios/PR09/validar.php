
<?php

$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellidos'];
$contraseña=$_REQUEST['pass'];
$repetirContraseña=$_REQUEST['repPass'];
$fecha=$_REQUEST['date'];
$dni=$_REQUEST['dni'];
$correo=$_REQUEST['mail'];
$imagen=$_FILES['img']; // Maria esto lo añadi luego de hacer las validaciones en el formulario porque me da palo estar repitiendo request (por si te preguntas porque)


//VALIDACIONES DE FORMULARIO 
    if(isset($_REQUEST['submit'])){

        if(empty($nombre)){
            echo "<p class='error'> *Escribe El nombre</p>";
        }elseif(!empty($nombre)) {
            if(!preg_match('/[[:upper:]]\D{3,}$/',$nombre)){
                echo "<p class='error'>El nombre No coicide con el patron</p>";
             }
        }

        if(empty($apellido)){
            echo "<p class='error'> * Escribe El Apellido </p>";
        }elseif(!empty($apellido)){
            if(!preg_match('/^[[:upper:]]\D{3,}\s{1}[[:upper:]]\D{3,}$/',$apellido)){
                echo "<p class='error'>Los apellidos No coicide con el patron</p>";
            }
        }


        if(empty($contraseña)){
            echo "<p class='error'> * Escribe La Contraseña</p>";
        }elseif(!empty($contraseña)) {
            if(!preg_match('/^[[:upper:]]\D{1,}[[:lower:]]\D{1,}\d{1}/',$contraseña)){
                echo "<p class='error'> La contraseña No coicide con el patron</p>";
            }
        }


        if(empty($repetirContraseña)){
            echo "<p class='error'> * Escribe De Nuevo La Contraseña </p>";
        }elseif(!empty($repetirContraseña)) {
            if(!preg_match('/^[[:upper:]]\D{1,}[[:lower:]]\D{1,}\d{1}/',$repetirContraseña)){
                echo "<p class='error'>Rep contraseña No coicide con el patron</p>";
            }
        }   


        if(empty($fecha)){
            echo "<p class='error'> * Escribe La Fecha </p>";
        }elseif(!empty($fecha)){
            if(!preg_match('/^[1-9]{1,2}-[1-9]{1,2}-\d{4}$/',$fecha)){
                echo "<p class='error'>La fecha No coicide con el patron</p>";
            }
        }


        if(empty($dni)){
            echo "<p class='error'> * Escribe El Dni </p>";
        }elseif(!empty($dni)) {
            if(!preg_match('/^\d{8}\D{1}$/',$dni)){
                echo "<p class='error'>El Dni No coicide con el patron</p>";
            }
        }


        if(empty($correo)){
            echo "<p class='error'> * Escribe El Correo </p>";
        }elseif(!empty($correo)) {
            if(!preg_match('/^[A-Za-z0-9]{1,}@[A-Za-z0-9]{1,}\.[A-Za-z0-9]{2,}$/',$correo)){
                echo "<p class='error'>El correo No coicide con el patron</p>";
            }
        }

        if(empty($imagen)){
            echo "<p class='error'> Añade una imagen</p>";
        }
    }


    // if(isset($_REQUEST['submit'])){
        
    //     if(!empty($dni)){
    //         validarFecha();
    //     }
    // }

        function validarDNI(){
            $dni=substr($_REQUEST["Dni"],0,-1);
            $numDNi=interval($dni);
            $letras = array('T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E');
            $resto=$numdni % 23;
            $dniCorrecto=$numdni.$letras[$resto];
            if($dni!=$dniCorrecto){
                echo "<p class='error'> * La Letra del Dni no es valida </p>";
            }
        }

        function validarContraseñas(){
            $pass=$_REQUEST['pass'];
            $repetirPass=$_REQUEST['repPass'];
            if($pass!==$repetirPass){
                echo "<p class='error>Las contraseña No Coicide</p>";
            }
        }



        function validarEdad ($fecha){
            $mayor=18;
            $fechaNacimiento = DateTime::createFromFormat('Y-m-d', $fecha);
            $calculo = $fechaNacimiento->diff(new DateTime()); //php metodos ->
            $edad=  $calculo->y;    
            if ($edad < $mayor) 
            {
                echo "<p class='error'> * es menor de edad</p>";
             }
        }


    
        function validarImagen(){
            $path = "imagenes/". basename($_FILES['imagen']['name']); 

            if($_FILES['imagen']['type'] !== 'image/png' ){
                echo "<p class='error'> La imagen debe ser de la extensión JPG ,PNG O BMP</p>";
            }elseif ($_FILES['imagen']['type'] !== 'image/jpg' ) {
                echo "<p class='error'> La imagen debe ser de la extensión JPG ,PNG O BMP</p>";
            }elseif ($_FILES['imagen']['type'] !== 'image/jpg' ) {
                echo "<p class='error'> La imagen debe ser de la extensión JPG ,PNG O BMP</p>";
            }
        
            if(move_uploaded_file($_FILES['imagen']['tmp_name'], $path)) {
                echo "El archivo ".  basename( $_FILES['imagen']['name']). " ha sido subido";
            } else{
                echo "<p class='correcto'El archivo no se ha subido correctamente</p>";
            }
        }
    
?>
<?php

    include("funciones.php");

    saludo();
    echo"<br>";
    saludo2("georgi");
    echo"<br>";
    saludo2("georgi",2);
    echo"<br>";
    //saludo2(); da fallo porque internamente no lo localiza en el array

    $nombre="georgi";

    echo"<br>cambio de nombre ";
    echo"<br>";
    saludo2("maria");
    echo"<br>";
    //formas para que cambie el valor de la funcion 
    //devolver con return 
    $nombre=saludo5("manuel");
    //referencia
    //global 

    //funcion valor por defecto
    echo"<br>";
    echo"ahora valor por referencia<br>";
    echo"<br>";
    saludo();


    //llamada funcion y resultado
    echo"<br>";
    echo"funcion array<br>";
    echo"<br>";
    rellenoarray($array);
    rellenoarray($array);
    rellenoarray($array);
    rellenoarray($array);
    rellenoarray($array);
    print_r($array);

    //objetos
    class cuadrado{
        public $lado=5;

    }

    $objeto=new cuadrado();
    cambioLado($objeto,6);
    echo"<br>Objeto :" ->$objeto->lado;

?>



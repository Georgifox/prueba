<h2>valor y referencias</h2>

<?php

$var=1;
$var1=$var;
echo $var. "<br>";
echo $var1. "<br>";
$var1=$var1 +1;
echo $var. "<br>";
echo $var1. "<br>";


echo "<br>";

$var=1;
$var1=&$var;
echo $var. "<br>";
echo $var. "<br>";
$var1=$var1 +1;
echo $var. "<br>";
echo $var. "<br>";

echo "<br>";

$global=1;

function cambio(){

    $global=2;
    echo "el valor de la global dentro de la funcion es " .$global ."<br>";
}
echo "<br>";
cambio();
echo $global;

$global=1;

function cambio2(){
    global $global;
    $local=$global ;
    echo "el valor de la global dentro de la funcion es " .$local ."<br>";;
}
echo "<br>";
cambio2();
echo $global;

echo "<h2>FUNCION ESTATIC</h2>";

function crearCoches(){
    static $numvecesCreada=0;
    $numvecesCreada= $numvecesCreada+1;
    echo "<br> has creado un coche";
    echo "<br> llevo creados " .$numvecesCreada . " coches";
}

crearCoches();
crearCoches();
echo "<br>";
echo "<br>";
?> 
<?php
    echo "<pre>";
        var_dump($_SERVER);
        var_dump($_GET);
        var_dump($_REQUEST);
        var_dump($_COOKIE);
        var_dump($_ENV);
        var_dump($_FILES);
        session_start;
        var_dump($_SESSION);
    echo "</pre>";
 ?>


<?php
    echo "<h2>mostrar nombre archivo ejecutandose</h2>";
    echo __FILE__; 

    //mostrar ip del equipo desde el que se accede 
    echo "<h2>mostrar ip del equipo desde el que se accede</h2>";
    echo "Tu dirección IP es: {$_SERVER['REMOTE_ADDR']}";
 
    //mostrar path directorio actual
    echo "<h2>mostrar path directorio actual</h2>";
    echo getcwd() . "\n";

    //mostrar fecha y hora actual formateada en año-mes-dia hora
    echo "<h2>mostrar fecha y hora actual formateada en año-mes-dia hora</h2>";
    echo date("Y-m-d h:m:s",time());

    echo date("g:i A");

    //fecha en oporto
    echo "<h2>fecha en oporto</h2>";
    ini_set('date.timezone','Europe/Lisbon'); //Lisboa porque Oporto no tiene soporte
    echo date("Y-m-d h:m:s");

    //timestamp y fecha de mi cumpleaños
    echo "<h2>timestamp y fecha de mi cumpleaños</h2>";
    $date = new DateTime("21-08-1998");
    $timestamp = $date->getTimestamp();
    echo $timestamp;

    //calcular fecha y dia dentro de 60 dias
    echo "<h2>timestamp y fecha de mi cumpleaños</h2>";
    $fecha_60=date("Y-m-d ", strtotime ("+ 60 days")); 
    echo $fecha_60;
?>

<!--pagina2-->
<?php

?>

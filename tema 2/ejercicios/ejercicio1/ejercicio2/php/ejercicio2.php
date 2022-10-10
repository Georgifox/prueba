
<?php
    //mostrar nombre archivo ejecutandose
    echo __FILE__;
    //mostrar ip del equipo desde el que se accede 
    echo "Tu dirección IP es: {$_SERVER['REMOTE_ADDR']}";
    //mostrar path directorio actual
    echo getcwd() . "\n";
    //mostrar fecha y hora actual formateada en año-mes-dia hora
    echo date("Y-m-d h:m:s",time());
    //ini_set('date.timezone','Europe/Madrid'); 
    echo date("g:i A");
    //fecha en oporto
    ini_set('date.timezone','Europe/Lisbon'); //Lisboa porque Oporto no tiene soporte
    echo date("Y-m-d h:m:s");
    //timestamp y fecha de mi cumpleaños
    $date = new DateTime("21-08-1998");
    $timestamp = $date->getTimestamp();
    echo $timestamp;
    //calcular fecha y dia dentro de 60 dias
    $fecha_60=date("Y-m-d ", strtotime ("+ 60 days")); 
    echo $fecha_60;
?>

<!--pagina2-->
<?php

?>
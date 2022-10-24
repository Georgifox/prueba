
<?php
 echo"<h2>tipo de variable</h2>";
 var_dump($_GET("varible"));
 echo"<h2>dia de la semana de la fecha introducida</h2>";
 strtotime($_GET("dia"));
 echo"<h2>diferencia de dias entre fechas de cumpleaños</h2>";
$fecha1= new DateTime($_GET("edad1"));
$fecha2= new DateTime($_GET("edad2"));
$intervalo= $fecha2->diff($fecha1);
echo"<br>Años : " .$intervalo->y . " meses : " .$intervalo->m ." dias : " .$intervalo->d ;
?>

<?php // tipos de fechas
//funcion time devuelve los segundos desde 1-1-1970
echo time();
//informa de la zona horaria
date_default_timezone_get();
echo "<br>";
echo date_default_timezone_get();


echo "<p>fecha de hoy</p>";
echo date("d m Y ",1124869800);
echo "<p>Horas min seg</p>";
echo date("d m Y  h:i:s ",1124869800);
echo strtotime("now");
echo "<p>con strtotime</p>";
echo strtotime("now"), "\n";

?>

<?php
echo date("d/m/Y", strtotime("2022-04-10"));
strtotime("2022-04-10");
echo "<br>";
echo "<br>";
echo mktime(0,0,0,10,4,2022);
//difrencia de dias meses y <años entre   2 echas

$fechadif1 = mktime(0,0,0,10,11,1994);
$fechadif2= strtotime("2022-10-04");
$dif=$fechadif2 - $fechadif1;

echo "diferencia : " .$dif;
//$year= $dif / (60,60,24,365);
//echo $year;
?>

<?php
//tipos de fechas especiales
$fecha1= new DateTime("1994-10-11");
$fecha2= new DateTime();
$intervalo= $fecha2->diff($fecha1);

echo"<br>Años : " .$intervalo->y . " meses : " .$intervalo->m ." dias : " .$intervalo->d ;

?>
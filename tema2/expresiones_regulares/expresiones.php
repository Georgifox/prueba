<?php
$cadena="Hoy hace muy buen dia y hay nubes";
$patron='/hace/';

echo "<br> cadena : ".$cadena." match ". preg_match($patron,$cadena);



$patron='/ha./';
echo "<br> cadena : ".$cadena." match ". preg_match($patron,$cadena);

$patron='/ha.\s/';
echo "<br> cadena : ".$cadena." match ". preg_match($patron,$cadena);

$patron='/h[o|a]y/';
echo "<br> cadena : ".$cadena." match ". preg_match($patron,$cadena);


$mes="Noviembre";
$mes1="November";
$mes2="aNov";
$patron='/^Nov[.|ember|iembre]$/';

echo "<br> cadena : ".$mes." match ". preg_match($patron,$mes);
echo "<br> cadena : ".$mes1." match ". preg_match($patron,$mes1);
echo "<br> cadena : ".$mes2." match ". preg_match($patron,$mes2);


$patron='/log [0-9]? .log/';
$cadena='log.log';
$cadena1='log2.log';
$cadena2='log123.log';

echo "<br> cadena : ".$cadena." match ". preg_match($patron,$cadena);
echo "<br> cadena : ".$cadena1." match ". preg_match($patron,$cadena1);
echo "<br> cadena : ".$cadena2." match ". preg_match($patron,$cadena2);


$patron='/^[A-Z]{2}\[0-9]{2}(\s)?[0-9]{4}(\s)?[0-9]{2}(\s)?[0-9](10)$/';
$cadena='ES2704872788545269675596';
$cadena1='ES27 0487 2788 54526967559';

echo "<br> cadena : ".$cadena." match ". preg_match($patron,$cadena);
echo "<br> cadena : ".$cadena1." match ". preg_match($patron,$cadena1);


$patron='/^\d{1,3}$/';
$cadena="0";
$cadena1="";
$cadena2="ª";
$cadena3="1000";
$cadena4="236";

echo "<br>";
echo "<h1>dentro de un html h3 </h1>";

$patron='/^<\/?\D+\d?>/';
$cadena='<html>dentro de un html</html><a>dentro del enlace</a><h1>dentro de un h1</h1>';

preg_match_all($patron,$cadena,$array);
foreach($array[0] as $value){
    echo str_replace('<','&lt',$value);
}

$patron='/^[a-z]+[0-9]?>(,*)<\/[a-z]+[0-9]?>/';
$cadena='<html>dentro de un html</html><a>dentro del enlace</a><h1>dentro de un h1</h1>';
preg_match_all($patron,$cadena,$array);
echo "dentro de etiqueta";

echo "<br><br>";


$lista=array("Georgi","Borisov", "24","Zamora");
$patron= '/^\d{1,3}$/';
$numeros= preg_grep($patron,$lista);
print_r($numeros);


echo "<br><br>";

$sustituir= "numeros";
$cambiado= preg_replace($patron,$sustituir,$lista);
print_r($cambiado);
?>



<?php
//funcion para pintar un salto de linea

function br(){
    echo"<br>";
}
//funcion pinta cadena entre dos h1
function h1($cadena){
    echo"<h1 >".$cadena. "< /h1>";
}
//funcion para rellenar un parrafo
function p($cadena1,$cadena2){
    echo"<p >".$cadena1 . $cadena2 ."</p>"; 
}
//devolver el fichero que se ejecuta
function self(){
    echo __FILE__; 
}

function letraDni($num_dni){
    $resto = $dni%23;  
    $letras= array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","KE");  
    echo $num_dni."<b>".$letras[$resto]."</b>";  
}

?>
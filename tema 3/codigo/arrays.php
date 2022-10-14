
<?php
$datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);
print_r($datos);

echo"<h2>Eliminar valores repetidos</h2>";

    /*foreach ($datos as &$valor) {
        if($valor==$valor) unset($valor);
    }*/


    
    $no_duplicados = array_unique($datos);
    $duplicados = array_diff_key($datos, $no_duplicados); 
print_r($duplicados);
echo"<h2>duplicados</h2>";
print_r($datos);
echo"<h2>Escribe un programa que dado un array devuelva la posición donde haya el valor 3 y cambie el
valor por el número de la posición</h2>";
$datos2 = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);
print_r($datos2);
echo"<h3>tras el bucle</h3>";
    foreach ($datos2 as $i=>&$valor) {
        if($valor==3){
            array_splice($datos2, $i, 1,$i);
        }
    }
print_r($datos2);
echo"<h2>Pedir dimensiones Matriz y rellenar</h2>";

//crear matriz con valores insertados
$matriz=array();

$relleno=1;
for($i=0;$i<$_GET('filas');$i++){
    $matriz[$i][1]=$relleno;

        for($j=0;$j<$$_GET('filas');$j++){
            $matriz[$j][0]=$relleno;
            $matriz[$i][$j]=$;
        }
}


foreach ($matriz as $i=>&$valor) {
    foreach($matriz as $j=>$valor){
        $nombres = array($i=> "valor", $j => "valor");
    }
}

//array[i,j]=array[]

?>
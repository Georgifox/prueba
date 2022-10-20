<?php


function saludo(){
    echo"hola";
}

function saludo2($nombre){
    echo"hola ". $nombre;
}



    //parametros que son tipos de dato "normales" se pasan por valor , no como referencia 
    //con un parametro

    
function saludo3($nombre){
    $nombre=$nombre . "valor";
    echo"hola ". $nombre;
}


    //global
    function saludo4($nombre){
        global $nombre;
        $nombre=$nombre . "valor";
        echo"hola ". $nombre;
    }
    //usando return
    function saludo5($nombre){
        echo"hola ". $nombre;
        return $nombre;
    }
    //referencia
    function saludo6($nombre){
        echo"hola ". $nombre;
        return $nombre;
    }

    //funcion que devuelva por defecto
    function saludo7($nombre="mundo"){
        $nombre=$nombre . "valor";
        echo"hola ". $nombre;
    }

    //pasar array
    $array=array();
    //llamar funcion que rellene con hora que se ha hecho la llamada

    function rellenoarray($array){
        
        array_push($array,date("h:i:s"));
        print_r($array);
    }

    function cambioLado($objeto,$lado){
        $objeto->lado=$lado;
    }

?>
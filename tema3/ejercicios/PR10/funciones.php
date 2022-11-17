<?php


    $nombreFichero=$_GET['fichero'];
    echo $nombreFichero;

    function vacio($nombre){
        if(empty($_REQUEST[$nombre])){
            return false;
        }else{
            return true;
        }
    }

    function enviado($nombre){
        if(isset($_REQUEST[$nombre])){
            return false;
        }else{
            return true;
        }
    }


  if(enviado('fichero')){
    if(vacio('editar')){
        echo "<p class='error' >*Rellena nombre";
    }else{
        $fp=fopen("/$nombreFichero.txt","w");
    }
  }

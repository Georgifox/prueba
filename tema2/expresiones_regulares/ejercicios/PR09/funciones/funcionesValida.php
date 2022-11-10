<?php
    function vacio($nombre){
        if(empty($_REQUEST[$nombre])){
            return false;
        }else{
            return true;
        }
    }

    function enviado(){
        if(isset($_REQUEST["enviar"])){
            return false;
        }else{
            return true;
        }
    }

    function existe($nombre){
        if(isset($_REQUEST[$nombre])){
            return false;
        }else{
            return true;
        }
    }

    function validarDNI(){
        $dni=substr($_GET["dni"],0,-1);
        $numDNi=interval($dni);
        $letras = array('T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z','S','Q','V','H','L','C','K','E');
        $resto=$numdni % 23;
        $dniCorrecto=$numdni.$letras[$resto];

        if($_GET["dni"]==$dniCorrecto){
            echo"el dni es correcto";
        }else{
            echo"dni incorrecto";
        }
    }

?>
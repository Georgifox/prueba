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

?>
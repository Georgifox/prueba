<?php
    function vacio($nombre){
        if(empty($_REQUEST[$nombre])){
            return false;
        }else{
            return true;
        }
    }

    function editar(){
        if(isset($_REQUEST["editarFichero"])){
            $fp =fopen($_REQUEST['fichero'],"w");
            $escribir=$_REQUEST['areaEditar'];
            fwrite($fp,$escribir,strlen($escribir));//devuelve el numero de bytes escritos
            fclose($fp);
        }
    }


    function leer(){
        if(isset($_REQUEST["Leer"])){

            if(!file_exists('fichero.txt')){
                echo"<br>NO exite";
            }else{
                echo"existe<br>";
                
                if(!$fp=fopen('fichero.txt',"r")){
                    echo "<br> ha habido un problema";
                }else{
                    //leer fichero
                    while($lea=fgets($fp,filesize("mifichero.txt"))){
                        echo "<br>";
                        $_REQUEST['areaLeer']=$lea;
                    }
                    fclose($fp);
                }
            }
        }
    }

    function enviadoEditar(){
        $fp =fopen($_REQUEST['fichero'],"w+b");
        fclose($archivo);
        if(isset($_REQUEST["Editar"])){
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
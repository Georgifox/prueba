<?php




if(isset($_REQUEST['editar'])){
    $fp=fopen($_REQUEST['fichero'],'w+b');
    fclose($fp);
}


function leer(){
    if(!file_exists('fichero.txt')){
        echo"<br>NO exite";
    }else{
        echo"existe<br>"; 
        if(!$fp=fopen($_REQUEST['fichero'],"r")){
            echo "<br> ha habido un problema";
        }else{
                //leer fichero
            while($lea=fgets($fp,filesize($_REQUEST['fichero']))){
                echo "<br>";
                $_REQUEST['areaLeer']=$lea;
            }
            fclose($fp);
        }
    } 
}
if(isset($_REQUEST['leer'])){
        
        if(!$fp=fopen($_REQUEST['leer'],"r")){
            echo "<br> ha habido un problema";
        }else{
            //leer fichero
            while($lea=fgets($fp,filesize($_REQUEST['leer']))){
                
                echo $lea;
            }
            fclose($fp);
        }
    }









    






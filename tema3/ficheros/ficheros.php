<?php
//Para abrir un fichero hay que crear un Sting para que actúe como tubería entre el lenguaje de programación y el fichero. 
//para los ficheros y los permisos "r" si no existe dara error pero "w" creara uno nuevo "a" para escribir al final del fichero

//abrir fichero SI EXISTE
//Se se va abrir uno con permiso "r" comprobar si existe

//****************LEER *************************************/

if(!file_exists('mifichero.txt')){
    echo"<br>NO exite";
}else{
    echo"existe<br>";
    
    if(!$fp=fopen('mifichero.txt',"r")){
        echo "<br> ha habido un problema";
    }else{
        //leer fichero
        while($lea=fgets($fp,filesize("mifichero.txt"))){
            echo "<br>";
            echo $lea;
        }
        fclose($fp);
    }
}

//ESCRIBIR
//abrir el fichero para escribir
if($fp =fopen("mifichero.txt","w")){
    $escribir= " 
    escribe 8/11/22 al final
    ";
    fwrite($fp,$escribir,strlen($escribir));//devuelve el numero de bytes escritos
    fclose($fp);
}else{
    echo"ha habido un error al escribir al final";
}


//cambiar la fecha de 22  a 2022
//replace str_replace
//r+

if(!file_exists('mifichero.txt')){
    echo"<br>NO exite";
}else{
    echo"<br>existe<br>";
    
    if(!$fp=fopen('mifichero.txt',"r+")){
        echo "<br> ha habido un problema al abrir el fichero";
    }else{
        $leido=fread($fp,filesize("mifichero.txt"));
        $remplazado=str_replace('/22','/2022',$leido);
        rewind($fp);
        /* fseek($fp,0) es como rewind pero se puede elegir la posicion con el segundo parametro*/
        fwrite($fp,$remplazado,strlen($remplazado));
        fclose($fp);
    }
}


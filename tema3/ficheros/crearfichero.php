PHP
<?php
  $fh = fopen("prueba.txt", 'w') or die("Se produjo un error al crear el archivo");
  
  $texto = <<<_END
Comienza con Linea 1
Linea 2
Termina con Linea 3
_END;
  
  fwrite($fh, $texto) or die("No se pudo escribir en el archivo");
  
  fclose($fh);
  
  echo "Se ha escrito sin problemas";
?>
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
<?php
  $fh = fopen("prueba.txt", 'w') or die("Se produjo un error al crear el archivo");
  
  $texto = <<<_END
Comienza con Linea 1
Linea 2
Termina con Linea 3
_END;
  
  fwrite($fh, $texto) or die("No se pudo escribir en el archivo");
  
  fclose($fh);
  
  echo "Se ha escrito sin problemas";
?>
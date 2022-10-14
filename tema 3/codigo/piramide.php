
<?php
$filas=5;
for( $altura = 1; $altura<=$filas; $altura++){
          //Espacios en blanco
          for($blancos = 1; $blancos<=$filas-$altura; $blancos++){
              echo"&nbsp;&nbsp; ";
          }

          //Asteriscos
          for($asteriscos=1; $asteriscos<=($altura*2)-1; $asteriscos++){
              echo"*";
          }
          echo"<br>";
    }

//2 piramides invertidas

for( $altura = 1; $altura<=$filas; $altura++){
          //Espacios en blanco
          for($blancos = 1; $blancos<=$filas-$altura; $blancos++){
              echo"&nbsp;&nbsp; ";
          }

          //Asteriscos
          for($asteriscos=1; $asteriscos<=($altura*2)-1; $asteriscos++){
              echo"*";
          }
          echo"<br>";
    } 
        //piramide abajo
for( $altura = 1; $altura<=$filas; $altura++){
            //Espacios en blanco
            for($blancos = 1; $blancos<=$filas-$altura; $blancos++){
                     echo"&nbsp;&nbsp; ";
            }
  
            //Asteriscos
            for($asteriscos=1; $asteriscos<=($altura*2)-1; $asteriscos++){
                
                if($asteriscos % 2 != 0){
                    echo"*";
                }
            }
            echo"<br>";
     } 
?>

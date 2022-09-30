
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Pruebas de php con html</h1>


<h1>tipos de datos</h1>

<?php 
    var_dump("georgi");
    var_dump(24);
    var_dump(1,87);
    ?>

   
        <?
            $mivariable=3;
            var_dump($mivariable);
            $mifloat=3.17;
            echo("<br>");
            var_dump($mifloat);
            $nuevoint=(int)$mifloat;
            var_dump($nuevoint);
            $booleano=true;
            var_dump($booleano);
            $variablenull = null; 
            is_null($variablenull);
        ?>
    
    <h1>Get</h1>

    <?php
        var_dump($_GET);
    ?>
 
    <h2>tipo de dato</h2>
    
    <?
        echo"mi variable es de tipo " . gettype($mivariable);
        echo "la variable de la ulr hijos es " . ($_GET["hijos"]);

        if (is_numeric($_GET["hijos"])) {
            echo var_export($_GET["hijos"], true) . " es numérico", PHP_EOL;
        } else {
            echo var_export($_GET["hijos"], true) . " NO es numérico", PHP_EOL;
        }
        
    ?>

    <h2>variable de variable</h2>

    <?php
        $viernes="fiesta";
        $$viernes="copas";
        echo $viernes;
        echo "<br>";
        echo "copas";
        echo "<br>";
        echo $$viernes;
        echo "<br>";
        echo $fiesta;
        echo "<br>";
    ?>



</body>
</html>
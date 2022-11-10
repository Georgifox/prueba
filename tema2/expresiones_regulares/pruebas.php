
<?php


    $patronnombre='/[[:upper:]]\D{3,}$/';
    $cadenanombre="Georgi";
    echo "<br> cadena : ".$cadena." match ". preg_match($patron,$cadena);

    $patron='/^[[:upper:]]\D{3,}\s{1}[[:upper:]]\D{3,}$/';
    $cadena="Borisov Aleksandrov";
    echo "<br> cadena : ".$cadena." match ". preg_match($patron,$cadena);

    $patron='/^[1-9]{1,2}-[1-9]{1,2}-\d{4}$/';
    $cadena="21-8-1998";
    strtotime($cadena);
    echo "<br> cadena : ".$cadena." match ". preg_match($patron,$cadena);

    $patron='/^\d{8}\D{1}$/';
    $cadena="99998888L";
    echo "<br> cadena : ".$cadena." match ". preg_match($patron,$cadena);

    $patron='/^[A-Za-z0-9]{1,}@[A-Za-z0-9]{1,}\.[A-Za-z0-9]{2,}$/';
    $cadena="georgi@foxhotmail.com";
    echo "<br> cadena : ".$cadena." match ". preg_match($patron,$cadena);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>
        <label for="prueba">prueba</label>
        <input type="text" id="prueba" name="pruebas">hola</input>
        <?
        if(preg_match($patron,$cadena)!=1){
            echo"incorrecto";
        }
        ?>
    </p>
    </form>
    
</body>
</html>
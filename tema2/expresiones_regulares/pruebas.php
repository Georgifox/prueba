
<?php


    $patron='/[[:upper:]]\D{3,}$/';
    $cadena="Georgi";
    echo "<br> cadena : ".$cadena." match ". preg_match($patron,$cadena);
?>
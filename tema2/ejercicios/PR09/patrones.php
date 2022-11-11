<?php


    $patron='/[[:upper:]]\D{3,}$/';
    $cadena="Georgi";
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
<?php
$liga =
array(
    "Zamora" =>  array(
        "Salamanca" => array(
            "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
        ),
        "Avila" => array(
            "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
        ),
        "Valladolid" => array(
            "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 1
        )
    ),
    "Salamanca" =>  array(
        "Zamora" => array(
            "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
        ),
        "Avila" => array(
            "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
        ),
        "Valladolid" => array(
            "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 2, "Penalti" => 1
        )
    ),
    "Avila" =>  array(
        "Zamora" => array(
            "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 2
        ),
        "Salamanca" => array(
            "Resultado" => "1-3", "Roja" => 1, "Amarilla" => 3, "Penalti" => 0
        ),
        "Valladolid" => array(
            "Resultado" => "1-3", "Roja" => 1, "Amarilla" => 0, "Penalti" => 1
        )
    ),
    "Valladolid" =>  array(
        "Zamora" => array(
            "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
        ),
        "Salamanca" => array(
            "Resultado" => "3-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
        ),
        "Avila" => array(
            "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 2
        )
    ),
);
//print_r($liga);

$locales=array();
echo"<table border='1' align='center'>";
echo"<tr>";
            echo"<th>Equipos</th>";
    foreach ($liga as $key => $equipos) {
          echo"<th>".$key."</th>";
          //array_push($locales,$key);
        }
echo"</tr>"; 

            
    foreach ($liga as $locales => $partidos) {
        echo"<tr>";
        echo"<th>".$locales."</th>";
            foreach($partidos as $visitante=>$resultado){
                echo"<td>";
                foreach($resultado as $goles=>$fin){
                    echo"".$goles."";
                    //if($locales)
                }
                echo"</td>";        
            }
        
        echo"</tr>"; 
    }
    

echo"<table>";

echo($key);


/*$resultado =
array(
    "equipos" =>  array(
        "puntos" => array(
            "marcador" => "6", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
        ),
        "goles a favor" => array(
            "marcador" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
        ),
        "goles en contra" => array(
            "marcador "=> "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 1
        )
    )
);*/






?>
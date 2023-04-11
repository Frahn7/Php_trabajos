<?php 

function promediar($aNumeros){
    $suma=0;
    foreach ($aNumeros as $Numero){
        $suma+=$Numero;
    }
        return $suma / count($aNumeros);
}

$aNotas=array(8,4,9,3,7,5);
echo "El promedio es: " . promediar($aNotas). "<br>"; 


?>
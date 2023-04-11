<?php 

function maximo($aVectores){
    $i=0;
    foreach ($aVectores as $vector) {
        if ($i<$vector){
            $i=$vector;
        }
    }
        return $i;     
}

$aNotas=array(1,2,3,4,5,6);
$Sueldo=array(3000,400,500,5,6);
echo "La nota mas alta es:" . maximo($aNotas) . "<br>";
echo "El Sueldo mas alto es:" . maximo($Sueldo) . "<br>";
?>
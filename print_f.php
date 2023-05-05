<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function print_f($variable){

    if(is_array($variable)){
        $archivo=fopen('datos.txt', 'a+');
            foreach ($variable as $item) {
                fwrite($archivo,$item);            
        }
        fclose($archivo);
    }
}

$variable=array('fran','fran1','fran2','fran3');
print_f($variable);
?>
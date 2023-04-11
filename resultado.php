<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aNombre = "";
$aDNI = "";
$aTELEFONO = "";
$aEDAD = "";

if ($_POST) {
    $aNombre = $_POST["txtNOMBRE"];
    $aDNI = $_POST["txtDNI"];
    $aTELEFONO = $_POST["txtTELEFONO"];
    $aEDAD = $_POST["txtEDAD"];
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Resultado</title>
</head>
<body>
    <main>
        <div class="row">
            <div class="col-12 text-center">
                <h1>Resultado </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Telefono</th>
                            <th>Edad</th>
                        </tr>
                    </thead>   
                    <tbody>
                        <tr>
                            <td><?php echo $aNombre;?></td>
                            <td><?php echo $aDNI;?></td>
                            <td><?php echo $aTELEFONO;?></td>
                            <td><?php echo $aEDAD;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
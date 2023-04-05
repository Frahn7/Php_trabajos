<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = [];
$aEmpleados[] = [
  'DNI' => 44567890,
  'Nombre' => 'Raul alberto',
  'Sueldo' => 1,
];
$aEmpleados[] = [
  'DNI' => 44123455,
  'Nombre' => 'Marcos solis',
  'Sueldo' => 2,
];
$aEmpleados[] = [
  'DNI' => 44543334,
  'Nombre' => 'Jose perez',
  'Sueldo' => 3,
];


function calcularNeto($bruto)
{
  return $bruto - $bruto * 0.17;
};
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Empleados</title>
</head>
<body>
    <main class='Container text-center py-5'>
        <div class="row">
            <div class="col-12">
                <h1>Listado de empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Sueldo</th>
                            <th>Sueldo bruto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($aEmpleados as $aEmpleado) { ?>
                        <tr>
                            <td><?php echo $aEmpleado["DNI"]; ?> </td>
                            <td><?php echo strtoupper($aEmpleado["Nombre"]); ?> </td>
                            <td><?php echo calcularNeto($aEmpleado["Sueldo"]); ?> </td>
                            <td><?php print_r($aEmpleado["Sueldo"]) ?> </td>
                        </tr>
                        <?php }; ?>
                    </tbody>
                </table>
            </div>
        </div>
                        <div class="row">
                        <td>La cantidad de Empleados activos es <?php echo count($aEmpleados) ?></td>
                        </div>
    </main>  
</body>
</html>
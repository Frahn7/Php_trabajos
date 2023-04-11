<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function promediar($aNotas)
{
  $sumar = 0;

  foreach ($aNotas as $nota) {
    $sumar += $nota;
  }
  $promedio = $sumar / count($aNotas);

  return $promedio;
}

$Alumnos = [];
$Alumnos[] = ['Nombre' => 'Raul', 'Notas' => [8, 6]];
$Alumnos[] = ['Nombre' => 'Marta', 'Notas' => [8, 5]];
$Alumnos[] = ['Nombre' => 'Jose', 'Notas' => [9, 7]];
$Alumnos[] = ['Nombre' => 'Paula', 'Notas' => [10, 8]];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Actas</title>
</head>
<body>
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Actas</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-hover border">
                <thead>
                    <tr>
                        <th>Alumno</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Promedio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Alumnos as $alumno) { ?>
                    <tr>
                       <td><?php echo $alumno['Nombre']; ?></td>
                       <td><?php echo $alumno['Notas'][0]; ?></td>
                       <td><?php echo $alumno['Notas'][1]; ?></td>
                       <td><?php echo promediar($alumno['Notas']); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php
            $promedios = [];
            foreach ($Alumnos as $alumno) {
              $promedios[] = promediar($alumno['Notas']);
            }
            $promedio_cursada = array_sum($promedios) / count($promedios);
            echo 'El promedio de la cursada es: ' . $promedio_cursada;
            ?>
            
        </div>
    </div>
</body>
</html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPacientes = [];
$aPacientes[] = [
  'DNI' => '33.456.789',
  'Nombre' => 'Raul Alvaro',
  'Edad' => '45',
  'Peso' => '80kg',
];
$aPacientes[] = [
  'DNI' => '25.446.589',
  'Nombre' => 'Marcos antonio',
  'Edad' => '55',
  'Peso' => '90kg',
];
$aPacientes[] = [
  'DNI' => '78.946.999',
  'Nombre' => 'Adolfo norberto',
  'Edad' => '20',
  'Peso' => '60kg',
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2
    /dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" 
    crossorigin="anonymous">
    <title>Clinica php 
    </title>
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Listado de pacientes</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover border">
                        <thead>
                            <th>DNI</th>
                            <th>Nombre y Apellido</th>
                            <th>Edad</th>
                            <th>Peso</th>
                        </thead>
                        <tbody>
                            <?php foreach ($aPacientes as $paciente) { ?>
                            <tr>
                                <td><?php echo $paciente['Edad']; ?></td>
                                <td><?php echo $paciente['Nombre']; ?></td>
                                <td><?php echo $paciente['Edad']; ?></td>
                                <td><?php echo $paciente['Peso']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    
    
</body>
</html>
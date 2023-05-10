<?php

if (file_exists("archivo.txt")) {
  $JsonClientes = file_get_contents("archivo.txt");
  $aClientes = json_decode($JsonClientes, true);
} else {
  $aClientes = [];
}

if ($_POST) {
  $Documento = trim($_POST["txtdoc"]);
  $Nombre = trim($_POST["txtNombre"]);
  $Telefono = trim($_POST["txtTelefono"]);
  $Correo = trim($_POST["txtCorreo"]);

  $aClientes[] = [
    "Documento" => $Documento,
    "Nombre" => $Nombre,
    "Telefono" => $Telefono,
    "Correo" => $Correo,
  ];

  $JsonClientes = json_encode($aClientes);
  file_put_contents("archivo.txt", $JsonClientes);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Registro de clientes</title>
</head>
<body>

    <main class='container'>
           <div class="col-12 text-center py-5">
                Registro de clientes
            </div>
    <div class="row">
        <div class="col-12 col-sm-5">
            <form action="" method="post">
                <div>
                    <label for="txtdoc" class="form-label">Documento:</label>
                    <input type="text" name="txtdoc" id="txtdoc" class="form-control">
                </div>
                <div>
                   <label for="txtNombre" class="form-label">Nombre:</label> 
                   <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                </div>
                <div>
                    <label for="txtTelefono" class="form-label">Telefono:</label> 
                    <input type="text" name="txtTelefono" id="txtTelefono" class="form-control">
                </div>
                <div>
                    <label for="txtCorreo" class="form-label">Correo:</label>
                    <input type="text" name="txtCorreo" id="txtCorreo" class="form-control">
                </div>
                <div>
                    <label for="" class="form-label">Archivo adjunto:</label> 
                    <input type="file" name="Archivo" id="" accept=".jpg, .png, .jpeg" >
                </div>
                <div class="py-3">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="submit" class="btn btn-danger">Nuevo</button>
                </div>
            </form>
        </div>
        <div class="col-6 col-sm-7">
            <table class="table table-hoover border">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
    <?php if (!is_null($aClientes)): ?>
    <?php foreach ($aClientes as $cliente): ?>
        <tr>
            <td></td>
            <td><?php echo $cliente["Documento"]; ?></td>
            <td><?php echo $cliente["Correo"]; ?></td>
            <td><?php echo $cliente["Nombre"]; ?></td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>         
    </table>
    </div>
    </main>
</body>
</html>
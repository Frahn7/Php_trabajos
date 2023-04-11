<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Formulario datos personales</title>
</head>
<body>

<main class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Formulario Datos personales</h1>
        </div>
    </div>
        <div class="row">
            <div class="col-12">
                <form action="resultado.php" method="post" class="text-center">
                    <div>
                        <label for="txtNOMBRE">Nombre:</label>
                        <input type="text" name="txtNOMBRE" id="txtNOMBRE"class="form-control">                   
                     </div>
                        <div>
                            <label for="txtDNI">DNI:</label> 
                            <input type="number" name="txtDNI" id="txtDNI" class="form-control">
                        </div>
                            <div>
                                <label for="txtTELEFONO">Telefono:</label> 
                                <input type="number" name="txtTELEFONO" id="txtTELEFONO" class="form-control">
                            </div>
                                <div>
                                    <label for="txtEDAD">Edad:</label> 
                                    <input type="number" name="txtEDAD" id="txtEDAD" class="form-control">
                                </div>
                                    <button type="submit" class="btn btn-primary p-2 m-4">Enviar</button>
                    </form>
                </div>
            </div>
</main>
</body>
</html>
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if(isset($_SESSION["ListadoClientes"])){
    $aClientes=$_SESSION["ListadoClientes"];
}
else{
    $aClientes=array();
}

if($_POST){
    if(isset ($_POST["btnEnviar"])){
    $Nombre=$_POST['txtNombre'];
    $Dni=$_POST['txtDNI'];
    $Telefono=$_POST['txtTelefono'];
    $Edad=$_POST['txtEdad'];

    $aClientes[]=array("Nombre"=>$Nombre,
    "Dni"=>$Dni,
    "Edad"=>$Edad,
    "Telefono"=>$Telefono
    );

    $_SESSION['ListadoClientes']=$aClientes;
    }
}

if(isset($_POST['btnEliminar'])){
    session_destroy();
    $aClientes=array();
}

if(isset($_GET['pos'])){
    $pos=$_GET['pos'];
    unset($aClientes[$pos]);
    $_SESSION["ListadoClientes"]=$aClientes;
    header('location: clientes_session.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Clientes session</title>

</head>
<body>
    <main>
        <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Tabla de clientes</h1>
            </div>
        </div>
            <form action="" method="post">
                        <label for="txtNombre">Nombre</label>
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Ingresa tu Nombre">
                        <label for="txtDNI">DNI</label>
                        <input type="text" name="txtDNI" id="txtDNI" placeholder="Ingresa tu DNI">
                        <label for="txtTelefono">Telefono</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" placeholder="Ingresa tu Telefono">
                        <label for="txtEdad">Edad</label>
                        <input type="text" name="txtEdad" id="txtEdad" placeholder="Ingresa tu Edad">
                        <button type="submit" name="btnEnviar"   class="btn btn-primary p-2 m-4">Enviar</button>
                        <button type="submit" name="btnEliminar" class="btn btn-danger p-2 m-4">Eliminar</button>
            </form>
            <div class="container">
        <div class="row">
            <div class="col-6 ms-5 text-end">
                <table class="table table-hover border shadow table-sm">
                    <tr>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Telefono</th>
                        <th>Edad</th>
                        <th>Accion</th>
                    </tr>
                    <tbody>
                        <?php
                        foreach($aClientes as $pos => $cliente):?>
                        <tr>
                            <td>
                                <?php echo $cliente["Nombre"];?>
                            </td>
                            <td>
                                <?php echo $cliente["Dni"];?>
                            </td>
                            <td>
                                <?php echo $cliente["Telefono"];?>
                            </td>
                            <td>
                                <?php echo $cliente["Edad"];?>
                            </td>
                            <td><a href="clientes_session.php?pos=<?php echo $pos; ?> "><button type="submit" name="btnEliminar1"><i class="bi bi-trash3"></i></button></a></td>
                        </tr>
                        <?php endforeach; ?>     
                    </tbody>
                </table>
            </div>
            </div>
            </div>
        </div>
    </main>
</body>
</html>
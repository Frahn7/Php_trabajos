<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$aProductos = array();
$aProductos[] = array("Nombre"=>"Smart TV 55\" 4K HD",
"Marca"=>"Hitachi",
"Modelo"=>"HGP23",
"Stock"=>60,
"Precio"=>50000,
);
$aProductos[]=array("Nombre"=>"Samsung galaxi J7 negro",
"Marca"=>"Samsung",
"Modelo"=>"J7",
"Stock"=>0,
"Precio"=>30000,
);
$aProductos[]=array("Nombre"=>"Aire Acondicionado Split",
"Marca"=>"Surrey",
"Modelo"=>"3445LP",
"Stock"=>5,
"Precio"=>40000,);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Listado de productos</title>
</head>
<body>

<main class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="py-5 text-center">
                Listado de productos
            </h1>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border"> 
                    <thead>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Accion</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $aProductos[0]["Nombre"];?></td>
                        <td><?php echo $aProductos[0]["Marca"];?></td>
                        <td><?php echo $aProductos[0]["Modelo"];?></td>
                        <td><?php echo $aProductos[0]["Stock"] > 10 ? "Hay stock" 
                        : ($aProductos[0]["Stock"]>0 && $aProductos[0]["Stock"]<=10 ? "Poco Stock" : "No hay Stock" );?></td>
                        <td><?php echo $aProductos[0]["Precio"];?></td>
                        <td><button class="btn btn-primary">Comprar</button></td>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos[1]["Nombre"];?></td>
                        <td><?php echo $aProductos[1]["Marca"];?></td>
                        <td><?php echo $aProductos[1]["Modelo"];?></td>
                        <td><?php echo $aProductos[1]["Stock"] > 10 ? "Hay stock" 
                        :($aProductos[1]["Stock"]>0 && $aProductos[1]["Stock"]<=10 ? "Poco Stock" : "No hay Stock" );?></td>
                        <td><?php echo $aProductos[1]["Precio"];?></td>
                        <td><button class="btn btn-primary">Comprar</button></td>
                    </tr>
                    <tr>
                        <td><?php echo $aProductos[2]["Nombre"];?></td>
                        <td><?php echo $aProductos[2]["Marca"];?></td>
                        <td><?php echo $aProductos[2]["Modelo"];?></td>
                        <td><?php echo $aProductos[2]["Stock"] > 10 ? "Hay stock" 
                        : ($aProductos[2]["Stock"]>0 && $aProductos[2]["Stock"]<=10 ? "Poco Stock" : "No hay Stock" );?></td>
                        <td><?php echo $aProductos[2]["Precio"];?></td>
                        <td><button class="btn btn-primary">Comprar</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

</body>
</html>
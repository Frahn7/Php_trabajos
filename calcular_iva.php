<?php
$IVA='21%';
$PrecioConIva='0%';
$PrecioSinIva='0';
$IvaCantidad="0";

if ($_POST) {
$IVA=$_POST['txt%'];
$PrecioConIva=($_POST['txtConIva']) > 0? $_POST["txtConIva"]: 0;
$PrecioSinIva=($_POST['txtSinIva']) > 0? $_POST["txtSinIva"]: 0;

if($PrecioSinIva>0){
$PrecioConIva=$PrecioSinIva*($IVA/100+1);}

if($PrecioConIva>0){
$PrecioSinIva=$PrecioConIva/($IVA/100+1);}

$IvaCantidad= $PrecioConIva - $PrecioSinIva;

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Calcular iva</title>
</head>
<body>
<main class="container">
    <div class="row">
        <div class="col-12 text center py-5">
            <h1 class="text-center">Calcular IVA</h1>
    </div>
        </div>
        <div class="row">
            <div class="col-2 offset-4,4 ">
        <form action="" method="post">
                <div>
                    <label for="txt%">%IVA</label>
                    <select name="txt%" id="txt%">
                    <option value="10.5">10.5%</option>
                    <option value="19">19%</option>
                    <option value="21" selected >21%</option>
                    <option value="27">27%</option>
                    </select>
                </div>
                <div>
                    <label for="txtConIva">Precio con IVA:  </label>
                    <input type="select" name="txtConIva" id="txtConIva">

                    <label for="txtSinIva">Precio sin IVA:  </label>
                    <input type="select" name="txtSinIva" id="txtSinIva">

                    <button type="submit" class="btn btn-primary p-2 m-4">Calcular</button>
                </div>
        </form>
        </div>
        </div>
        <div >
            <table class="col-5 table table-hover border offset--1">
                <tr>
                    <th>IVA: <?php echo $IVA; ?> % </th>
                    <th>PRECIO CON IVA: <?php echo number_format($PrecioConIva,2,",","." ) ?> </th>
                </tr>
                <tr>
                    <th>PRECIO SIN IVA: <?php echo number_format($PrecioSinIva,2,",","." ) ?></th>
                    <th>IVA CANTIDAD: <?php echo number_format($IvaCantidad,2,",","." )   ?></th>
                </tr>
            </table>
        </div>   
    </main>            
    </div>
    </div>

</body>
</html>



    
        
    
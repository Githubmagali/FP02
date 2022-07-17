<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if($_POST){
    $Nombre= $_POST["txtNombre"];
    $DNI= $_POST["txtDNI"];
    $Telefono= $_POST["txtTelefono"];
    $Edad= $_POST["txtEdad"];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Resultado</h1>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <table class="table table-hover border" >
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
                        <td> <?php echo $Nombre; ?></td>
                        <td> <?php echo $DNI; ?></td>
                        <td> <?php echo $Telefono; ?></td>
                        <td> <?php echo $Edad; ?></td>
                    </tr>
                </tbody>
            </table>
                
            </div>
        </div>
       
    </main>
    
</body>
</html>
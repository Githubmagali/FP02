<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if ($_POST){
    $nombre=$_POST["txtNombre"];
    $apellido=$_POST["txtApellido"];
    $dni=$_POST["txtDni"];
} ?>
<!DOCTYPE html>
<html lang="en">
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
           <div class="col-12">
           <h1 class="text-center py-5">Prueba de formulario</h1>
           </div>
        </div>
        <div>
            <div>
                <form  method="post" action="">
                    <div class="row">
                    <div class="col-4">
                        <label for="">Nombre:</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="col-4">
                        <label for="">Apellido:</label>
                        <input type="text" name="txtApellido" id="txtApellido" class="form-control" placeholder="Apellido" required>
                    </div>
                    <div class="col-4">
                    <label for="">DNI:</label>
                    <input type="text"name="txtDni" id="txtDni" class="form-control" placeholder="DNI">
                    </div>
</div>
                    <button type="submit"id="btnEnviar" name="btnEnviar"class="btn"></button>

                    <?php if (isset($mensaje)){?>
                        <div class="row">
                            <div class="col-12">
                                <?php echo $mensaje; ?>
                            </div>
                        </div>
                        <?php }?>
                </form>
            </div>
        </div>
      

    </main>
    
</body>
</html>
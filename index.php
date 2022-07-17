
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario datos personales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>
<body>
<main class="container ">
    <h1 class="py-5 text-center">Formulario datos personales</h1>
    <div class="row">
        <div class="offset-md-3 col-sm-6 col-12"> 
            <form method="POST"  action="resultado.php">
                <div>
                    <label for="">Nombre:</label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control" placeholder="Nombre" required><!--txt; anotacion ungara-->
                </div>
                <div>
                    <label for="">DNI:</label>
                    <input type="text" name="txtDNI" id="txtDNI" class="form-control" placeholder="DNI"required><!--txt; anotacion ungara-->
                </div>
                <div>
                    <label for="">Telefono:</label>
                    <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" placeholder="Telefono"required><!--txt; anotacion ungara-->
                </div>
                <div>
                    <label for="">Edad:</label>
                    <input type="text" name="txtEdad" id="txtEdad" class="form-control" placeholder="Edad"required><!--txt; anotacion ungara-->
                </div>
                   <button type="submit "id="btnEnviar" name="btnEnviar" class="btn"> Enviar</button>
                <?php if(isset($mensaje)){ ?>
                <div class="row">
                 <div class="col-12">
                <?php echo $mensaje; ?>
               </div>
              </div>
                              <?php } ?>
            </form>
        </div>
    </div>
</main>
    
</body>
</html>





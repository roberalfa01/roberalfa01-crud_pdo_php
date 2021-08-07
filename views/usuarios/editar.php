<?php
    require_once('../../config/Autoload.php');
    $datos_usuarios = new Crud;
    $data = $datos_usuarios->mostrar_campos($_GET['id']); 
    foreach ($data as $row){};    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registros</title>
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <a href="../../index.php" class="ms-5">Volver Atras</a>
        <h3 class="text-center py-2">Editar Registro</h3>
        <div class="row justify-content-center">
            <div class="col-lg-5 bg-light p-5">
                <form name="form_editar" action="../../app/controllers/EditarUsuarios.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Usuario</label>
                        <input type="text" name="usuario" class="form-control" maxlength="12" value="<?=$row->usuario?>"  required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" maxlength="20" value="<?=$row->nombre?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono</label>
                        <input type="text" name="telefono" class="form-control" maxlength="12" value="<?=$row->telefono?>" required>
                    </div>
                    <input type="hidden" name="id" value="<?=$row->id?>">
                    <button type="submit" class="btn btn-primary">Grabar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
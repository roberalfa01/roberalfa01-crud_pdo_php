<?php
    require_once('config/Autoload.php');
    $datos_usuarios = new Crud;
    $data = $datos_usuarios->listado();  
?>
<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crud PDO POO</title>
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
    </head>
    <body>
        <h3 class="text-center my-3">Crud PDO Básico</h3>
        <a href="views/usuarios/adicionar.php" class="ms-5">Adicionar</a>
        <?php
            if(isset($_GET['mensaje']))
            {
        ?>
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <div class="col-5 col-lg-6 alert-info py-3">
                            <?=$_GET['mensaje']?>
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>
        <div class="container text-center">
            <table class="table">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($data as $row)
                        {
                    ?>
                            <tr>
                                <td><?= $row->id     ?></td>
                                <td><?= $row->usuario ?></td>
                                <td><?= $row->nombre  ?></td>
                                <td><?= $row->telefono?></td>
                                <td><a href="views/usuarios/editar.php?id=<?=$row->id?>" class="me-4">Editar</a><a href="app/controllers/EliminarUsuarios.php?id=<?=$row->id?>">Eliminar</a></td>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
<?php

    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    require_once('../../config/Autoload.php');
    $datos_usuarios = new Crud;
    $data = $datos_usuarios->editar();
?>
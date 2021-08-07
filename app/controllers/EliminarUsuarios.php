<?php

    $id = $_GET['id'];
    require_once('../../config/Autoload.php');
    $datos_usuarios = new Crud;
    $data = $datos_usuarios->eliminar($id);
?>
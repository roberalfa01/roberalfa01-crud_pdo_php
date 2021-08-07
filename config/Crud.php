<?php

class Crud
{
    private $conect_user;
    public function __construct()
    {
        $this->conexion_user = new Conexion;
    }

    public function listado()
    {   
        $conect_user = $this->conexion_user->conect();
        $sql = $conect_user->prepare("SELECT * FROM usuarios order by fecha desc");
        $sql->execute();
        $data = $sql->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function adicionar()
    {
        $mensaje = "";
        $conect_user = $this->conexion_user->conect();
        $sql = $conect_user->prepare("INSERT INTO usuarios (usuario, nombre, telefono) VALUES (:usuario, :nombre, :telefono)");
        $sql->execute([
            'usuario'  => $_POST['usuario'],
            'nombre'   => $_POST['nombre'],
            'telefono' => $_POST['telefono'],
        ]);

        if($sql)
        {
            $mensaje = 'Usuario:'. $_POST['usuario'].' Fue agregado';
        }

        header("Location: ../../index.php?mensaje=$mensaje");
    }

    public function eliminar($id)
    {
        $mensaje = "";
        $conect_user = $this->conexion_user->conect();
        $sql = $conect_user->prepare("DELETE FROM usuarios where id=:id");
        if($sql->execute(array(':id' => $id)))
        {
            $mensaje = 'Registro:'.$id.' Fue Eliminado';
        }
        header("Location: ../../index.php?mensaje=$mensaje");
    }

    public function mostrar_campos($id)
    {
        $conect_user = $this->conexion_user->conect();
        $sql = $conect_user->prepare("SELECT * FROM usuarios where id='$id'");
        $sql->execute();
        $data = $sql->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function editar()
    {
        $mensaje = "";
        $conect_user = $this->conexion_user->conect();
        $sql = $conect_user->prepare("UPDATE usuarios SET usuario=:usuario, nombre=:nombre, telefono=:telefono where id=:id");

        $sql->execute([
            'id'       => $_POST['id'],
            'usuario'  => $_POST['usuario'],
            'nombre'   => $_POST['nombre'],
            'telefono' => $_POST['telefono'],
        ]);

        if($sql)
        {
            $mensaje = 'Usuario:'.$_POST['usuario'].' Fue modificado';
        }
        header("Location: ../../index.php?mensaje=$mensaje");


    }

}





?>
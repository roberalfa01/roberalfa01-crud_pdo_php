<?php
    class usuariosModel
    {
        private $datos;
        public function Listar()
        {
            $datos = new Conexion;
            $datos->conect();
            $datos->pdo->prepare("SELECT * FROM usuarios");
            //$datos->execute();
            $datos = $datos->prepare("INSERT INTO folks ( first_name ) values ( 'Cathy' )");
            $datos->execute();


        }

    }

?>
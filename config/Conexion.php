<?php

    class Conexion
    {
        private $dns  = "mysql:host=localhost:3306;dbname=pdo_crud;charset=utf8mb4";
        private $user = "root";
        private $password = "";
        public function conect()
        {
            try{
                $conect= new PDO($this->dns, $this->user, $this->password); 
                $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch (Exception $exc) {
                $conect = "Error de Conexión";
                echo "ERROR: ".$exc->getMessage();
            }

            return $conect; 
            
        }
    }
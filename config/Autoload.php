<?php

    spl_autoload_register(function($class)
    {
        if(file_exists($_SERVER['DOCUMENT_ROOT'].'/Crud-pdo-poo-basico/config/'.$class.".php")){
            require_once($_SERVER['DOCUMENT_ROOT'].'/Crud-pdo-poo-basico/config/'.$class.".php");
        }
    });
    
?>
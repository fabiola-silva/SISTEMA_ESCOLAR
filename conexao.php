<?php

    function conectar(){

        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $db = "sistema_escolar";

        $con = new mysqli($servidor, $usuario, $senha, $db);
        return $con;

    } 
        $conexao = conectar();



?>
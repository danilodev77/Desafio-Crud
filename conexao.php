<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "151291414";
    $db = "loja";


    $conn = new mysqli($servidor, $usuario, $senha, $db);

    if ($conn){
        echo "Conexão bem sucedida";
    } else {
        echo "Erro ao conectar ao banco de dados";
    }



?>
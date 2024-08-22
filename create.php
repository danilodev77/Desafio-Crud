<?php

    include "conexao.php";

    $nome = $_GET['nome'];
    $valor = $_GET['valor'];


    $insert = "INSERT INTO produtos (id, nome, valor) VALUES (NULL, '$nome', '$valor')";

    $resultado = $conn->query($insert);

    if($resultado == TRUE){
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar produto!";
    }




?>
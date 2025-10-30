<?php

    require_once "config.inc.php";

    $sql = "INSERT INTO  produtos (nome_produto, numero_serie, preco, quantidade_estoque)VALUES (
            '$_POST[nome_produto]','$_POST[numero_serie]','$_POST[preco]','$_POST[quantidade_estoque]')";

    $execute = mysqli_query($conexao, $sql);

    if ($execute) {
        echo "<br><h2>Produto cadastrado com sucesso!</h2><br>";
        echo "<a href='?pg=admin_produtos'>Voltar</a>"; 
    }else{
        echo "<h2>Houve um erro ao cadastrar o produto!</h2><br>";
    }
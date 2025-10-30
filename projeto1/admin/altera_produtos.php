<?php

    require_once "config.inc.php";

    $id = $_POST['id'];
    $nome = $_POST['nome_produto'];
    $numero_serie = $_POST['numero_serie'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade_estoque'];

    $sql = "UPDATE produtos SET
            nome_produto = '$nome',
            numero_serie = '$numero_serie',
            preco = '$preco',
            quantidade_estoque = '$quantidade'
            WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "Produto Alterado com sucesso!";
        echo "<a href='?pg=admin_produtos'>Voltar</a>";
    }else{
        echo "Houve um erro na alteração.";
        echo "<a href='?pg=admin_produtos'>Voltar</a>";
    }
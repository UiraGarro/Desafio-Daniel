<p>
    <a href="?pg=form_produtos">Cadastrar novo Produto</a>
</p>

<h2>Lista de Produtos</h2>
<?php

    require_once "config.inc.php";

    $sql = "SELECT * FROM produtos ";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while($dados = mysqli_fetch_array($resultado)) {

            echo "<br>=========================================================================================<br>";
            echo "Id do produto: $dados[id] | ";
            echo "Nome do Produto: $dados[nome_produto] | ";
            echo "Numero de Série: $dados[numero_serie] | ";
            echo "Preço: $dados[preco] ";
            echo "Quantidade em Estoque: $dados[quantidade_estoque]";
            echo " | <a href='?pg=form_produtos_alterar&id=$dados[id]'>Alterar</a>";
            echo " | <a href='?pg=delete_produto&id=$dados[id]'>Excluir</a>";
            echo "<br>=========================================================================================<br>";
        }
    }else{
        echo "<br><h2>Nenhum produto encontrado!</h2><br>";
    }
?>


<?php
    require_once "config.inc.php";
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    while ($produtos = mysqli_fetch_array($resultado)){
        $id = $produtos['id'];
        $nome = $produtos['nome_produto'];
        $numero_serie = $produtos['numero_serie'];
        $preco = $produtos['preco'];
        $quantidade = $produtos['quantidade_estoque'];
    }
?>

<form action="?pg=altera_produtos" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome do Produto:</label>
    <input type="text" name="nome_produto" value="<?=$nome?>" required>
    <label>Número de Série:</label>
    <input type="text" name="numero_serie" value="<?=$numero_serie?>" required>
    <label>Preço:</label>
    <input type="text" name="preco" value="<?=$preco?>" required>
    <label>Quantidade em Estoque:</label>
    <input type="number" name="quantidade_estoque" value="<?=$quantidade?>" required>
    <button type="submit">Alterar Produto</button>
</form>
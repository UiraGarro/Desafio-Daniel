<?php

    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);

?>
<div class="container mt-3">
    <h2>Produtos disponíveis</h2>
    <p>Detalhes dos nossos produtos e seus preços</p>
    <a href="admin/index.php?pg=form_produtos" class="btn btn-primary mb-3">Adicionar Novo Produto</a> 
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade em Estoque</th>
        </tr>
        </thead>
        <tbody>
        <?php
            while($produto = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?=$produto['nome_produto']?></td>
            <td><?=$produto['numero_serie']?></td>
            <td>R$ <?=number_format($produto['preco'], 2, ',', '.')?></td>
            <td><?=$produto['quantidade_estoque']?></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>
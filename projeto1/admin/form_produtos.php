<form action="?pg=cadastra_produtos" method="POST">
    <label>Nome do Produto:</label>
    <input type="text" name="nome_produto" required>
    <label>Número de Série:</label>
    <input type="text" name="numero_serie" required>
    <label>Preço:</label>
    <input type="text" name="preco" required>
    <label>Quantidade em Estoque:</label>
    <input type="number" name="quantidade_estoque" required>
    <button type="submit">Cadastrar Produto</button>
</form>
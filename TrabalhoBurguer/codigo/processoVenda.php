<?php
require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";

if (isset($_POST['comprar'])) {
    $produtosSelecionados = $_POST['comprar'];
    $todosIds = $_POST['idproduto'];
    $quantidade = $_POST['quantidade'];
    
    salvarItem($conexao, $idproduto, $idpedido, $quantidade); 

    echo "<h2>Venda registrada com sucesso!</h2>";
} else {
    echo "Requisição inválida.";
}
?>
<?php
require_once "conexao.php";
require_once "funcoes.php";

if (isset($_POST['montar'])) {
    $produtosSelecionados = $_POST['montar'];
    $todosIds = $_POST['idproduto'];
    $quantidades = $_POST['quantidade'];

    salvarMontagemCombo($conexao, $idproduto, $idcombo); 

    echo "<h2>Venda registrada com sucesso!</h2>";
} else {
    echo "Requisição inválida.";
}
?>
<?php

require_once "verificarLogado.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pedidos</title>
    <link href="../css/styleAdministrador.css" rel="stylesheet">
</head>
<body class="order-list-body">
    <h1 class="order-list-title">Lista de Pedidos</h1>
    <?php
    require_once "../conexao.php";
    require_once "../funcoes/funcoes_hamburgueria.php";

    $pedidos = listarPedido($conexao);

    if (count($pedidos) == 0) {
        echo "<div class='order-list-empty'>Não existem pedidos cadastrados</div>";
    } else {
    ?>
    <table class="order-list-table">
        <tr>
            <th class="order-list-header">Id</th>
            <th class="order-list-header">Endereço</th>
            <th class="order-list-header">Valor</th>
            <th class="order-list-header">Id do Usuário</th>
            <th class="order-list-header">Ação</th>
        </tr>
    <?php
    foreach ($pedidos as $pedido) {
        $idpedido = $pedido['idpedido'];
        $endereco = $pedido['endereco'];
        $valor_total = $pedido['valor_total'];
        $idusuario = $pedido['idusuario'];

        echo "<tr class='order-list-row'>";
        echo "<td class='order-list-cell'>$idpedido</td>";
        echo "<td class='order-list-cell'>$endereco</td>";
        echo "<td class='order-list-cell order-value'>R$ " . number_format($valor_total, 2, ',', '.') . "</td>";
        echo "<td class='order-list-cell'>$idusuario</td>";
        echo "<td class='order-list-cell'><a href='removerPedido.php?id=$idpedido' class='order-list-action' onclick='return confirm(\"Tem certeza que deseja cancelar este pedido?\")'>Cancelar</a></td>";
        echo "</tr>";
    }
    }
    ?>
    </table>
    <a href="../telaAdministrador.php" class="order-list-back">Voltar</a>
</body>
</html>
<?php

require_once "verificarLogado.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link href="../css/styleAdministrador.css" rel="stylesheet">
</head>
<body class="user-list-body">
    <h1 class="user-list-title">Lista de Usuarios</h1>
    <?php
    require_once "../conexao.php";
    require_once "../funcoes/funcoes_hamburgueria.php";

    $lista_usuario = listarUsuario($conexao);

    if (count($lista_usuario) == 0) {
        echo "<div class='user-list-empty'>Não existem clientes cadastrados</div>";
    } else {
    ?>
    <table class="user-list-table">
        <tr>
            <th class="user-list-header">Id</th>
            <th class="user-list-header">Nome</th>
            <th class="user-list-header">Telefone</th>
            <th class="user-list-header">Email</th>
            <th class="user-list-header">Tipo</th>
            <th class="user-list-header">Ação</th>
        </tr>
    <?php
    foreach ($lista_usuario as $usuario) {
        $idusuario = $usuario['idusuario'];
        $nome = $usuario['nome'];
        $telefone = $usuario['telefone'];
        $email = $usuario['email'];
        $tipo = $usuario['tipo'];

        echo "<tr class='user-list-row'>";
        echo "<td class='user-list-cell'>$idusuario</td>";
        echo "<td class='user-list-cell'>$nome</td>";
        echo "<td class='user-list-cell'>$telefone</td>";
        echo "<td class='user-list-cell'>$email</td>";
        echo "<td class='user-list-cell'>$tipo</td>";
        echo "<td class='user-list-cell'><a href='removerUsuario.php?id=$idusuario' class='user-list-action'>Remover</a></td>";
        echo "</tr>";
    }
    }
    ?>
    </table>
    <a href="../telaAdministrador.php" class="user-list-back">Voltar</a>
</body>
</html>
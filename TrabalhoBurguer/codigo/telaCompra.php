<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
</head>
<body>
    <?php
    require_once "../conexao.php";
    require_once "../funcoes/funcoes_hamburgueria.php";

    echo "<form method='POST' action='processoVenda.php'>";

    $sql = "SELECT * FROM produto ORDER BY nome ASC";
    $resultados = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultados) > 0) {
        echo '<table>
                <thead>
                    <tr>
                        <th>Escolher</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>';

        while ($linha = mysqli_fetch_assoc($resultados)) {
            $id = $linha['idproduto'];
            $nome = $linha['nome'];

            echo "<tr>
                    <td>
                        <input type='checkbox' name='idproduto[]' value='$id'>
                    </td>
                    <td>$nome</td>
                    <td><input type='number' name='quantidade[]' min='1' value='1'></td>
                  </tr>";
        }

        echo '</tbody></table>';
        echo '<input type="submit" value="comprar" class="botao">';
        echo '</form>';
    } else {
        echo '<p>Nenhum produto encontrado.</p>';
    }
    ?>

</body>
</html>
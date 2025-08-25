<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
          body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      padding: 30px;
    }

    h2 {
      color: #333;
      text-align: center;
    }

    table {
      width: 80%;
      margin: 20px auto;
      border-collapse: collapse;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      border-radius: 8px;
      overflow: hidden;
    }

    thead {
      background-color: #4CAF50;
      color: white;
    }

    th, td {
      padding: 12px 15px;
      text-align: center;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #e0f7fa;
    }

    th {
      font-size: 16px;
    }

    td {
      font-size: 14px;
    }

    .botao {
  background-color: #3498db; /* Cor de fundo */
  color: white; /* Cor do texto */
  font-size: 16px; /* Tamanho da fonte */
  font-weight: bold; /* Negrito */
  padding: 12px 24px; /* Espaçamento interno */
  border: none; /* Sem borda */
  border-radius: 30px; /* Bordas arredondadas */
  cursor: pointer; /* Muda o cursor para indicar interatividade */
  transition: all 0.3s ease; /* Transição suave para os efeitos */
}
    </style>
    <?php
    require_once "../conexao.php";
    require_once "../funcoes/funcoes_hamburgueria.php";

    echo "<form method='POST' action='processoMontagem.php'>";

    $sql = "SELECT * FROM produto ORDER BY nome ASC";
    $resultados = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultados) > 0) {
        echo '<table>
                <thead>
                    <tr>
                        <th>Montar</th>
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
                        <input type='checkbox' name='montar[]' value='$id'>
                        <input type='hidden' name='idproduto[]' value='$id'>
                    </td>
                    <td>$nome</td>
                    <td><input type='number' name='quantidade[]' min='1' value='1'></td>
                  </tr>";
        }

        echo '</tbody></table>';
        echo '<input type="submit" value="Montar" class="botao">';
        echo '</form>';
    } else {
        echo '<p>Nenhum produto encontrado.</p>';
    }
       ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    require_once "../conexao.php";

    $sql = "SELECT * FROM produto WHERE tipo = 'H'";
    $comando = mysqli_prepare($conexao, $sql);

    // Executar a consulta
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);

    // Inicializar um array para armazenar os produtos
    $lista_produto = [];
    while ($produto = mysqli_fetch_assoc($resultados)) {
        $lista_produto[] = $produto;
    }

    // Fechar o comando após a execução
    mysqli_stmt_close($comando);

    // Verificar se há produtos
    if (count($lista_produto) > 0) {
        // Exibir os produtos em uma lista
        echo "<ul>";
        foreach ($lista_produto as $produto) {
            echo "<li>";
            echo "Nome: " . htmlspecialchars($produto['nome']) . "<br>";
            echo "Preço: " . htmlspecialchars($produto['preco']) . "<br>";
            echo "Descrição: " . htmlspecialchars($produto['descricao']) . "<br>";  // Adapte conforme a estrutura do banco
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhuma bebida encontrada.</p>";
    }
    ?>
</body>
</html>
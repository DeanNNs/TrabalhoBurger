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

    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);

    $lista_produto = [];
    while ($produto = mysqli_fetch_assoc($resultados)) {
        $lista_produto[] = $produto;
    }

    mysqli_stmt_close($comando);

    if (count($lista_produto) > 0) {
        echo "<ul>";
        foreach ($lista_produto as $produto) {
            echo "<li>";
            echo "Nome: " . htmlspecialchars($produto['nome']) . "<br>";
            echo "Preço: " . htmlspecialchars($produto['preco']) . "<br>";
            echo "Descrição: " . htmlspecialchars($produto['descricao']) . "<br>"; 
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhum Hamburguer encontrada.</p>";
    }
?>

    <button><a style="text-decoration: none" href="telaCompra.php">Voltar</a></button>
</body>
</html>
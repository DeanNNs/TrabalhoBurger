<?php
session_start();

require_once "../conexao.php";
require_once "../funcoes/funcoes_hamburgueria.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../jquery-3.7.1.min.js"></script>
</head>

<body>
    <?php
    echo "<pre>";
    $_SESSION['carrinho'];
    echo "</pre>";
    if (empty($_SESSION['carrinho'])) {
        echo "Escolha Algum Produto";
    } else {
        $total = 0;
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>Tipo</td>";
        echo "<td>Nome</td>";
        echo "<td>Preço</td>";
        echo "<td>Quantidade</td>";
        echo "<td>Total unitário</td>";
        echo "<td>Remover</td>";
        echo "</tr>";
        foreach ($_SESSION['carrinho'] as $id => $quantidade) {
            $produto = pesquisarProdutoId($conexao, $id);

            echo "<tr>";
            echo "<td>" . $produto['tipo'] . "</td>";
            echo "<td>" . $produto['nome'] . "</td>";
            echo "<td> R$ <span class='preco'>" . $produto['preco'] . "</span></td>";

            echo "<td><input type='number' name='quantidade[$id]' class='quantidade' value='$quantidade' data-id='$id' min='1' size='2'</td>";

            $total_unitario = $produto['preco'] * $quantidade;
            $total += $total_unitario;

            echo "<td> R$ <span class='total_unitario'>$total_unitario</span></td>";
            echo "<td><a href='removerCarrinho.php?id=$id'>[remover]</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<h3>Total da compra: R$ <span id='total'>$total</span></h3>";
    }
    ?>

    <p>
        <a href="../index.php">Adicionar produtos</a> <br>
    </p>
    <script>
        function atualizar_total() {
            let total = 0;

            $('span.total_unitario').each(function() {
                const valor = parseFloat($(this).text());
                total += valor;
            });

            $('#total').text(total);
        }

        function somar() {
            const linha = $(this).closest('tr');
            const preco_unitario = linha.find('span.preco').text();
            const quantidade = $(this).val();
            const id = $(this).data('id');

            console.log("id é:", id);

            const total = parseFloat(preco_unitario) * parseInt(quantidade);

            const total_unitario = linha.find('span.total_unitario');
            total_unitario.text(total);
            
            atualizar_total();

            console.log("atualizando...");

            const dados_enviados = new URLSearchParams();
            dados_enviados.append('id', id);
            dados_enviados.append('quantidade', quantidade);

            console.log("dados:", dados_enviados);

            fetch('atualizaCarrinho.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: dados_enviados.toString()
                })
                .then(response => response.text())
                .catch(error => console.log('Houve erro:', error));
        }
        $("input[type='number']").change(somar);
    </script>
</body>

</html>
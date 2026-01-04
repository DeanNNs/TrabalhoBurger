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
    <title>Carrinho - ALLAPOLO'S BURGER</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Honk:MORF,SHLN@37,31.2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../jquery-3.7.1.min.js"></script>
</head>

<body>
    <header class="cabecalho-carrinho">
        <h1 class="titulo-carrinho">ALLAPOLO'S BURGER</h1>
        <p class="subtitulo-carrinho">Seu carrinho de compras</p>
    </header>

    <div class="container-carrinho">
        <?php
        if (empty($_SESSION['carrinho'])) {
            echo "<div class='mensagem-vazio'>";
            echo "<p class='texto-vazio'>Escolha Algum Produto</p>";
            echo "<a href='../index.php' class='botao-voltar'>Adicionar produtos</a>";
            echo "</div>";
        } else {
            $total = 0;
            echo "<table class='tabela-carrinho'>";
            echo "<thead class='cabecalho-tabela'>";
            echo "<tr class='linha-cabecalho'>";
            echo "<th class='celula-cabecalho'>Tipo</th>";
            echo "<th class='celula-cabecalho'>Nome</th>";
            echo "<th class='celula-cabecalho'>Preço</th>";
            echo "<th class='celula-cabecalho'>Quantidade</th>";
            echo "<th class='celula-cabecalho'>Total unitário</th>";
            echo "<th class='celula-cabecalho'>Remover</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach ($_SESSION['carrinho'] as $idproduto => $quantidade) {
                $produto = pesquisarProdutoId($conexao, $idproduto);

                echo "<tr class='linha-produto'>";
                echo "<td class='celula-produto celula-tipo'>" . $produto['tipo'] . "</td>";
                echo "<td class='celula-produto celula-nome'>" . $produto['nome'] . "</td>";
                echo "<td class='celula-produto celula-preco'>R$ <span class='preco'>" . $produto['preco'] . "</span></td>";

                echo "<td class='celula-produto'><input type='number' name='quantidade[$idproduto]' class='input-quantidade quantidade' value='$quantidade' data-id='$idproduto' min='1' size='2'></td>";

                $total_unitario = $produto['preco'] * $quantidade;
                $total += $total_unitario;

                echo "<td class='celula-produto celula-preco'>R$ <span class='total_unitario'>$total_unitario</span></td>";
                echo "<td class='celula-produto'><a href='removerCarrinho.php?id=$idproduto' class='link-remover'>Remover</a></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            
            echo "<div class='container-total'>";
            echo "<p class='texto-total'>Total da compra: <span class='valor-total' id='total'>R$ $total</span></p>";
            echo "</div>";
            
            echo "<a href='../index.php' class='botao-voltar'>Adicionar mais produtos</a>";
            
            if (isset($_SESSION['logado']) && $_SESSION['logado'] == 1) {
                echo "<div class='formulario-finalizacao'>";
                echo "<h3 class='titulo-finalizacao'>Finalizar Pedido</h3>";
                echo "<form action='salvarPedido.php?total=$total' method='POST'>";
                echo "<div class='grupo-finalizacao'>";
                echo "<label class='rotulo-finalizacao'>Data:</label>";
                echo "<input type='date' name='data' class='entrada-finalizacao' required>";
                echo "</div>";
                echo "<div class='grupo-finalizacao'>";
                echo "<label class='rotulo-finalizacao'>Endereço:</label>";
                echo "<input type='text' name='endereco' class='entrada-finalizacao' placeholder='Digite seu endereço completo' required>";
                echo "</div>";
                echo "<button type='submit' class='botao-finalizar'>Finalizar Compra</button>";
                echo "</form>";
                echo "</div>";
            } else {
                echo "<div class='link-login'>";
                echo '<a href="telaLogin.php">Faça login para finalizar sua compra</a>';
                echo "</div>";
            }
        }
        ?>
    </div>

    <footer class="rodape-carrinho">
        <p class="texto-rodape">ALLAPOLO'S BURGER &copy; 2025 - Todos os direitos reservados</p>
    </footer>

    <script>
        function atualizar_total() {
            let total = 0;

            $('span.total_unitario').each(function() {
                const valor = parseFloat($(this).text());
                total += valor;
            });

            $('#total').text('R$ ' + total.toFixed(2));
        }

        function somar() {
            const linha = $(this).closest('tr');
            const preco_unitario = linha.find('span.preco').text();
            const quantidade = $(this).val();
            const id = $(this).data('id');

            console.log("id é:", id);

            const total = parseFloat(preco_unitario) * parseInt(quantidade);

            const total_unitario = linha.find('span.total_unitario');
            total_unitario.text(total.toFixed(2));
            
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
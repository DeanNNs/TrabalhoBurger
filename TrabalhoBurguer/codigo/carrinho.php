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
    <script src="../jquery-3.7.1.min.js"></script>
    <style>
        /* Reset e configurações globais */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #fef9e7;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Faixa amarela do topo */
        .cabecalho-carrinho {
            background: linear-gradient(135deg, #ffcc00, #ffaa00);
            color: #8B4513;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .cabecalho-carrinho::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #ff7700, #ffcc00, #ff7700);
        }

        .titulo-carrinho {
            font-family: "Honk", system-ui;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-variation-settings:
            "MORF" 37,
            "SHLN" 31.2;
        }

        .subtitulo-carrinho {
            font-size: 1.2rem;
            font-weight: 500;
            opacity: 0.9;
        }

        /* Container principal */
        .container-carrinho {
            flex: 1;
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
        }

        /* Mensagem carrinho vazio */
        .mensagem-vazio {
            background: white;
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .texto-vazio {
            font-size: 1.3rem;
            color: #666;
            margin-bottom: 25px;
        }

        /* Botões de ação */
        .botao-voltar {
            display: inline-block;
            background: linear-gradient(135deg, #ffcc00, #ffaa00);
            color: #8B4513;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 170, 0, 0.3);
        }

        .botao-voltar:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 170, 0, 0.4);
        }

        /* Tabela do carrinho */
        .tabela-carrinho {
            width: 100%;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .cabecalho-tabela {
            background: linear-gradient(135deg, #ffcc00, #ffaa00);
        }

        .linha-cabecalho {
            color: #8B4513;
        }

        .celula-cabecalho {
            padding: 20px 15px;
            text-align: left;
            font-weight: 700;
            font-size: 1.1rem;
            border-bottom: 2px solid #ff9900;
        }

        .linha-produto {
            transition: background-color 0.3s ease;
            border-bottom: 1px solid #f0f0f0;
        }

        .linha-produto:hover {
            background-color: #fff9e6;
        }

        .celula-produto {
            padding: 18px 15px;
            vertical-align: middle;
        }

        .celula-tipo {
            font-weight: 600;
            color: #8B4513;
        }

        .celula-nome {
            font-weight: 500;
            color: #333;
        }

        .celula-preco {
            color: #27ae60;
            font-weight: 600;
        }

        /* Input quantidade */
        .input-quantidade {
            width: 80px;
            padding: 10px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            text-align: center;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #fafafa;
        }

        .input-quantidade:focus {
            outline: none;
            border-color: #ffcc00;
            background: white;
            box-shadow: 0 0 0 3px rgba(255, 204, 0, 0.1);
        }

        /* Link remover */
        .link-remover {
            color: #e74c3c;
            text-decoration: none;
            font-weight: 600;
            padding: 8px 15px;
            border-radius: 6px;
            transition: all 0.3s ease;
            background: #ffe6e6;
            display: inline-block;
        }

        .link-remover:hover {
            background: #e74c3c;
            color: white;
            transform: scale(1.05);
        }

        /* Total da compra */
        .container-total {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            text-align: center;
        }

        .texto-total {
            font-size: 1.5rem;
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 15px;
        }

        .valor-total {
            font-size: 2rem;
            color: #27ae60;
            font-weight: 800;
        }

        /* Formulário finalização */
        .formulario-finalizacao {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .titulo-finalizacao {
            color: #8B4513;
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .grupo-finalizacao {
            margin-bottom: 20px;
        }

        .rotulo-finalizacao {
            display: block;
            color: #8B4513;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 1rem;
        }

        .entrada-finalizacao {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #fafafa;
        }

        .entrada-finalizacao:focus {
            outline: none;
            border-color: #ffcc00;
            background: white;
            box-shadow: 0 0 0 3px rgba(255, 204, 0, 0.1);
        }

        .botao-finalizar {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
            border: none;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(39, 174, 96, 0.3);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            width: 100%;
            margin-top: 10px;
        }

        .botao-finalizar:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(39, 174, 96, 0.4);
            background: linear-gradient(135deg, #2ecc71, #27ae60);
        }

        /* Link login */
        .link-login {
            text-align: center;
            margin-top: 20px;
        }

        .link-login a {
            color: #ffaa00;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .link-login a:hover {
            color: #ff7700;
            text-decoration: underline;
        }

        /* Rodapé */
        .rodape-carrinho {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: auto;
        }

        .texto-rodape {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .titulo-carrinho {
                font-size: 2.2rem;
            }
            
            .container-carrinho {
                padding: 20px 15px;
            }
            
            .celula-cabecalho {
                padding: 15px 10px;
                font-size: 1rem;
            }
            
            .celula-produto {
                padding: 12px 10px;
                font-size: 0.9rem;
            }
            
            .input-quantidade {
                width: 60px;
                padding: 8px;
            }
            
            .texto-total {
                font-size: 1.3rem;
            }
            
            .valor-total {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 480px) {
            .tabela-carrinho {
                font-size: 0.8rem;
            }
            
            .celula-cabecalho, .celula-produto {
                padding: 8px 5px;
            }
            
            .input-quantidade {
                width: 50px;
                padding: 6px;
            }
        }
    </style>
</head>

<body>
    <!-- Faixa amarela do topo -->
    <header class="cabecalho-carrinho">
        <h1 class="titulo-carrinho">ALLAPOLO'S BURGER</h1>
        <p class="subtitulo-carrinho">Seu carrinho de compras</p>
    </header>

    <!-- Container principal -->
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

    <!-- Rodapé -->
    <footer class="rodape-carrinho">
        <p class="texto-rodape">ALLAPOLO'S BURGER &copy; 2023 - Todos os direitos reservados</p>
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
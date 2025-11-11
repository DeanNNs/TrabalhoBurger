<?php

require_once "verificarLogado.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link href="" rel="stylesheet">
    <style>
       :root {
    --bg-primary: #0f0f23;
    --bg-secondary: #1a1a2e;
    --bg-card: #16213e;
    --accent: #6c63ff;
    --accent-hover: #7b73ff;  /* Cole o CSS acima aqui */
    --text-primary: #e2e8f0;
    --text-secondary: #94a3b8;
    --danger: #ef4444;
    --danger-hover: #f87171;
    --border: #2d3748;
    --shadow: rgba(0, 0, 0, 0.3);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.user-list-body {
    font-family: 'Inter', sans-serif;
    background: var(--bg-primary);
    color: var(--text-primary);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    line-height: 1.6;
}

.user-list-title {
    color: var(--text-primary);
    font-size: 2.5rem;
    margin-bottom: 30px;
    font-weight: 700;
    position: relative;
    display: inline-block;
}

.user-list-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: linear-gradient(90deg, var(--accent), transparent);
    border-radius: 2px;
}

.user-list-table {
    width: 100%;
    max-width: 1000px;
    border-collapse: collapse;
    background: var(--bg-card);
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 10px 25px var(--shadow);
    border: 1px solid var(--border);
    margin-bottom: 20px;
}

.user-list-header {
    background: var(--bg-secondary);
    color: var(--text-primary);
    font-weight: 600;
    padding: 16px 20px;
    text-align: left;
    border-bottom: 2px solid var(--accent);
}

.user-list-cell {
    padding: 14px 20px;
    border-bottom: 1px solid var(--border);
    color: var(--text-primary);
}

.user-list-row:hover {
    background: rgba(108, 99, 255, 0.05);
}

.user-list-row:last-child .user-list-cell {
    border-bottom: none;
}

.user-list-empty {
    text-align: center;
    color: var(--text-secondary);
    font-size: 1.1rem;
    padding: 40px;
    background: var(--bg-card);
    border-radius: 8px;
    border: 1px solid var(--border);
    max-width: 500px;
    width: 100%;
}

.user-list-action {
    display: inline-block;
    padding: 8px 16px;
    background: var(--danger);
    color: white;
    text-decoration: none;
    border-radius: 6px;
    font-size: 0.9rem;
    font-weight: 500;
    transition: all 0.3s ease;
}

.user-list-action:hover {
    background: var(--danger-hover);
    transform: translateY(-2px);
}

.user-list-back {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-top: 30px;
    padding: 12px 24px;
    background: var(--bg-secondary);
    color: var(--text-primary);
    text-decoration: none;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
    border: 1px solid var(--border);
}

.user-list-back:hover {
    background: var(--bg-primary);
    border-color: var(--accent);
    transform: translateY(-2px);
}

.user-list-back::before {
    content: '←';
    margin-right: 8px;
}

/* Responsividade */
@media (max-width: 768px) {
    .user-list-body {
        padding: 15px;
    }
    
    .user-list-title {
        font-size: 2rem;
    }
    
    .user-list-table {
        font-size: 0.9rem;
    }
    
    .user-list-header,
    .user-list-cell {
        padding: 12px 15px;
    }
}

@media (max-width: 480px) {
    .user-list-body {
        padding: 10px;
    }
    
    .user-list-title {
        font-size: 1.7rem;
    }
    
    .user-list-header,
    .user-list-cell {
        padding: 10px 12px;
        font-size: 0.85rem;
    }
    
    .user-list-action {
        padding: 6px 12px;
        font-size: 0.8rem;
    }
}
    </style>
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
<?php
function salvarUsuario($conexao, $nome, $email, $senha, $tipo){
    $senha_hash = password_hash( $senha, algo: PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (nome, email, senha, tipo) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssss', $nome, $email, $senha_hash, $tipo);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
}

function editarUsuario($conexao, $nome, $email, $senha, $tipo, $idusuario){
    $sql = "UPDATE usuario SET nome=?, email=?, senha=?, tipo=? WHERE idusuario=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssssi', $nome, $email, $senha, $tipo, $idusuario);
    

    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarUsuario($conexao, $idusuario){
    $sql = "DELETE FROM cliente WHERE idusuario = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $idusuario);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
}

function listarUsuario($conexao){
    $sql = "SELECT * FROM usuario";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);
    
    $lista_usuario = [];
    while ($usuario = mysqli_fetch_assoc($resultados)) {
        $lista_usuario[] = $usuario;
    }
    mysqli_stmt_close($comando);

    return $lista_usuario;
}

function salvarProduto($conexao, $nome, $preco, $descricao, $tipo){
    $sql = "INSERT INTO produto (nome, preco, descricao, tipo) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssss', $nome, $preco, $descricao, $tipo);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
}

function editarProduto($conexao, $nome, $preco, $descricao, $tipo, $idproduto){
    $sql = "UPDATE produto SET nome=?, preco=?, descricao=?, tipo=? WHERE idproduto=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssssi', $nome, $preco, $descricao, $tipo, $idproduto);
    

    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarProduto($conexao, $idproduto){
    $sql = "DELETE FROM produto WHERE idproduto = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $idproduto);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
}

function listarProduto($conexao){
    $sql = "SELECT * FROM produto";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);
    
    $lista_produto = [];
    while ($produto = mysqli_fetch_assoc($resultados)) {
        $lista_produto[] = $produto;
    }
    mysqli_stmt_close($comando);

    return $lista_produto;
}

function salvarCombo($conexao, $nome, $preco, $descricao){
    $sql = "INSERT INTO combo (nome, preco, descricao) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sss', $nome, $preco, $descricao);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
}

function editarCombo($conexao, $nome, $preco, $descricao, $idcombo){
    $sql = "UPDATE combo SET nome=?, preco=?, descricao=?, tipo=? WHERE idcombo=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sssi', $nome, $preco, $descricao, $idcombo);
    

    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarCombo($conexao, $nome, $preco, $descricao, $idcombo){
    $sql = "DELETE FROM combo WHERE idcombo = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $idcombo);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
}

function listarCombo($conexao){
    $sql = "SELECT * FROM combo";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);
    
    $lista_combo = [];
    while ($combo = mysqli_fetch_assoc($resultados)) {
        $lista_combo[] = $combo;
    }
    mysqli_stmt_close($comando);

    return $lista_combo;
}

function salvarMontagemCombo($conexao, $produto, $combo){
    $sql = "INSERT INTO montagem_combo (produto, combo) VALUES (?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ii', $produto, $combo);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
}

function salvarItem($conexao, $idproduto, $idpedido){
    $sql = "INSERT INTO itens (idproduto, idpedido) VALUES (?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ii', $idproduto, $idpedido);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
}

function salvarPedido($conexao, $data, $endereco, $telefone, $)

<?php
function salvarUsuario($conexao, $nome, $telefone, $email, $senha, $tipo){
    $senha_hash = password_hash( $senha, algo: PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (nome, telefone, email, senha, tipo) VALUES (?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sssss', $nome, $telefone, $email, $senha_hash, $tipo);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);

}

function editarUsuario($conexao, $nome, $telefone, $email, $senha, $tipo, $idusuario){
    $senha_hash = password_hash( $senha, algo: PASSWORD_DEFAULT);

    $sql = "UPDATE usuario SET nome=?, telefone=?, email=?, senha=?, tipo=? WHERE idusuario=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sssssi', $nome, $telefone, $email, $senha_hash, $tipo, $idusuario);
    

    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarUsuario($conexao, $idusuario){
    $sql = "DELETE FROM usuario WHERE idusuario = ?";
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

function salvarPedido($conexao, $data, $endereco, $valor_total, $idusuario){
    $sql = "INSERT INTO pedido (data, endereco, valor_total, idusuario) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssdi', $data, $endereco, $valor_total, $idusuario);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
}



function deletarPedido($conexao, $idpedido){
    $sql = "DELETE FROM pedido WHERE idpedido = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $idpedido);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
}

function editarPedido($conexao, $data, $endereco, $valor_total, $idpedido){
    $sql = "UPDATE pedido SET data=?, endereco=?, valor_total=? WHERE idpedido=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssdi', $data, $endereco, $valor_total,$idpedido);
    

    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
}

function listarPedido($conexao){
    $sql = "SELECT * FROM pedido";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);
    
    $lista_pedido = [];
    while ($pedido = mysqli_fetch_assoc($resultados)) {
        $lista_pedido[] = $pedido;
    }
    mysqli_stmt_close($comando);

    return $lista_pedido;
}

function salvarItem($conexao, $idproduto, $idpedido, $quantidade){
    $sql = "INSERT INTO itens (idproduto, idpedido, quantidade) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'iid', $idproduto, $idpedido, $quantidade);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
}

function pesquisarProdutoId($conexao, $idproduto) {
    $sql = "SELECT * FROM produto WHERE idproduto = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idproduto);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $produto = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $produto;
};

function pesquisarUsuarioId($conexao, $idusuario)
{
    $sql = "SELECT * FROM usuario WHERE idusuario = ?";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'i', $idusuario);

    mysqli_stmt_execute($comando);
    $resultado = mysqli_stmt_get_result($comando);

    $usuario = mysqli_fetch_assoc($resultado);

    mysqli_stmt_close($comando);
    return $usuario;
};
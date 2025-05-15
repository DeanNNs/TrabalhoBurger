<?php
function salvarCliente($conexao, $nome, $endereco, $telefone, $senha){
    $senha_hash = password_hash( $senha, algo: PASSWORD_DEFAULT);

    $sql = "INSERT INTO cliente (nome, endereco, telefone, senha) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sssss', $nome, $cpf, $endereco, $telefone, $senha_hash);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
}
function editarCliente($conexao, $nome, $endereco, $telefone, $senha, $idcliente){
    $sql = "UPDATE cliente SET nome=?, endereco=?, telefone=?, senha WHERE idcliente=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssssi', $nome, $endereco, $telefone, $senha, $idcliente);
    

    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarCliente($conexao, $idcliente){
    $sql = "DELETE FROM cliente WHERE idcliente = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $idcliente);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
}

function salvarHamburger($conexao, $nome, $preco, $descricao){
    $sql = "INSERT INTO hamburguer (nome, preco, descricao) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sds', $nome, $preco, $descricao,);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
}

function editarHamburger($conexao, $nome, $preco, $descricao){
    $sql = "UPDATE hamburguer SET nome=?, preco=?, descricao=? WHERE idhamburger=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sdsi', $nome, $preco, $descricao, $idcliente);
    

    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarHamburger ($conexao, $idhamburger){
    $sql = "DELETE FROM hamburguer WHERE idhamburger = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $idhamburger);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
}

function listarHamburger($conexao){
    $sql = "SELECT * FROM hamburguer";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);
    
    $lista_hamburguer = [];
    while ($hamburguer = mysqli_fetch_assoc($resultados)) {
        $lista_hamburguer[] = $hamburguer;
    }
    mysqli_stmt_close($comando);

    return $lista_hamburguer;
}

function salvarBebidas($conexao, $tipo, $nome, $preco, $volume){
    $sql = "INSERT INTO hamburguer (tipo, nome, preco, volume) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sds', $tipo, $nome, $preco, $volume,);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
}

function editarBebida($conexao, $tipo, $nome, $preco, $volume){

}

function deletarBebida($conexao, $idbebida){

}

function listarBebida($conexao){

}

function salvarAdcionais($conexao, $preco, $nome, $tipo){

}

function editarAdicionais($conexao, $preco, $nome, $tipo){

}

function deletarAdicionais($conexao, $idadcional){

}

function listarAdcionais($conexao){

}

function salvarCombos($conexao, $nome, $preco, $descricao, $idbebida, $idhamburger){

}

function editarCombos($conexao, $nome, $preco, $descricao, $idbebida, $idhamburger){

}

function deletarCombos($conexao, $idcombo){

}

function listarCombos($conexao){

}

function salvarEntregador($conexao, $nome, $cpf, $telefone){

}

function editarEntregador($conexao, $nome, $cpf, $telefone){

}

function deletarEntregador($conexao, $idfuncionario){

}

function listarEntregador($conexao){

}

function salvarAdministrador($conexao, $login, $senha){
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
}


function salvarEntrega($conexao, $endereco, $idusuario, $idfuncionario, 
$idpedido){

} 

function deletarEntrega($conexao, $identrega){

}

function listarEntrega($conexao){

}

function listarPedido($conexao){

}

function validarCliente($conexao, $nome, $senha){

}

function validarAdministrador($conexao, $login, $senha){

}

function listarHistorico($conexao){
    
}

function salvarMontagem($conexao, $hamburguer, $presunto, $mussarela, $alface, $tomate, $salsicha, $ovo, $bacon, $milho, $batata, $pao, $frango, $quantidade, $idpedido, $idhistorico){

}

function deletarMontagem($conexao, $idmontagem, $hamburguer, $presunto, $mussarela, $alface, $tomate, $salsicha, $ovo, $bacon, $milho, $batata, $pao, $frango, $quantidade, $idpedido, $idhistorico){

}

function listarMontagem($conexao){

}

function salvarPedido($conexao, $idpedido, $idhistorico){

}

function deletarPedido($conexao, $idpedido){

}

function listarPedidos($conexao){

}




























































?>
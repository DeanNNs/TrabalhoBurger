<?php
function salvarCliente($conexao, $nome, $endereco, $telefone, $senha){
    $senha_hash = password_hash( $senha, algo: PASSWORD_DEFAULT);

    $sql = "INSERT INTO cliente (nome, endereco, telefone, senha) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
    mysqli_stmt_bind_param($comando, 'sssss', $nome, $cpf, $endereco, $telefone, $senha_hash);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
}
function editarCliente($conexao, $nome, $cpf, $endereco, $telefone, $senha, $idcliente){

}

function deletarCliente($conexao, $idcliente){

}

function salvarHamburger($conexao, $nome, $preco, $descricao){

}

function editarHamburger($conexao, $nome, $preco, $descricao):{

}

function deletarHamburger($conexao, $idhamburger){

}

function listarHamburger($conexao){

}

function salvarBebidas($conexao, $tipo, $nome, $preco, $volume){

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
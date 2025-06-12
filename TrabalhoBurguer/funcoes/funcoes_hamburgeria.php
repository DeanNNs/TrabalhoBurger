<?php
function salvarCliente($conexao, $nome, $endereco, $telefone, $senha){
    $senha_hash = password_hash( $senha, algo: PASSWORD_DEFAULT);

    $sql = "INSERT INTO cliente (nome, endereco, telefone, senha) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssss', $nome, $endereco, $telefone, $senha_hash);
    
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

function editarHamburger($conexao, $nome, $preco, $descricao, $idhamburguer){
    $sql = "UPDATE hamburguer SET nome=?, preco=?, descricao=? WHERE idhamburguer=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sdsi', $nome, $preco, $descricao, $idhamburguer);
    

    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarHamburger ($conexao, $idhamburguer){
    $sql = "DELETE FROM hamburguer WHERE idhamburguer = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $idhamburguer);

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
    $sql = "INSERT INTO bebida (tipo, nome, preco, volume) VALUES (?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssds', $tipo, $nome, $preco, $volume,);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
}

function editarBebida($conexao, $tipo, $nome, $preco, $volume, $idbebida){
    $sql = "UPDATE bebida SET tipo=?, nome=?, preco=? volume=? WHERE idbebida=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssdsi', $tipo, $nome, $preco, $volume, $idbebida);
    

    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarBebida($conexao, $idbebida){
    $sql = "DELETE FROM bebida WHERE idbebida = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $idbebida);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
}

function listarBebida($conexao){
    $sql = "SELECT * FROM bebida";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);
    
    $lista_bebida = [];
    while ($bebida = mysqli_fetch_assoc($resultados)) {
        $lista_bebida[] = $bebida;
    }
    mysqli_stmt_close($comando);

    return $lista_bebida;
}

function salvarAdcionais($conexao, $nome, $preco, $tipo){
    $sql = "INSERT INTO bebida (tipo, nome, preco) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssds', $nome, $preco, $tipo);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
}

function editarAdicionais($conexao, $preco, $nome, $tipo, $idadicional){
    $sql = "UPDATE adicional SET preco=?  nome=?, tipo=? WHERE idadicional=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'dssi', $preco, $nome, $tipo, $idadicional);
    

    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarAdicionais($conexao, $idadicional){
    $sql = "DELETE FROM adicional WHERE idadicional = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $idadicional);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
}

function listarAdcionais($conexao){
    $sql = "SELECT * FROM adicional";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);
    
    $lista_adicional = [];
    while ($adicional = mysqli_fetch_assoc($resultados)) {
        $lista_adicional[] = $adicional;
    }
    mysqli_stmt_close($comando);

    return $lista_adicional;
}

function salvarCombos($conexao, $nome, $preco, $descricao, $idbebida, $idadicional, $idhamburger){
    $sql = "INSERT INTO combo (nome, preco, descricao, idbebida, idadicional, idhamburger) VALUES (?, ?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sdsiii', $nome, $preco, $tipo, $descricao, $idbebida, $idadicional, $idhamburger);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
}

function editarCombos($conexao, $nome, $preco, $descricao, $idbebida, $idadicional,$idhamburguer, $idcombo){
    $sql = "UPDATE combo SET nome=?  preco=?, descricao=? idbebida=? idadicional=? idhamburguer=? WHERE idcombo=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sdsiiii', $nome, $preco, $descricao, $idbebida, $idadicional, $idhamburguer, $idcombo);
    

    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarCombos($conexao, $idcombo){
    $sql = "DELETE FROM combo WHERE idcombo = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $idcombo);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
}

function listarCombos($conexao){
    $sql = "SELECT * FROM combo";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);
    
    $lista_adicional = [];
    while ($adicional = mysqli_fetch_assoc($resultados)) {
        $lista_adicional[] = $adicional;
    }
    mysqli_stmt_close($comando);

    return $lista_adicional;
}

function salvarEntregador($conexao, $nome, $cpf, $telefone){
    $sql = "INSERT INTO entregador (nome, cpf, telefone) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sdsiii', $nome, $cpf, $telefone);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
}

function editarEntregador($conexao, $nome, $cpf, $telefone, $identregador){
    $sql = "UPDATE entregador SET nome=?  cpf=?, telefone=? WHERE identregador=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssii', $nome, $cpf, $telefone, $identregador);
    

    $funcionou = mysqli_stmt_execute($comando);
    
    mysqli_stmt_close($comando);
    return $funcionou;
}

function deletarEntregador($conexao, $identregador){
    $sql = "DELETE FROM entregador WHERE identregador = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $identregador);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
}

function listarEntregador($conexao){
    $sql = "SELECT * FROM entragador";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);
    
    $lista_adicional = [];
    while ($adicional = mysqli_fetch_assoc($resultados)) {
        $lista_adicional[] = $adicional;
    }
    mysqli_stmt_close($comando);

    return $lista_adicional;
}

function salvarAdministrador($conexao, $login, $senha){
    $senha_hash = password_hash( $senha, algo: PASSWORD_DEFAULT);

    $sql = "INSERT INTO cliente (login, senha) VALUES (?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ss', $login, $senha_hash);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
}

function listarAdministrador($conexao){
    $sql = "SELECT * FROM administrador";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);
    
    $lista_administrador = [];
    while ($administrador = mysqli_fetch_assoc($resultados)) {
        $lista_administrador[] = $administrador;
    }
    mysqli_stmt_close($comando);

    return $lista_administrador;
}

function salvarEntrega($conexao, $data, $endereco, $idcliente, $identregador, $idcarrinho){
    $sql = "INSERT INTO entrega (data, endereco, idcliente, identregador, idcarrinho) VALUES (?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'ssiii', $data, $endereco, $idcliente, $identregador, $idcarrinho);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
} 

function deletarEntrega($conexao, $identrega){
    $sql = "DELETE FROM entrega WHERE identrega = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $identrega);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
}

function listarEntrega($conexao){
    $sql = "SELECT * FROM entrega";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);
    
    $lista_entrega = [];
    while ($entrega = mysqli_fetch_assoc($resultados)) {
        $lista_entrega[] = $entrega;
    }
    mysqli_stmt_close($comando);

    return $lista_entrega;
}

function listarCarrinho($conexao){
    $sql = "SELECT * FROM carrinho";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);
    
    $lista_carrinho = [];
    while ($carrinho = mysqli_fetch_assoc($resultados)) {
        $lista_carrinho[] = $carrinho;
    }
    mysqli_stmt_close($comando);

    return $lista_carrinho;
}

function validarCliente($conexao, $nome, $senha){
    
}

function validarAdministrador($conexao, $login, $senha){

}

function salvarMontagem($conexao, $hamburguer, $presunto, $mussarela, $alface, $tomate, $salsicha, $ovo, $bacon, $milho, $batata, $pao, $frango, $quantidade, $idpedido, $idhistorico){
    $sql = "INSERT INTO montagem (hamburguer, presunto, mussarela, alface, tomate, salsicha, ovo, bacon, milho, batata, pao, frango, quantidade, idpedido, idhistórico) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'iiiiiiiiiiiiiii', $hamburguer, $presunto, $mussarela, $alface, $tomate, $salsicha, $ovo, $bacon, $milho, $batata, $pao, $frango, $quantidade, $idpedido, $idhistorico);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
}

function deletarMontagem($conexao, $idmontagem){
    $sql = "DELETE FROM montagem WHERE idmontagem = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $idmontagem);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
}

function listarMontagem($conexao){
    $sql = "SELECT * FROM montagem";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_execute($comando);
    $resultados = mysqli_stmt_get_result($comando);
    
    $lista_montagem = [];
    while ($carrinho = mysqli_fetch_assoc($resultados)) {
        $lista_carrinho[] = $carrinho;
    }
    mysqli_stmt_close($comando);

    return $lista_carrinho;
}
?>
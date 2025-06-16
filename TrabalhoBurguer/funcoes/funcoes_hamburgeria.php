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
    $sql = "UPDATE cliente SET nome=?, email=?, senha=?, tipo=? WHERE idusuario=?";
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

function salvarHamburguer($conexao, $nome, $preco, $descricao){
    $sql = "INSERT INTO hamburguer (nome, preco, descricao) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    mysqli_stmt_bind_param($comando, 'sds', $nome, $preco, $descricao);
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

function deletarHamburguer ($conexao, $idhamburguer){
    $sql = "DELETE FROM hamburguer WHERE idhamburguer = ?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'i', $idhamburguer);

    $funcionou = mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    
    return $funcionou;
}

function listarHamburguer($conexao){
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

function salvarAdicional($conexao, $nome, $preco){
    $sql = "INSERT INTO bebida (nome, preco) VALUES (?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sd', $nome, $preco);
    
    mysqli_stmt_execute($comando);
    mysqli_stmt_close($comando);
    // varchar, string, data -> s
    // inteiro -> i
    // dinheiro, decimal -> d
}

function editarAdicional($conexao, $preco, $nome, $idadicional){
    $sql = "UPDATE adicional SET preco=?  nome=? WHERE idadicional=?";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'dsi', $preco, $nome, $idadicional);
    

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


function salvarEntrega($conexao, $data, $endereco, $telefone, $idcliente, $identregador, $idcarrinho){
    $sql = "INSERT INTO entrega (data, endereco, telefone, idcliente, identregador, idcarrinho) VALUES (?, ?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, 'sssiii', $data, $endereco, $telefone, $idcliente, $identregador, $idcarrinho);
    
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

function validarUsuario($conexao, $nome, $email, $senha, $tipo){
    
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
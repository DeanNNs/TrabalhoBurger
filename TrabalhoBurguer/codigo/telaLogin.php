<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    require_once "../conexao.php";
    ?>
    
     <form action="verificarLogin.php" method="post">
        Email: <br>
        <input type="text" name="email"> <br><br>
        Senha: <br>
        <input type="password" name="senha"> <br><br>
        <a href="formUsuario.html"> Cadastrar novo usuário</a>
        <br> <br>
        <input type="submit" value="Entrar">

    </form>
</body>
</html>
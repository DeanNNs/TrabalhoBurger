<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../css/style.css"></link>
</head>
<body>
    <form action="salvarUsuario.php" method="post">
        Nome: <br>
        <input type="text" name="nome"> <br><br>
        Telefone: <br>
        <input type="text" name="telefone" id="telefone"> <br><br>
        E-mail: <br>
        <input type="text" name="email">
        <br><br>
        Senha: <br>
        <input type="password" name="senha">
        <br><br>
    <input type="submit" value="Cadastrar"> 
    </form>

    <script>
        $(document).ready(function() {
            $('#telefone').mask('00000-0000');
        });
    </script>
    
</body>
</html>

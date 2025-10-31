<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.titulo-frame {
    background: linear-gradient(135deg, #ffcc00, #ffaa00);
    color: #8B4513;
    padding: 16px 24px;
    font-size: 1.4rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 10px;
}

.titulo-frame:before {
    content: "📋";
}
</style>
<body>
    <h1 class="titulo-frame">Categorias</h1>

    <a href="listarBebida.php" target="principal" >Bebidas</a> <br><br>
    <a href="listarHamburguer.php" target="principal">Hambúrgueres</a> <br><br>
    <a href="listarAdicional.php" target="principal">Adicionais</a> <br><br>

</body>
</html>
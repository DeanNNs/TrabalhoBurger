<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Lista de Usuarios</h1>
  <?php
  require_once "../conexao.php";
  require_once "../funcoes/funcoes_hamburgueria.php";

  $lista_usuario = listarUsuario($conexao);

  if (count($lista_usuario) == 0) {
    echo "Não existem clientes cadastrados";
  } else {
  ?>
    <table border="1">
      <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Telefone</td>
        <td>Email</td>
        <td>Tipo</td>
        <td colspan="2">Ação</td>
      </tr>
    <?php
    foreach ($lista_usuario as $usuario) {
      $idusuario = $usuario['idusuario'];
      $nome = $usuario['nome'];
      $telefone = $usuario['telefone'];
      $email = $usuario['email'];
      $tipo = $usuario['tipo'];

      echo "<tr>";
      echo "<td>$idusuario</td>";
      echo "<td>$nome</td>";
      echo "<td>$telefone</td>";
      echo "<td>$email</td>";
      echo "<td>$tipo</td>";
      echo "<td><a href='removerUsuario.php?id=$idusuario'>Remover</a></td>";
      echo "</tr>";
    }
  }
    ?>
    </table>
    <br><br>
     <a href="../telaAdministrador.php">Voltar</a><br><br>
</body>

</body>

</html>
<html>
      <table border="1">
      <tr>
        <td>Id</td>
        <td>Endereço</td>
        <td>Valor</td>
        <td>Id do Usuário</td>
        <td>Ação</td>
      </tr>
<?php
    require_once "../conexao.php";
    require_once "../funcoes/funcoes_hamburgueria.php";

   $pedidos = listarPedido($conexao);


    if (count($pedidos) > 0) {
    
    foreach ($pedidos as $pedido) {
        $idpedido = $pedido['idpedido'];
        $endereco = $pedido['endereco'];
        $valor_total = $pedido['valor_total'];
        $idusuario = $pedido['idusuario'];

        echo "<tr>";
      echo "<td>$idpedido</td>";
      echo "<td>$endereco</td>";
      echo "<td>$valor_total</td>";
      echo "<td>$idusuario</td>";
      echo "<td><a href='removerPedido.php?id=$idpedido'>Cancelar</a></td>";
         echo "</tr>";
    }
}
    ?>
    </table>
    <br><br>
    <a href="../telaAdministrador.php">Voltar</a>
</body>
</html>
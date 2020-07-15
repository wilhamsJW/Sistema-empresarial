<?php include_once 'includes/header_inc.php' ?>


<div class="container" style="margin-top: 40px;">
  <h4>Lista de Produtos</h4>

  <!--Exibir mensagem de erro-->
  <?php if (isset($mensagem)) { ?>
    <!--isset verifica se a var está configurada ou definida, se tiver definida é pq deu falha pois já vem do arquivo loginsenha, se não tiver configurada é pq foi um sucesso-->
    <div class="alert" style="text-align: center" role="alert">
      <?php echo $mensagem ?>
    </div>
  <?php } ?>
  <!--lembre se do fechamento da chave nessa outra tag html-->

  <table class="table table-striped">
    <thead>
      <tr>

        <th scope="col">Número do Produto</th>
        <th scope="col">Nome do Produto</th>
        <th scope="col">Categoria</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Fornecedor</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tr>
      <?php
      include_once 'connections_/connection.php';
      $sql = "SELECT * FROM estoque";
      $query = mysqli_query($conecta, $sql);

      while ($array = mysqli_fetch_assoc($query)) {

        $id_estoque = $array['id_estoque'];
        $numeroproduto = $array['numeroproduto'];
        $nomeproduto = $array['nomeproduto'];
        $categoria = $array['categoria'];
        $quantidade = $array['quantidade'];
        $fornecedor = $array['fornecedor'];

      ?>
    <tr>

      <td><?php echo $numeroproduto ?></td>
      <td><?php echo $nomeproduto ?></td>
      <td><?php echo $categoria ?></td>
      <td><?php echo $quantidade ?></td>
      <td><?php echo $fornecedor ?></td>
      <td><a class="btn btn-warning btn-sm" style="color:white;" href="edite.php?id=<?php echo $id_estoque ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>
        <a class="btn btn-danger btn-sm" style="color:white;" href="connections_/delete.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
      </td>

    </tr>

  <?php  } ?>
  </tr>


  </table>
</div>


<?php include_once 'includes/footer.php' ?>
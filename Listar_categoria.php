<?php include_once 'includes/header_inc.php' ?>


<div class="container" style="margin-top: 40px;width:450px;">
<div style="text-align: right">
  <a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
</div>
  <h4>Lista de Categorias</h4>
  

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

        <th scope="col">Nome Categoria</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tr>
      <?php
      include_once 'connections_/connection.php';
      $sql = "SELECT * FROM categoria";
      $query = mysqli_query($conecta, $sql);

      while ($array = mysqli_fetch_assoc($query)) {

        $id_categoria = $array['id_categoria'];
        $nome_categoria = $array['nome_categoria'];
      ?>
    <tr>

      <td><?php echo $nome_categoria ?></td>
  
      <td><a class="btn btn-warning btn-sm" style="color:white;" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fas fa-edit"></i>&nbsp;Editar</a>
        <a class="btn btn-danger btn-sm" style="color:white;" href="connections_/delete.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
      </td>

    </tr>

  <?php  } ?>
  </tr>


  </table>
</div>


<?php include_once 'includes/footer.php' ?>
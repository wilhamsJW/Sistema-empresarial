<?php include_once 'includes/header_inc.php' ?>


<div class="container" style="margin-top: 40px; width: 500px">
  <div style="text-align: right">
    <a href="index.php" role="button" class="btn btn-success btn-sm">Voltar</a>
  </div>
  <h4>Cadastro de Categoria</h4>
  <form action="connections_/create.php" method="post">
    <div class="form-group">
      <input type="text" name="categoria" class="form-control" placeholder="Digite a nova categoria">
    </div>
    <div style="text-align: right">
      <button type="submit" class="btn btn-primary btn-sm">Inserir Categoria</button>
    </div>
  </form>

</div>


<?php include_once 'includes/footer.php' ?>
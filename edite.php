<?php include_once 'includes/header_inc.php'; include_once 'connections_/connection.php';?>




<div class="all">
  <div class="container" id="containerprincipal">
  <form action="connections_/update.php" method="POST" id="form">
  <h4 id="h4">Formulário de Cadastro</h4> 
  
  <?php 
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM  `estoque` WHERE id_estoque = $id";
    $query = mysqli_query($conecta, $sql);
    while($array = mysqli_fetch_assoc($query)){
        $id_estoque    = $array['id_estoque'];
        $numeroproduto = $array['numeroproduto'];
        $nomeproduto   = $array['nomeproduto'];
        $categoria     = $array['categoria'];
        $quantidade    = $array['quantidade'];
        $fornecedor    = $array['fornecedor'];
    
?>

  <div class="form-group">
    <label for="exampleInputEmail1">Número do Produto</label>
    <input type="number" class="form-control" name="numeroproduto" value="<?php echo $numeroproduto ?>"disabled><!--disabled o campo de edição input fica desabilitado, impedindo o usuário de alterar algo na caixa edição-->
    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display:none"><!--guardando a id q está sendo enviada pela url-->
    </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Nome do Produto</label>
    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>" aria-describedby="emailHelp" placeholder="Insira o nome do produto" require>
    </div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Categoria</label>
    <select class="form-control" name="categoria" value="<?php echo $categoria ?>" require>
      <option>Periférico</option>
      <option>Hardware</option>
      <option>Software</option>
      <option>Celulares</option>
    </select>
  </div>
  <div class="form-group">

  
  <div class="form-group">
    <label for="exampleInputEmail1">Quantidade</label>
    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>"  aria-describedby="emailHelp" placeholder="Insira a quantidade do produto" require>
    </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Fornecedor</label>
    <select class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>">
      <option>Fornecedor A</option>
      <option>Fornecedor B</option>
      <option>Fornecedor C</option>
    </select>
  </div>
  <div class="form-group">

  <div style="text-align: right;">
  <button type="submit" class="btn btn-success btn-sm" id="button">Alterar</button>
  </div>

</div>
</div>
<?php } ?>
</form>

      


<?php include_once 'includes/footer.php'?>
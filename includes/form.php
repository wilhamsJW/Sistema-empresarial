<div class="all">
  <div class="container" id="containerprincipal">
  <form action="connections_/create.php" method="POST" id="form">
  <h4 id="h4">Formulário de Cadastro</h4>  
  <div class="form-group">
    <label for="exampleInputEmail1">Número do Produto</label>
    <input type="number" class="form-control" name="numeroproduto" aria-describedby="emailHelp" placeholder="Insira o número do produto" require>
    </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Nome do Produto</label>
    <input type="text" class="form-control" name="nomeproduto" aria-describedby="emailHelp" placeholder="Insira o nome do produto" require>
    </div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Categoria</label>
    <select class="form-control" name="categoria" require>
      <option>Periférico</option>
      <option>Hardware</option>
      <option>Software</option>
      <option>Celulares</option>
    </select>
  </div>
  <div class="form-group">

  
  <div class="form-group">
    <label for="exampleInputEmail1">Quantidade</label>
    <input type="number" class="form-control" name="quantidade"  aria-describedby="emailHelp" placeholder="Insira a quantidade do produto" require>
    </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Fornecedor</label>
    <select class="form-control" name="fornecedor">
      <option>Fornecedor A</option>
      <option>Fornecedor B</option>
      <option>Fornecedor C</option>
    </select>
  </div>
  <div class="form-group">

  <div style="text-align: right;">
  <button type="submit" class="btn btn-success btn-sm" id="button">Cadastrar</button>
  <a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>

  </div>

</div>
</div>
</form>
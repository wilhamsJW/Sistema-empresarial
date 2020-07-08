<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Link Css estilizado -->
    <link rel="stylesheet" href="css_style/style.css">

    <title>Formulário de Cadastro</title>

  </head>
  <body>
   
  <div class="all">
  <div class="container" id="containerprincipal">
  <form action="_inserir_produto.php" method="post" id="form">
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
  </div>

</div>
</div>
</form>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="Bootstrap/js/jquery-3.5.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="Bootstrap/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
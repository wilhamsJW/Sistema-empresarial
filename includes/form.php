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

          <?php
          include '../connections_/connection.php';
          $sqli = "SELECT * FROM categoria order by nome_categoria ASC";
          $queryi = mysqli_query($conecta, $sqli);

          while ($arrayi = mysqli_fetch_assoc($queryi)) {
            $id_categoria = $arrayi['id_categoria'];
            $nome_categoria = $arrayi['nome_categoria'];
          ?>

            <option><?php echo $nome_categoria ?></option>

          <?php } ?>

        </select>
      </div>
      <div class="form-group">


        <div class="form-group">
          <label for="exampleInputEmail1">Quantidade</label>
          <input type="number" class="form-control" name="quantidade" aria-describedby="emailHelp" placeholder="Insira a quantidade do produto" require>
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Fornecedor</label>
          <select class="form-control" name="fornecedor">

            <?php include_once '../connections_/connection.php';

            $sql = "SELECT * FROM fornecedor ORDER BY nome_forn ASC";
            $query = mysqli_query($conecta, $sql);

            while ($array = mysqli_fetch_assoc($query)) {
              $nome_forn = $array["nome_forn"];

            ?>
              <option><?php $nome_forn ?></option>

            <?php } ?>
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
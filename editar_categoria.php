<?php
include_once 'includes/header_inc.php';
include_once 'connections_/connection.php';
//include_once 'connections_/connection.php';
?>

<div class="all">
    <div class="container" id="containerprincipal">
    <h4 id="h4">Formulário de Edição de Categoria</h4>
        <form action="connections_/update.php" method="POST" id="form">
            
            <?php
            
            //$id_categoria = filter_input(INPUT_GET, 'id_categoria', FILTER_SANITIZE_NUMBER_INT);
            $id = $_GET['id'];

            $sql = "SELECT * FROM  `categoria` WHERE id_categoria = $id";
            $query = mysqli_query($conecta, $sql);
            while ($array = mysqli_fetch_assoc($query)) {
                $id_categoria    = $array['id_categoria'];
                $nome_categoria = $array['nome_categoria'];
            ?>
              <tr>  
                 <td> 
                <div class="form-group">
                    <label>Nome da categoria</label>
                    <input type="text" class="form-control" name="nome_categoria" value="<?php echo $nome_categoria ?>" placeholder="Insira o nome da categoria" require>
                </div>
                </td>
               <td> 
                <div class="form-group">
                    <div style="text-align: right;">
                        <button type="submit" class="btn btn-success btn-sm" id="button">Alterar</button>
                    </div>
                </div>
                 </td>
              </tr>
<?php } ?>
</div>
</form>
</div>



<?php include_once 'includes/footer.php' ?>
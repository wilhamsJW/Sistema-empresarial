<?php include_once 'connection.php';


$numeroproduto = filter_input(INPUT_POST, 'numeroproduto', FILTER_SANITIZE_NUMBER_INT);
$nomeproduto   = filter_input(INPUT_POST, 'nomeproduto',   FILTER_SANITIZE_SPECIAL_CHARS);
$categoria     = filter_input(INPUT_POST, 'categoria',     FILTER_SANITIZE_SPECIAL_CHARS);
$quantidade    = filter_input(INPUT_POST, 'quantidade',    FILTER_SANITIZE_NUMBER_INT);
$fornecedor    = filter_input(INPUT_POST, 'fornecedor',    FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "INSERT INTO `estoque`( `numeroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ('$numeroproduto','$nomeproduto','$categoria','$quantidade','$fornecedor')";

$query = mysqli_query($conecta, $sql);

/* Esta é a maneira não recomendada pra se pegar um valor via POST, o ideal é usar filtros, como mostra o exemplo acima 
    $numeroproduto = $_POST['numeroproduto'];
    $nomeproduto   = $_POST['nomeproduto'];
    $categoria     = $_POST['categoria'];
    $quantidade    = $_POST['quantidade'];
    $fornecedor    = $_POST['fornecedor'];
    */


?>

<link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="container" style="width: 500px;margin-top: 80px; text-align: center;">
    <h4>Produto Adiconado com sucesso!</h4>
    <div style="padding: 20px;text-align: center;">
        <a href="../cadastrar_produto.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo item</a>
    </div>
</div>

<!-- Adding Category -->

<?php
include_once 'connection.php';

$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "INSERT INTO categoria (nome_categoria) values ('$categoria') ";
$query = mysqli_query($conecta, $sql);

if (!$query) {
    echo "ERRO NO SERVIDOR";
} else {
    header("location:../");
}
?>

<!-- Adding Fornecedor -->

<?php

$fornecedor = filter_input(INPUT_POST, 'fornecedor', FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "INSERT INTO fornecedor (nome_forn) values ('$fornecedor') ";
$query = mysqli_query($conecta, $sql);

if (!$query) {
    echo "ERRO NO SERVIDOR";
} else {
    header("location:../");
}

?>
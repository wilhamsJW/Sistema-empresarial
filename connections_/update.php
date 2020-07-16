<?php
include_once 'connection.php';

if (isset($_POST['id'])) {

    $id            = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    //$numeroproduto = filter_input(INPUT_POST, 'numeroproduto', FILTER_SANITIZE_NUMBER_INT); o usuário não pode alterar o número
    $nomeproduto   = filter_input(INPUT_POST, 'nomeproduto', FILTER_SANITIZE_SPECIAL_CHARS);
    $categoria     = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);
    $quantidade    = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
    $fornecedor    = filter_input(INPUT_POST, 'fornecedor', FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`='$quantidade',`fornecedor`='$fornecedor' WHERE id_estoque = $id";
    $query = mysqli_query($conecta, $sql);

    $info = mysqli_fetch_assoc($query);

    if (!empty($info)) {
        echo "Erro na Alteração!";
        header("location:../listar_produtos.php");
    } else {
        $mensagem = "Alterado Com Sucesso";
        header("location:../listar_produtos.php");
    }
}

?>

<?php

$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "INSERT INTO categoria (categoria) values ('$categoria') ";
$query = mysqli_query($conecta, $sql);

if(!$query){
    echo "ERRO NO SERVIDOR";
} else {
    header("location:../");
}
?>

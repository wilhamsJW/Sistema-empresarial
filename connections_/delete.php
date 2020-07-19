<?php include_once 'connection.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
$query = mysqli_query($conecta, $sql);

if (!$query) {
    echo ("Error no Servidor ao Deletar!");
} else {
    header("location: ../listar_produtos.php");
}
?>

<?php include_once 'connection.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM `categoria` WHERE id_categoria = $id";
$query = mysqli_query($conecta, $sql);

if (!$query) {
    echo ("Error no Servidor ao Deletar!");
} else {
    header("location: ../Listar_categoria.php");
}

?>

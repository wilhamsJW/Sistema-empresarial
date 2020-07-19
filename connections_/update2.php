<!-- Update of the file Listar_categorias and editar_categorias -->
<?php 
include_once 'connection.php';
if(isset($_POST['id']))
{
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome_categoria = filter_input(INPUT_POST, 'nome_categoria', FILTER_SANITIZE_SPECIAL_CHARS);
    $sql = "UPDATE `categoria` SET `nome_categoria` = '$nome_categoria' WHERE id_categoria = $id ";
    $query = mysqli_query($conecta, $sql);
    $info = mysqli_fetch_assoc($query);

    if(!empty($info))
    {
        echo "Erro na Alteração!";
    } else {
        header("location:../Listar_categoria.php");
    }

}

?>
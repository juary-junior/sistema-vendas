<?php
require_once('../config/config.php');


if(isset($_GET["codigo"])) {
    
    $codigo = $_GET["codigo"];

    $result = mysqli_query($conexao, "DELETE FROM produtos WHERE prod_id = $codigo");

    if ($result) {
        echo "
        <script>
        window.location.href='../view/cadastroProdutos.php';
        </script>";
        exit();
    } else {
        echo "Erro ao excluir o produto.";
    }
}

mysqli_close();
?>
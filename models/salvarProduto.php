<?php 
    require_once('../config/config.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nome"]) && isset($_GET["valor"])) {
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $valor = str_replace(",", ".", filter_input(INPUT_GET, "valor", FILTER_SANITIZE_SPECIAL_CHARS));

        $result = mysqli_query($conexao, "INSERT INTO produtos (nome, valor) VALUES ('$nome', '$valor')");
    }
    
    header('Location: ../view/cadastroProdutos.php');
    
?>
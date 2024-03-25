<?php

session_start();
require_once('../config/config.php');


if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: login.php');
}


$logado = $_SESSION['email'];


?>





<!DOCTYPE html>
<html lang="pt-br23">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/sistema.css">
    <title>SISTEMA</title>
</head>
<body>
    <nav>
        <div>
            <a href="../models/sair.php" class= "btn btn-sair btn-danger">Sair</a>
        </div>
        <div class="button-cadastros">
            <a href="../view/cadastroProdutos.php" class="cadastro">Cadastrar Produtos</a>
            <a href="../view/cadastroCliente.php" class="cadastro">Cadastrar Cliente</a>
            <a href="../view/CadastroVendas.php" class="cadastro">Cadastrar Venda</a>
        </div>
    </nav>
    <?php 
    echo "<h1>Bem vindo <u>$logado</u></h1>";
    ?>
    <br>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick ="searchData()" class="btn btn-primary">
        
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
    </svg>
        </button>
        
    </div>
    
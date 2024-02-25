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
    <title>SISTEMA</title>
    <style>
        body {
            background: linear-gradient(to right, rgb(20, 147,220), rgb(17, 54, 71));
            color:white;
            text-align: center;
        }
        .table-bg {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }
        .caixa-tabela {
            display:flex;
            justify-content:center;
            
        }

        th {
            padding: 20px;
            
        }
        .box-search {
            display:flex;
            justify-content:center;
            gap: .1%;
        }
        .btn-sair{
            top: 15px;
            position: fixed;
            right: 20px; 
        }

        .back-sistem {
            top:15px;
            position: fixed;
            left: 20px;
            color: white;
        }
        .cadastro {
            top:75px;
            position: fixed;
            left: 350px;
            color: white;
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        .cadastro:hover {
            background-color: deepskyblue;
        }
        
    

    </style>
</head>
<body>
    <nav>
        <div>
            <a href="../models/sair.php" class= "btn btn-sair btn-danger">Sair</a>
        </div>
        <div>
            <a href="../view/cadastroVendas.php" class="cadastro">Cadastrar Venda</a>
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
    <div class ="m-5">
    <table class="caption-top text-white table-bg">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cliente</th>
                <th scope="col">Itens</th>
                <th scope="col">Data da Venda</th>
                <th scope="col">Valor Total</th>
                <th scope="col">Forma de Pagamento</th>
                <th scope="col">Quantidade de Parcelas</th>
                <th scope="col">Data de vencimento</th>
                <th scope="col">Valor das Parcelas</th>
                <th scope="col">...</th>
            </tr>
        </thead>
</table>
    </div>
<?php 

    if(isset($_POST['submit'])) {

        require_once('../config/config.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO cliente(nome,email,senha) VALUES ('$nome', '$email', '$senha')");

        header('location: login.php');
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147,220), rgb(17, 54, 71));
        }
        .box {
        
            background-color: rgba(0,0,0,0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 10px;  
        }
        .voltar {
            top:15px;
            position: fixed;
            left: 20px;
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        .voltar:hover {
            background-color: deepskyblue;
        }

    </style>
</head>
<body>
<a href="home.php" class="voltar">voltar</a>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Clientes</b></legend>
                <br>
                <div class ="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labbelInput">Nome</label>
                </div>
                <br><br>
                
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labbelInput">Email</label>
                </div>
                <br><br>
                <div class ="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labbelInput">senha</label>
                </div>
                <br><br>
            
                <input type="submit" name="submit" id="submit" required>
            </fieldset>
        </form>
    </div>
</body>
</html>
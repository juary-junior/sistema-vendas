<?php 

    if(isset($_POST['submit'])) {

        require_once('../config/config.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO vendedor(nome,email,senha) VALUES ('$nome', '$email', '$senha')");

        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/cadastroVendedor.css">
    <title>Cadastro Cliente</title>
</head>
<body>
<a href="home.php" class="voltar">voltar</a>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro Vendedor</b></legend>
                <br>
                <div class ="inputBox">
                <label for="nome" class="labbelInput">Nome : </label><input type="text" name="nome" id="nome" class="inputUser" 
                required>
                </div>
                <br><br>
                
                <div class="inputBox">
                <label for="email" class="labbelInput">Email : </label><input type="text" name="email" id="email" class="inputUser" required>
                   
                </div>
                <br><br>
                <div class ="inputBox">
                <label for="senha" class="labbelInput">Senha : </label><input type="text" name="senha" id="senha" class="inputUser" required>
                    
                </div>
                <br><br>
            
                <input type="submit" name="submit" id="submit" required>
            </fieldset>
        </form>
    </div>
</body>
</html>
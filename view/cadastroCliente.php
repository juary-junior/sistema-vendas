<?php 
    require_once('../config/config.php');

    if(isset($_POST['submit'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $result = mysqli_query($conexao, "INSERT INTO  cliente(nome,email,telefone) VALUES ('$nome', '$email', '$telefone')");

    header('Location: cadastroCliente.php');
    }

   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Clientes</title>
    <link rel="stylesheet" href="../styles/CadastroClientes.css">
</head>
<body>
    
    <a href="sistema.php">voltar</a>
        <div class="box">
            <form action="cadastroCliente.php" method="POST">
                <fieldset>
                    <legend><b>Formulário de Clientes</b></legend>
                    <br>
                    <div class ="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labbelInput">Nome Completo</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labbelInput">Email</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                        <label for="telefone" class="labbelInput">Telefone</label>
                    </div>
                    <br><br><br>
                    
                    <input type="submit" name="submit" id="submit" required>
                </fieldset>
            </form>
        </div>
</body>
</html>

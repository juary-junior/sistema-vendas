<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="../styles/login.css">
    <script src="script.js"></script>
    <title>Login</title>
    
</head>
<body>
<a href="home.php" class="voltar">voltar</a>
    <div>
        <h1>Login</h1>
        <form action="../config/testLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
    
</body>
</html>
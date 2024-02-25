<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="script.js"></script>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147,220), rgb(17, 54, 71));
        }
        div {
            background-color: rgba(0,0,0,0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 60px;
            color: white;
            border-radius: 10px;
        }
        input {
            padding: 12px;
            border: none;
            outline: none;
        }
        .inputSubmit {
            background-color: dodgerblue;
            width: 100%;
            padding: 12px;
            border-radius: 7px;
            cursor: pointer;
            font-family: Arial, Helvetica, sans-serif;
        }
        .inputSubmit:hover {
            background-color: deepskyblue;
           
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
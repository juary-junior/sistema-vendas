<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147,220), rgb(17, 54, 71));
            color: white;
            
        }
        div {
            background-color: rgba(0,0,0,0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 10px; 
        }
        
        a {
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover {
            background-color: deepskyblue;
        }
    </style>
</head>
<body>
    
    <div class="box">
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastre-se</a>
        
    </div>
</body>
</html>
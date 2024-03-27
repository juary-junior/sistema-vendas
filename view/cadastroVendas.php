
<?php 
    require_once('../config/config.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["nome"]) && isset($_GET["valor"])) {
        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $valor = str_replace(",", ".", filter_input(INPUT_GET, "valor", FILTER_SANITIZE_SPECIAL_CHARS));

        $result = mysqli_query($conexao, "INSERT INTO produtos (nome, valor) VALUES ('$nome', '$valor')");
    }
    
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/CadastroVendas.css">
</head>
<body>
<div>
    <a href="../view/sistema.php" class= "btn btn-danger" id="saida">Sair</a>
        </div>
    

<div class="main">
    <div class="container mt-3">
        <div>
            <h2>Cliente</h2>
        <input type="text" placeholder="Cliente">
        </div>
        <div class="row">
            <div class="col">
                <h2>Produtos</h2>
            </div>
        </div>
        <div class="row" id="tabela">
            <div class="col">
                <table class="table table-light table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome do produto</th>
                            <th>Valor</th>
                            <th>Enserir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = "SELECT * FROM produtos";
                        $pesquisar = mysqli_query($conexao, $result);
                        while ($linha = $pesquisar->fetch_assoc()) {
    
                            echo " <tr>
                                     <td>".$linha['prod_id']."</td>
                                     <td>".$linha['nome']."</td>
                                    <td>".$linha['valor']."</td>
                                    <td><input type='checkbox'></td>
                                    </tr>";
                        }
                        ?>
    
                    </tbody>
                </table>
            </div>
        </div>
    
    </div>
</div>
</body>
</html>

    
    
    
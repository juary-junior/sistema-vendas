
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
    <title>Cadastro Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/CadastroProduto.css">
</head>
<body>
<div>
    <a href="../view/sistema.php" class= "btn btn-danger" id="saida">Sair</a>
        </div>
    <div class="container">
        <div class="row">
            <div class="col">
            <h2> Cadastro de produtos
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="../img/produtos.jpg" alt="produto" class="img-produto">
            </div>
        <div class="col-8">
            <form method="GET" action="cadastroprodutos.php">
                <div class="mt-3 form-floating">
                    <input type="number" class="form-control" id="codigo" name="codigo" readonly>
                    <label for="codigo" class="form-label">Código</label>
                </div>
        <div class="mt-3 form-floating">
            <input type="text" class="form-control" id="nome" name="nome" required>
            <label for="nome" class="form-label">Nome do produto</label>
        </div>
        <div class="mt-3 form-floating">
            <input type="text" class="form-control" id="valor" name="valor" required>
            <label for="valor" class="form-label">Valor</label>
        </div>
        <div class="mt-3 form-floating">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-primary form-control">
                    Novo
                    </button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary form-control">
                    Salvar
                    </button>
                </div>
            </div>
        </div>
    </form>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h2>Produtos Cadastrados</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-light table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome do produto</th>
                        <th>Valor</th>
                        <th>Editar</th>
                        <th>Excluir</th>
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
                                <td></td>
                                <td><a href ='../models/delete.php?codigo=".$linha['prod_id']."' class='btn btn-primary'>
                                </td>
                                </tr>"; 
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

</div>
</body>
</html>
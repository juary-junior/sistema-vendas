<?php 

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arroz = $_POST["arroz"];
    $feijao = $_POST["feijao"];
    $macarrao = $_POST["macarrao"];
    $farinha = $_POST["farinha"];
    $carne = $_POST["carne"];
    $frango = $_POST["frango"];
}*/




?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Vendas</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147,220), rgb(17, 54, 71));
            color:white;
        }
        .box {
        
            background-color: rgba(0,0,0,0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 10px;  
            width: 900px;
            height: 800px;
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
        td {
            padding: 10px;
        }
        .tables {
            display: flex;
        }
        #tabela_exibicao {
            height: 50px;
            width: 450px;
            margin-left: 15px;
            background-color:rgba(0, 0, 0, 0.3);
            
        }
        .button_pedido {
            margin-left: 227px;
            cursor: pointer;
            padding:3px;
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 3px;
            background-color: rgba(0, 0, 0, 0.2);
        }
        .button_pedido:hover {
            background-color: deepskyblue;
            color: black;
        }
        #dados-pagamento {
            display:grid;
        }

        #forma-pagamento {
            display:flex;
            margin-right:20px;
            
        }

        #forma-pagamento label {
            margin-left:30px;
            margin-top: 15px;
        }
        #tabela-parcelas {
            padding:10px;
            
        }
        #tabela-parcelas input {
            height: 15px;
            width: 150px;
        }
        #tabela-parcelas-cor {
            margin-top:10px;
            background-color:rgba(0, 0, 0, 0.3);
        }
       
        
    </style>
</head>
<body>
<a href="sistema.php" class="voltar">voltar</a>
    <div class="box">
        <form>
            <fieldset>
                <legend><b>Cadastro de Vendas</b></legend>
                <br>
                <p>Itens:</p>
                
 <div class="tables">
     <table>
     
        <tr>
            <td id="nome_item1">Arroz</td><td id="valor_item1">R$ 5,00</td> <td><input name="qtd_item1" type="number" placeholder="UN"></td>
        </tr>
        <tr>
            <td id="nome_item2">Feijão</td><td id="valor_item2">R$ 8,00</td><td><input name="qtd_item2" type="number" placeholder="UN"></td>
        </tr>
        <tr>
            <td id="nome_item3">Macarrão</td><td id="valor_item3">R$ 3,00</td><td><input name="qtd_item3" type="number" placeholder="UN"></td>
        </tr>
        <tr>
            <td id="nome_item4">Farinha</td><td id="valor_item4">R$ 9,00</td><td><input name="qtd_item4" type="number" placeholder="UN"></td>
        </tr>
        <tr>
            <td id="nome_item5">Carne</td><td id="valor_item5">R$ 30,00</td><td><input name="qtd_item5" type="number" placeholder="UN"></td>
        </tr>
        <tr>
            <td id="nome_item6">Frango</td><td id="valor_item6">R$ 20,00</td><td><input name="qtd_item6" type="number" placeholder="UN"></td><td>
        </tr>
     </table>
     
     <table id="tabela_exibicao">
                <tr>
                    <td class="td1">item</td>
                    <td class="td2">Quantidade</td>
                    <td class="td3">valor</td>
                </tr>
            </table>
 </div>
 <button onclick="enviarTodosDados()">Adicionar Produtos</button>
<br>
<div id="total1">
    <br>
        <td>Valor Total da Compra</td>
            <input type="number" id="total" placeholder="total da compra">
        </div>
            <br><br>
            <label for="data_venda">Data da Venda</label>
            <input type="date" name="data_venda" id="data_venda" required>
            
                <div id="dados-pagamento">
                    <div id="forma-pagamento">
                        <p>Forma de pagamento:</p>
                            <label for="pix">Pix</label>
                            <input type="radio" name="forma_de_pagamento" id="pix" value="pix" required>
                    
                            <label for="Cartao">Cartão</label>
                            <input type="radio" name="forma_de_pagamento" id="cartao" value="cartao" required>
                    
                            <label for="boleto">Boleto</label>
                            <input type="radio" name="forma_de_pagamento" id="boleto" value="boleto" required>
                    </div>
                    

                <div id="tabela-parcelas">
                <td class="">Quantidade de parcelas</td>
                    <input  type="number">
                    <table id="tabela-parcelas-cor">
                    <tr>
                    
                    <td class="">parcelas</td>
                    <td class="">Data de vencimento</td>
                    <td class="">valor da Parcela</td>
                    </tr>
                    </table>
                </div>
                </div>
                    
            
                <br><br>
                <input type="submit" name="submit" id="submit" required>

                
            </fieldset>
        </form>
    </div>
    
</body>
<script>

function enviarTodosDados() {
    // Seleciona a tabela de produtos
    var tabelaProdutos = document.querySelector('.tables table');

    // Seleciona a tabela de exibição
    var tabelaExibicao = document.getElementById('tabela_exibicao');

    var totalValor = 0;
    

    // Para cada linha da tabela de produtos, exceto a primeira (que contém os cabeçalhos)
    for (var i = 0; i < tabelaProdutos.rows.length; i++) {
        // Obtém o nome, a quantidade e o valor de cada item
        var nomeItem = tabelaProdutos.rows[i].cells[0].innerText;
        var quantidade = tabelaProdutos.rows[i].querySelector('input[type="number"]').value;
        var valor = parseFloat(tabelaProdutos.rows[i].cells[1].innerText.replace('R$ ', ''));

        if(quantidade > 0) {

        

        // Calcula o valor total para este item
        var valorTotalProduto = valor * quantidade;

        totalValor += valorTotalProduto;

        // Cria uma nova linha na tabela de exibição
        var newRow = tabelaExibicao.insertRow();



        // Adiciona as células com os dados do item à nova linha
        newRow.insertCell(0).innerText = nomeItem;
        newRow.insertCell(1).innerText = quantidade;
        newRow.insertCell(2).innerText = 'R$ ' + valorTotalProduto.toFixed(2); // Formata o valor total com duas casas decimais
       
        var deleteButton = document.createElement('button');
            deleteButton.innerText = 'Excluir';
            deleteButton.onclick = function() {
                // Obtém o valor total do item a ser excluído
                var valorTotalExcluido = parseFloat(this.parentNode.previousSibling.innerText.replace('R$ ', ''));
                // Subtrai o valor total do item excluído do total do valor de todos os itens
                totalValor -= valorTotalExcluido;
                // Atualiza o valor do input com o ID "total" para o novo total do valor de todos os itens
                document.getElementById('total').value = totalValor.toFixed(2);
                // Remove a linha correspondente quando o botão de exclusão é clicado
                tabelaExibicao.deleteRow(this.parentNode.parentNode.rowIndex);
            };
            newRow.insertCell(3).appendChild(deleteButton);
        } 

    }
    document.getElementById('total').value = totalValor.toFixed(2);
}





</script>

</html>
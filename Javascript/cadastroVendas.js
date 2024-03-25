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

function calcularParcelas() {
  // pega a quantidade de parcelas 
  var quantidadeParcelas = parseInt(document.getElementById('input-qtd-parcelas').value);
  
  // pega o valor total da soma dos itens 
  var valorTotal = parseFloat(document.getElementById('total').value);

  // pega a data de hoje
  var dataAtual = new Date();
  // pega o corpo da tabela 
  var tableBody = document.querySelector('#tabela-parcelas tbody');
  
  // Calcula a diferença de um mês em milissegundos
  var umMes = 30 * 24 * 60 * 60 * 1000;
  
  // Calcula o valor de cada parcela
  var valorParcela = valorTotal / quantidadeParcelas;

  // Loop para adicionar as linhas na tabela
  for (var i = 0; i < quantidadeParcelas; i++) {
    // Calcula a data de vencimento para esta parcela
    var dataVencimento = new Date(dataAtual.getTime() + (umMes * (i + 1)));
    var dia = dataVencimento.getDate();
    var mes = dataVencimento.getMonth() + 1;
    var ano = dataVencimento.getFullYear();
    var dataFormatada = dia + '/' + mes + '/' + ano;

    // Cria a linha da tabela
    var newRow = tableBody.insertRow();
    // Insere a quantidade de parcelas na primeira coluna
    var cell1 = newRow.insertCell(0);
    cell1.appendChild(document.createTextNode(i + 1));
    // Insere a data de vencimento na segunda coluna
    var cell2 = newRow.insertCell(1);
    cell2.appendChild(document.createTextNode(dataFormatada));
    // Insere o valor da parcela na terceira coluna
    var cell3 = newRow.insertCell(2);
    cell3.appendChild(document.createTextNode(valorParcela.toFixed(2)));
  }

  enviarParcelasParaPHP(quantidadeParcelas, valorParcela);
}





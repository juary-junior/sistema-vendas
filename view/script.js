function enviarDados(nomeItem) {

    var quantidade = document.querySelector('input[name="qtd_' + nomeItem + '"]').value;
    
    var tdElement = document.getElementById('valor_' + nomeItem);
    var valor = parseFloat(tdElement.innerText.replace('R$ ', ''));
    var tabelaExibicao = document.getElementById('tabela_exibicao');
    var novalinha = tabelaExibicao.insertRow();
    var celulaNome = novalinha.insertCell(0);
    var celulaQuantidade = novalinha.insertCell(1);
    var celulaValor = novalinha.insertCell(2);
    
    var valortotal = valor * quantidade;
    
    
    
    celulaNome.innerHTML = nomeItem;
    celulaQuantidade.innerHTML = quantidade;
    celulaValor.innerHTML = valortotal; }
    
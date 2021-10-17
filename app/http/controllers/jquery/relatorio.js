$("#gera_relatorio").click(function() {
    var pesquisa_geral = 'pesquisa_geral';
    var chave_pesquisa = $("#chavePesquisa").val();
    if(chave_pesquisa == ''){
        chave_pesquisa = '%'; // Para o SQL retornar todos.
    }

    var tipo_pesquisa = $("#tipo_pesquisa").val();

    $.post('/app/http/controllers/Relatorio_Controller.php', {
        pesquisa_geral: pesquisa_geral,
        chave_pesquisa: chave_pesquisa,
        tipo_pesquisa: tipo_pesquisa
    }, function(respostaArray){
          var resposta = 0;
          console.log(respostaArray)
          if(typeof respostaArray != 'undefined'){
            resposta = JSON.parse(respostaArray);
          }
          var table;
          if(resposta.length > 1){
            table = `        
            <table class="table">
                <thead>
                    <tr>
                        <th>ID_Usuario</th>
                        <th>Nome</th>
                        <th>Entrada_Saida</th>
                        <th>Observação</th>
                        <th>Dia e Hora</th>
                        <th style="width: 36px;"></th>
                    </tr>
                </thead>
                <tbody>`;
                        for(let i=0; i<resposta.length; i++){
                            table += ` 
                            <tr>
                                <td>${resposta[i].ID_Usuario}</td>
                                <td>${resposta[i].Nome}</td>
                                <td>${resposta[i].Entrada_Saida}</td>
                                <td>${resposta[i].Observacao}</td>
                                <td>${resposta[i].Dia_e_Hora}</td>
                            </tr>`;
                        }
                    table += `
                </tbody>
            </table>
            `;
          }else{
              table = '';
          }
          
            document.getElementById("relatorio").innerHTML = table;
            });
});
function set_entrada(entrada_saida){
    var observacao = document.getElementById('observacao').value;
    if( typeof observacao == 'undefined' ) {
        observacao = '';
    }
    Swal.fire({
        title: 'Deseja lançar ponto de entrada?',
        showDenyButton: true,
        confirmButtonText: `Sim`,
        denyButtonText: `Cancelar`,
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire('Marcação lançada!', '', 'success');
          
          $.post('/app/http/controllers/Sistema_Ponto_Controller.php', {
            entrada_saida: entrada_saida,
            observacao: observacao
          }, function(resposta){
              console.log(resposta)
          });
    
            var load = setInterval(function () {
                document.location.reload();
            }, 2000);     
        } else if (result.isDenied) {
          Swal.fire('Ponto não lançado', '', 'info')
        }
      })
}
$("#cadastrar_novo_funcionario").click(function() {
  var cadastrar = 'cadastrar'; //action para o cadastro no controller
  if($("#nome").val()){
    var nome = $("#nome").val();
  }else{
    Swal.fire({
      icon: 'error',
      title: 'Campo nome obrigatório não preenchido.',
      text: 'Preencha todos campos obigatórios'
    })
    return 0;
  }

  if($("#email").val()){
    var email = $("#email").val();
  }else{
    Swal.fire({
      icon: 'error',
      title: 'Campo e-mail obrigatório não preenchido.',
      text: 'Preencha todos campos obigatórios'
    })
    return 0;
  }

  if($("#senha").val()){
    var senha = $("#senha").val();
  }else{
    Swal.fire({
      icon: 'error',
      title: 'Campo senha obrigatório não preenchido.',
      text: 'Preencha todos campos obigatórios'
    })
    return 0;
  }

  if($("#tipo_acesso").val()){
    var tipo_acesso = $("#tipo_acesso").val();
  }else{
    Swal.fire({
      icon: 'error',
      title: 'Campo tipo de acesso obrigatório não preenchido.',
      text: 'Preencha todos campos obigatórios'
    })
    return 0;
  }

  if($("#cpf").val()){
    var cpf = $("#cpf").val();
  }else{
    Swal.fire({
      icon: 'error',
      title: 'Campo CPF obrigatório não preenchido.',
      text: 'Preencha todos campos obigatórios'
    })
    return 0;
  }

  if($("#telefone").val()){
    var telefone = $("#telefone").val();
  }else{
    Swal.fire({
      icon: 'error',
      title: 'Campo Telefone obrigatório não preenchido.',
      text: 'Preencha todos campos obigatórios'
    })
    return 0;
  }

  if($("#data_admissao").val()){
    var data_admissao = $("#data_admissao").val();
  }else{
    Swal.fire({
      icon: 'error',
      title: 'Campo Data de Admissão obrigatório não preenchido.',
      text: 'Preencha todos campos obigatórios'
    })
    return 0;
  }
  Swal.fire({
    title: 'Deseja cadastrar o funcionário?',
    showDenyButton: true,
    confirmButtonText: `Sim`,
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('Funcionário cadastrado!', '', 'success');
      
      $.post('/app/http/controllers/Cadastro_Funcionario_Controller.php', {
        cadastrar: cadastrar,
        nome: nome,
        email: email,
        senha: senha,
        tipo_acesso: tipo_acesso,
        cpf: cpf,
        telefone: telefone,
        data_admissao: data_admissao

      }, function(resposta){
          console.log(resposta)
          var load = setInterval(function () {
            document.location.reload();
          }, 3000);  
      });   
    } else if (result.isDenied) {
      Swal.fire('Usuário não cadastrado', '', 'info')
    }
  })

});

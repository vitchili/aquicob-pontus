<?php 
require_once('../inc/header.html');
require_once('../inc/nav-common.php');
require_once('../app/http/controllers/Cadastro_Funcionario_Controller.php');
$lista_funcionarios = new Cadastro_Funcionario_Controller;
$dados = array("action" => "todos");
$funcionarios = $lista_funcionarios->buscar($dados);
?>
    <div id="blocoBody">
        <section class="white-section">
            <div id="forum">    
                <div class="bloco-titulo">
                    <h1 class="titulo-card">Gestão</h1>
                    <div class="setinha-toggle" style="margin: auto 5px 10px auto"> 
                        <button class="btn btn-action  copy-content" type="button" data-html="true" data-original-title="" data-toggle="modal" data-target="#bd-example-modal-lg"><i class="fas fa-plus-circle"></i>&nbsp;Novo Funcionário</button>
                    </div>
                </div>
                <div class="bloco-geral">    
                    <div class="sub-bloco">
                        <i class="fas fa-cog fa-2x icon-left"></i>
                    </div>
                    <div class="sub-bloco">
                    <h2 class="sub-titulo-card">Gestão de Funcionários</h2>
                        <p class="p-card">Registre aqui o seu ponto</p>
                    </div>
                </div>
            </div>
        </section>
            <?php require_once('./components/modal_cadastro_novo_funcionario.php'); ?>
        <section class="white-section">
            <?php require_once('./components/lista_funcionarios.php'); ?>
        </section>
    </div>
    <script type="text/javascript" src="../assets/js/common.js"></script>
    <script type="text/javascript" src="../app/http/controllers/jquery/gestao.js"></script>
</body>
</html>
<?php 
require_once('../inc/header.html');
require_once('../inc/nav-common.php');
?>
    <div id="blocoBody">
        <section class="white-section">
            <div id="forum">    
                <div class="bloco-titulo">
                    <h1 class="titulo-card">Registro de Ponto</h1>
                </div>
                <div class="bloco-geral">    
                    <div class="sub-bloco">
                        <i class="far fa-clock fa-2x icon-left"></i>
                    </div>
                    <div class="sub-bloco">
                    <input class="sub-titulo-card relogio" type="text" id="rel"/>
                        <p class="p-card">Registre aqui o seu ponto</p>
                    </div>
                    
                </div>
            </div>
        </section>
        <div class="botoes-center"> 
            <input class="form-control-100" type="text" id="observacao" name="observacao" placeholder="Observaçao opcional">
            <button class="btn btn-action get-in  copy-content" type="button" data-html="true" data-original-title="" onclick="set_entrada('E');"><i class="fas fa-sign-in-alt"></i>&nbsp;Entrada</button>
            <button class="btn btn-action  get-out copy-content" type="button" data-html="true" data-original-title="" onclick="set_entrada('S');"><i class="fas fa-sign-out-alt"></i>&nbsp;Saída</button>
        </div>
        <section class="white-section">
            <?php include('./components/pontos_dia_corrente.php'); ?>
        </section>
    </div>
    <script type="text/javascript" src="../assets/js/common.js"></script>
    <script type="text/javascript" src="../assets/js/relogio.js"></script>
    <script type="text/javascript" src="../app/http/controllers/jquery/sistema_ponto.js"></script>
</body>
</html>
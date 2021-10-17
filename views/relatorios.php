<?php 
require_once('../inc/header.html');
require_once('../inc/nav-common.php');
?>
    <div id="blocoBody">
        <section class="white-section">
            <div id="forum">    
                <div class="bloco-titulo">
                    <h1 class="titulo-card">Relatórios</h1>
                </div>
                <div class="bloco-geral">    
                    <div class="sub-bloco">
                        <i class="far fa-file-alt fa-2x icon-left"></i>
                    </div>
                    <div class="sub-bloco">
                        <h2 class="sub-titulo-card">Relatórios de Pontos</h2>
                        <p class="p-card">Busque por relatórios gerais ou filtrados.</p>
                    </div>
                    
                </div>
            </div>
        </section>
        <div class="botoes-center"> 
            <input class="form-control-100" type="text" id="chavePesquisa" name="chavePesquisa" placeholder="Pesquisar por filtro">
            <select class="btn btn-outline-primary copy-content" name="tipo_pesquisa" id="tipo_pesquisa">
                <option value="nome" selected>Nome do Funcionário</option>
                <option value="data_admissao">Data de Pesquisa</option>
            </select>
            <button class="btn btn-outline-primary copy-content" type="button" data-html="true" data-original-title="" id="gera_relatorio"><i class="fas fa-filter"></i>&nbsp;Pesquisar</button>
        </div>
        <section class="white-section">
            <div id="relatorio"></div>
        </section>
    </div>
    <script type="text/javascript" src="../assets/js/common.js"></script>
    <script type="text/javascript" src="../app/http/controllers/jquery/relatorio.js"></script>
    <script src="https://unpkg.com/ag-grid-community/dist/ag-grid-community.min.js"></script>
</body>
</html>
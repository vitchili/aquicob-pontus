<?php session_start(); ?>
<header class="cabecalho">
    <div class="logo">
        <img src="/aquicob-pontus/assets/images/logo.svg" id="logo-login-header" alt="logo-login-pontus"/>
    </div>
</header>
<header>
    <div class="verticalMenu" id="menuVertical">
        <div class="itensVerticalGroup">
            <div class="itemVerticalMenu" id="botaoEstender">
                <a href="#" onclick="estenderMenu()">
                    <i class="fas fa-angle-double-right"></i>
                </a>
            </div>
            <hr/>
            <?php
            if($_SESSION['tipo_acesso_usuario'] == 'C'):?>
                <div class="itemVerticalMenu">
                    <span class="itemHide" id="itemHide1">Registro Ponto</span>
                    <a href="/aquicob-pontus/views/sistema_ponto.php">     
                        <i class="fas fa-clock"></i>
                    </a>
                </div>
            <?php endif; ?>
            <div class="itemVerticalMenu">
                <span class="itemHide" id="itemHide2">Relatórios</span>
                <a href="/aquicob-pontus/views/relatorios.php">
                    <i class="fas fa-file-alt"></i>
                </a>
            </div>
            <?php
            if($_SESSION['tipo_acesso_usuario'] == 'G'):?>
                <div class="itemVerticalMenu">
                    <span class="itemHide" id="itemHide4">Gestão</span>
                    <a href="/aquicob-pontus/views/gestao.php">
                        <i class="fas fa-cog"></i>
                    </a>
                </div>
            <?php endif; ?>
            <hr/>
            <div class="itemVerticalMenu">
                <span class="itemHide" id="itemHide3">Sair</span>
                <a href="/aquicob-pontus/sair.php">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </div>
    </div>
</header>
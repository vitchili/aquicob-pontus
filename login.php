<?php include(__DIR__ . '/inc/header.html'); ?>
<body id="LoginForm">
    <br/><br/>
    <div class="container">
        <div class="login-form">  
            <img src="assets/images/logo.svg" id="logo-login">    
            <div class="main-div">
                <img src="assets/images/logo-aquicob.png" id="logo-login-aquicob">  
                    <form id="Login" method="POST" action="app/http/controllers/auth/autenticacao_login.php">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Senha">
                        </div>
                        <div class="forgot">
                            <a href="#" onclick="alertEsqueciMinhaSenha()">Esqueci a senha</a>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>&nbsp; Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
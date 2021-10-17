<?php
    session_start();
    $_SESSION['logged'] = false;
    if(!$_SESSION['logged']){
        if(isset($_POST['email'])){
            $userPrint = $_POST['email']; 
        }else{
            $userPrint = NULL;
        }
        
        if(isset($_POST['senha'])){
            $passwordPrint = $_POST['senha'];
        }else{
            $passwordPrint = NULL;
        }
        
        if($userPrint != NULL || $passwordPrint != NULL){
            /*se o email OU a senha nao forem nulos, conecta ao banco e faz a verificacao*/
            require_once '../../../models/dao/DAO_action.php';
            $senhaCript = md5($passwordPrint);
            $sql = 
            "SELECT id, nome, email, senha, tipo_acesso, status FROM tb_autenticacao
            WHERE email = '$userPrint'
            AND senha = '$senhaCript';
            ";
            $dao = new DAO_action();
            $rows = $dao->select($sql);

            if(!empty($rows)){
                for($i=0;$i<count($rows);$i++){
                    if($userPrint == $rows[$i]['email'] && $senhaCript == $rows[$i]['senha'] && $rows[$i]['status'] == '1'){ // checa compatibilidade de user e senha e cria as sessions
                        $_SESSION['id_usuario'] = $rows[$i]['id'];
                        $_SESSION['nome_usuario'] = $rows[$i]['nome'];
                        $_SESSION['email_usuario'] = $rows[$i]['email'];
                        $_SESSION['senha_usuario'] = $rows[$i]['senha'];
                        $_SESSION['tipo_acesso_usuario'] = $rows[$i]['tipo_acesso'];
                        $_SESSION['logged'] = true;
                        if($_SESSION['tipo_acesso_usuario'] == 'C'){
                            header('location: ../../../../views/sistema_ponto.php');
                        }else{
                            header('location: ../../../../views/gestao.php');
                        }
                    }
                }
            }
        }
        echo "
        <script type=\"text/javascript\">
            alert('Usuário e/ou senha incorretos.');
            window.history.go(-1);
        </script>
        ";
    }    
?>
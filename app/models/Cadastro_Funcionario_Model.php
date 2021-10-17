<?php
require_once(__DIR__ . '/dao/DAO_interface.php');
require_once(__DIR__ . '/dao/DAO_action.php');

class Cadastro_Funcionario_Model implements DAO_interface{
    function __construct(){

    }
    function buscar($dados){
        if($dados['action'] == 'todos'){
            $sql = "SELECT aut.id, aut.nome, aut.email, tip.descricao AS tipo_acesso, aut.cpf, aut.telefone, aut.data_admissao FROM tb_autenticacao aut 
            JOIN tb_tipo_acesso tip ON tip.sigla = aut.tipo_acesso;";
            $action = new DAO_action;
            $lista = $action->select($sql);
            return $lista;
        }
    }
    function inserir($dados){
        $senhaEncrypt = md5($dados['senha']);
        $sql = "INSERT INTO tb_autenticacao (nome, email, senha, tipo_acesso, cpf, telefone, data_admissao, ativo_inativo, status) 
        VALUES ('".$dados['nome']."', '".$dados['email']."', '".$senhaEncrypt."', '".$dados['tipo_acesso']."', '".$dados['cpf']."', '".$dados['telefone']."', '".$dados['data_admissao']."', '1', '1');";
        $action = new DAO_action;
        $dao = $action->insert($sql);
    }
    function editar($dados){
        
    }
    function excluir($dados){
        
    }
}

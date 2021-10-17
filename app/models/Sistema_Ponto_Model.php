<?php
require_once(__DIR__ . '/dao/DAO_interface.php');
require_once(__DIR__ . '/dao/DAO_action.php');

class Sistema_Ponto_Model implements DAO_interface{
    function __construct(){

    }
    function buscar($dados){
        if($dados['action'] == 'pontos_dia_corrente'){
            $sql = "SELECT * FROM tb_marcacao_ponto WHERE usuario = '".$dados['id_usuario']."' AND DAY(cadastrado_em) = DAY(NOW());";
        }
        $action = new DAO_action;
        $resultado = $action->select($sql);
        return $resultado;
    }
    function inserir($dados){
        $sql = "INSERT INTO tb_marcacao_ponto (usuario, entrada_saida, observacao, cadastrado_em, status) VALUES ('".$dados['id_usuario']."', '".$dados['entrada_saida']."', '".$dados['observacao']."', NOW(), '1');";
        $action = new DAO_action;
        $dao = $action->insert($sql);
    }
    function editar($dados){
        
    }
    function excluir($dados){
        
    }
}

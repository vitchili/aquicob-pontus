<?php
require_once(__DIR__ . '/dao/DAO_interface.php');
require_once(__DIR__ . '/dao/DAO_action.php');

class Relatorio_Model implements DAO_interface{
    function __construct(){

    }
    function buscar($dados){
        if($dados['action'] == 'pesquisa_geral' && $dados['tipo_pesquisa'] == 'nome'){
            $sql = "SELECT aut.id AS ID_Usuario, aut.nome AS Nome, es.descricao AS Entrada_Saida, mar.observacao AS Observacao, mar.cadastrado_em AS Dia_e_Hora
            FROM tb_autenticacao aut
            JOIN tb_marcacao_ponto mar ON mar.`usuario` = aut.`id`
            JOIN tb_tipo_entrada_saida es ON es.`sigla` = mar.`entrada_saida`
            WHERE aut.nome LIKE ('".$dados['chave_pesquisa']."');";
            $action = new DAO_action;
            $lista = $action->select($sql);
        }else if($dados['action'] == 'pesquisa_geral' && $dados['tipo_pesquisa'] == 'data_admissao'){
            $sql = "SELECT aut.id AS ID_Usuario, aut.nome AS Nome, es.descricao AS Entrada_Saida, mar.observacao AS Observacao, mar.cadastrado_em AS Dia_e_Hora
            FROM tb_autenticacao aut
            JOIN tb_marcacao_ponto mar ON mar.`usuario` = aut.`id`
            JOIN tb_tipo_entrada_saida es ON es.`sigla` = mar.`entrada_saida`
            WHERE DATE(mar.`cadastrado_em`) = '".$dados['chave_pesquisa']."';";
            $action = new DAO_action;
            $lista = $action->select($sql);
        }
        return $lista;
    }
    function inserir($dados){

    }
    function editar($dados){
        
    }
    function excluir($dados){
        
    }
}

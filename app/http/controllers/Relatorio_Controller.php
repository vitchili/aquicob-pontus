<?php
require_once(__DIR__ . '/../../models/Relatorio_Model.php');
require_once(__DIR__ . '/../../models/dao/DAO_interface.php');

class Relatorio_Controller implements DAO_interface{
    function __construct(){

    }
    function buscar($dados){
        $get_relatorio = new Relatorio_Model;
        $relatorio = $get_relatorio->buscar($dados);
        return $relatorio;
    }
    function inserir($dados){
        //Nao implementado para esse teste. Mas o fluxo de funcoes para o insert seria aqui
    }
    function editar($dados){
        //Nao implementado para esse teste. Mas o fluxo de funcoes para o update seria aqui
    }
    function excluir($dados){
        //Nao implementado para esse teste. Mas o fluxo de funcoes para o delete seria aqui
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pesquisa_geral'])) {
    session_start();
    $chave_pesquisa = $_POST['chave_pesquisa'];
    $tipo_pesquisa = $_POST['tipo_pesquisa'];
    $action = $_POST['pesquisa_geral'];
    $dados = array("chave_pesquisa" => $chave_pesquisa, "tipo_pesquisa" => $tipo_pesquisa, "action" => $action);
    $get_relatorio = new Relatorio_Controller;
    $relatorio = $get_relatorio->buscar($dados);
    echo json_encode($relatorio);   
}


<?php
require_once(__DIR__ . '/../../models/Sistema_Ponto_Model.php');
require_once(__DIR__ . '/../../models/dao/DAO_interface.php');

class Sistema_Ponto_Controller implements DAO_interface{
    function __construct(){

    }
    function buscar($dados){
        $get_pontos = new Sistema_Ponto_Model;
        $marcacoes = $get_pontos->buscar($dados);
        return $marcacoes;
    }
    function inserir($dados){
        $novo_ponto = new Sistema_Ponto_Model;
        $ponto = $novo_ponto->inserir($dados);
    }
    function editar($dados){
        //Nao implementado para esse teste. Mas o fluxo de funcoes para o update seria aqui
    }
    function excluir($dados){
        //Nao implementado para esse teste. Mas o fluxo de funcoes para o delete seria aqui
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['entrada_saida'])) {
    session_start();
    $entrada_saida = $_POST['entrada_saida'];
    $observacao = $_POST['observacao'];
    $dados = array("entrada_saida" => $entrada_saida, "observacao" => $observacao, "id_usuario" => $_SESSION['id_usuario']);
    $novo_ponto = new Sistema_Ponto_Controller;
    $ponto = $novo_ponto->inserir($dados);
    echo json_encode($dados);   
}


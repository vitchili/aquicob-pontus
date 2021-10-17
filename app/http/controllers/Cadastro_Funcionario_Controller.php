<?php
require_once(__DIR__ . '/../../models/Cadastro_Funcionario_Model.php');
require_once(__DIR__ . '/../../models/dao/DAO_interface.php');

class Cadastro_Funcionario_Controller implements DAO_interface{
    function __construct(){

    }
    function buscar($dados){
        $get_funcionarios = new Cadastro_Funcionario_Model;
        $funcionarios = $get_funcionarios->buscar($dados);
        return $funcionarios;
    }
    function inserir($dados){
        $novo_funcionario = new Cadastro_Funcionario_Model;
        $novo_funcionario->inserir($dados);
    }
    function editar($dados){
        //Nao implementado para esse teste. Mas o fluxo de funcoes para o update seria aqui.
    }
    function excluir($dados){
        //Nao implementado para esse teste. Mas o fluxo de funcoes para o delete seria aqui.
    }
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cadastrar'])) {
    session_start();
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo_acesso = $_POST['tipo_acesso'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $data_admissao = $_POST['data_admissao'];

    $dados = array("nome" => $nome, "email" => $email, "senha" => $senha,  "tipo_acesso" => $tipo_acesso, "cpf" => $cpf, "telefone" => $telefone, "data_admissao" => $data_admissao);
    $novo_funcionario = new Cadastro_Funcionario_Controller;
    $novo_funcionario->inserir($dados);
    echo json_encode($dados);   
}


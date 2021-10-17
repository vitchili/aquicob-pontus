<?php
interface DAO_interface {
    /*Lido com a interface DAO em linguagens interpretadas como um contrato. 
    Assim garanto que todos meus controllers e models desse sisteminha respeitem essas quatro funcoes imprescindiveis*/
     
    public function buscar($key);
    public function inserir($dados);
    public function editar($dados);
    public function excluir($id);
}
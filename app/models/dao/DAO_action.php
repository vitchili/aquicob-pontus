<?php
require_once(__DIR__ . '/../../../database/connection.php');
class DAO_action{
    function __construct(){
    }
    
    function select($sql){ 
        try{
            $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
            $PDO->exec("set names utf8");
            $result = $PDO->query($sql);
            $respostas = $result->fetchAll( PDO::FETCH_ASSOC );
            return $respostas;
        }
        catch ( PDOException $e ){
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
    }
    function insert($sql){
        try {
            $conn = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("set names utf8");
            $conn->exec($sql);
            
        }catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
          
          $conn = null;
    } 
    function update($sql){
        try {
            $conn = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec($sql);
            
        }catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
          
          $conn = null;
    }
}
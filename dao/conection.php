<?php

 Class Conexao{
    private $host = 'localhost';
    private $namedb = 'crudtabela';
    private $user = 'root';
    private $pass = '';

    public function conectar(){
        try{

            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->namedb",
                    "$this->user",
                    "$this->pass"
            );
            return $conexao;

        }catch(PDOException $e){
            echo '<p>'.$e->getMessage().'</p>';
        }
    }
 }


?>
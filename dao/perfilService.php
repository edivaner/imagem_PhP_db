<?php

class PerfilService{
    private $conexao;
    private $perfil;

    public function __construct(Conexao $conexao, Perfil $perfil){
        $this->conexao = $conexao->conectar();
        $this->perfil = $perfil;
    }

    public function inserir(){
        $query = "insert into perfil (nome, sobrenome, data, foto)values(:nome,:sobrenome,:data,:foto)";

        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $this->perfil->__get('nome'));

        $stmt->bindValue(':sobrenome', $this->perfil->__get('sobrenome'));

        $stmt->bindValue(':data', $this->perfil->__get('data'));

        $stmt->bindValue(':foto', $this->perfil->__get('foto'));

        $stmt->execute();
         
    }

    public function recuperar(){
        $query = "select id, nome, sobrenome, data, foto FROM perfil";

        $stmt= $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function atualizar(){
        
    }

    public function remover(){
        $query = "delete FROM perfil WHERE id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(":id", $this->perfil->__get('id'));
        $stmt->execute();
    }
}

?>
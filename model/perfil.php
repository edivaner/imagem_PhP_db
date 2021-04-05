<?php

    Class Perfil{
        private $id;
        private $nome;
        private $sobrenome;
        private $data;
        private $foto;

        public function __get($atributo){
            return $this->$atributo;
        }

        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
    }

?>
<?php
    class Humano {
    public $NomeHumano;
    public $Idade;
    public $Endereco;
    public $Contato;

        public function __Construct($Nome, $Idade, $Endereco, $Contato) {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Endereco = $Endereco;
        $this->Cor = $Contato;
        }

        public function Falar(){
        echo "eu sou um animal \n";
        }

    }
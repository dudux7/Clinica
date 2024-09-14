<?php
    class Humano {
    public $NomeHumano;
    public $Idade;
    public $Endereco;
    public $Contato;

        public function __Construct($NomeHumano, $Idade, $Endereco, $Contato) {
        $this->NomeHumano = $NomeHumano;
        $this->Idade = $Idade;
        $this->Endereco = $Endereco;
        $this->Contato = $Contato;
        }

        public function getNome() {
            return $this->NomeHumano;

        }
    }
    
<?php

    require_once "Humano.php";

class Animal {
    public $NomeAnimal;
    public $Raca;
    public $QtdPatas;
    public $Cor;
    public $Peso;
    public $Tamanho;
    protected $Dono;

        public function __Construct($NomeAnimal, $Raca, $QtdPatas, $Cor, $Peso, $Tamanho, $Dono) {
            $this->NomeAnimal = $NomeAnimal;
            $this->Raca = $Raca;
            $this->QtdPatas = $QtdPatas;
            $this->Cor = $Cor;
            $this->Peso = $Peso;
            $this->Tamanho = $Tamanho;
            $this->Dono = $Dono;
        }

        public function GetNomeDono() {
            return $this->Dono->GetNome();
        }
        public function Falar(){
            echo "eu sou um animal \n";
        }
        public function apresentar() {
            echo "{$this->NomeAnimal}, pertence ao Cliente {$this->getNomeDono()} \n";
            echo "FICHA TÉCNICA / \n";
            echo "Raça: {$this->Raca} \n";
            echo "Quantidade de Patas: {$this->QtdPatas} \n";
            echo "Cor: {$this->Cor} \n";
            echo "Peso: {$this->Peso} KG \n";
            echo "Tamanho: {$this->Tamanho} M\n";
        }

    }

?>
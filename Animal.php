<?php
class Animal {
    public $NomeAnimal;
    public $Raca;
    public $QtdPatas;
    public $Cor;
    public $Peso;
    public $Tamanho;

        public function __Construct($NomeAnimal, $Raca, $QtdPatas, $Cor, $Peso, $Tamanho) {
            $this->NomeAnimal = $NomeAnimal;
            $this->Raca = $Raca;
            $this->QtdPatas = $QtdPatas;
            $this->Cor = $Cor;
            $this->Peso = $Peso;
            $this->Tamanho = $Tamanho;
        }

        public function Falar(){
            echo "eu sou um animal \n";
        }

}



?>
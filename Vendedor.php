<?php 
    require_once "Funcionario.php";

    class Vendedor extends Funcionario {
        public $Comissão = 900;

        public function Salario() {
            $this->SalarioFinal = $this->SalarioBase + $this->Comissão;
            echo "O salario base é: " . $this->SalarioFinal . "\n";
        }
    }
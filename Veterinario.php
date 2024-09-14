<?php 
    require_once "Funcionario.php";
    class Veterinario extends Funcionario {

            public $Bonificacao = 4000;
            public function Salario() {
                $this->SalarioFinal = $this->SalarioBase + $this->Bonificacao;
                echo "O salario base é: " . $this->SalarioFinal . "\n";
            }
            
        }
        
    ?>
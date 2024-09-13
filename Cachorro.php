<?php 
    require_once "Animal.php";
    require_once "Cliente.php";
    require_once "Humano.php";
    class Cachorro extends Animal {
        public function Falar(){
            echo "Cachorro: AuAu" . "\n";
        }
    
    }
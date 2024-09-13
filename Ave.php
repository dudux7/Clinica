<?php 
    require_once "Animal.php";
    require_once "Cliente.php";
    require_once "Humano.php";
    class Ave extends Animal {
        public function Falar(){
            echo "Ave: Loro quer biscoito" . "\n";

        }
    
    }
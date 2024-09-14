<?php
    Class Estoque {
        public $Produto;
        public $Preco;
        public $Qtd;

        public function __construct($Produto, $preco, $Qtd) {
            $this->Produto = $Produto;
            $this->Preco = $preco;
            $this->Qtd = $Qtd;
        }

        public function ListaProduto() {
            return "{$this->Produto} - Preço: R$ {$this->Preco}  \  Quantidade Restante: {$this->Qtd} \n";
        }
    }
    

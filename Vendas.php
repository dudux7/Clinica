<?php
require_once "Estoque.php";
require_once "Cliente.php";


class Vendas {
    public $cliente;
    public $Produtos = [];
    public $ValorTotal = 0;


    public function __construct($cliente) {
        $this->cliente = $cliente;
    }

    public function adicionarProduto(Estoque $Produto, $Quantidade) {
        $this->Produtos[] = [$Produto, $Quantidade];
        $this->ValorTotal += $Produto->Preco * $Quantidade;
    }

    public function finalizarCompra() {
        echo "Compra finalizada com sucesso!\n";
        echo "Produtos:\n";
        foreach ($this->Produtos as [$Produto, $quantidade]) {
            echo "{$Produto->Produto} - Quantidade: $quantidade - Preço Unitário: R$ {$Produto->Preco}\n";
        }
        echo "Valor Total: R$ {$this->ValorTotal}\n";
    }
}

<?php
require_once "Produto.php";
require_once "Cliente.php";

class Vendas {
    public $Cliente;
    public $Produtos = [];
    public $ValorTotal = 0;

    public function __construct($Cliente) {
        $this->Cliente = $Cliente;
    }

    public function adicionarProduto(Estoque $Produto, $Quantidade) {
        $this->Produtos[] = [$Produto, $Quantidade];
        $this->ValorTotal += $Produto->Preco * $Quantidade;
    }

    public function finalizarCompra() {
        echo "Cliente: {$this->Cliente->getNome()} \n";
        echo "Compra finalizada com sucesso!\n";
        echo "Produtos:\n";
        foreach ($this->Produtos as [$produto, $quantidade]) {
            echo "{$produto->Produto} - Quantidade: $quantidade - Preço Unitário: R$ {$produto->Preco}\n";
        }
        echo "Valor Total: R$ {$this->ValorTotal}\n";
    }
}

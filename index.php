<?php

class Produto {

    public string $nome;
    public float $preco;
    public int $quantidade;

    public function __construct(string $nome, float $preco, int $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function adicionarEstoque(int $qtd): void {
        if ($qtd > 0) {
            $this->quantidade = $this->quantidade + $qtd;
        }
    }

    public function removerEstoque(int $qtd): bool {
        if ($qtd > 0 && $qtd <= $this->quantidade) {
            $this->quantidade = $this->quantidade - $qtd;
            return true;
        } else {
            return false;
        }
    }

    public function calcularValorTotal(): float {
        $total = $this->preco * $this->quantidade;
        return $total;
    }
}

// Criando o produto
$produto1 = new Produto("Mouse", 50.00, 20);

// Adicionando e removendo estoque
$produto1->adicionarEstoque(10);

if ($produto1->removerEstoque(5)) {
    echo "Produto removido com sucesso!<br>";
} else {
    echo "Estoque insuficiente!<br>";
}

// Exibindo informações
echo "Nome: " . $produto1->nome . "<br>";
echo "Preço: R$ " . $produto1->preco . "<br>";
echo "Quantidade em estoque: " . $produto1->quantidade . "<br>";
echo "Valor total: R$ " . $produto1->calcularValorTotal();

?>

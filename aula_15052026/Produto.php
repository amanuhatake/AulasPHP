<?php 

class Produto{
    public string $nome;
    public float $preco;

    //Método que retorna string(texto)

    public function exibirResumo():string{
        return "<p>Produto : </p> <p>Nome : {$this->nome}</p>Preço: {$this->preco}";
    }

    //Métodos com parametro 

    public function calcularDesconto(float $percentual): float{
        return ($this->preco * $percentual)/100;
    }
}

?>
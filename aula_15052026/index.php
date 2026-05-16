<?php
require_once('Cliente.php');

$cliente = new Cliente("Maria da Silva", "maria@gmail");

//$cliente-> nome= "Manu";
//$cliente-> email = "maria@elamil.com";


echo $cliente-> nome;

// Testando método da classe Produto
require_once('Produto.php'); //importando a classe (instanciando)

$prod = new Produto();

$prod->nome = "Seda";
$prod->preco = 3.5;

echo "<p> {$prod->exibirResumo()} </p>";
echo "<p> Desconto: {$prod->calcularDesconto(10)} </p>";

?>


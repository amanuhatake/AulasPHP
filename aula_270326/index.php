<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <a href="notas.php" > Clica aqui </a>
</body>
</html>
<?php 

$frutas = array("Maça", "Banana", "Laranja");
echo ($frutas [0]); // tem um array tem colocar a posição do array

$pessoa = array(
    "nome" => "Ana",
    "idade" => 25,
    "cidade" => "Londrina"
);

echo ("<br>Nome: ".$pessoa ["nome"]."<br>Idade: ".$pessoa["idade"]."<br>Cidade: ".$pessoa["idade"]); //concatecar com . 
echo("<br>Cidade: {$pessoa["cidade"]}");

/*foreach($frutas as $fruta){
    echo $fruta. "<br>";
}*/

foreach($frutas as $fruta){ //percorre o array quando nao é associativo 
    echo "<p>" .$fruta. "</p>"; //  /p cria paragrafo 
}


//ARRAYS MULTIDIMENSIONAIS 
$alunos = array(
    array("Ana", 8.5),
    array("Carlos", 6.0),
    array("Maria", 9.2)
);

//se vier do banco de dados tem que usar o associativo. 

echo $alunos[0][0];

echo count($frutas);



//emendar arrays com array_push com elementos 
$nomes = array("Manu");
//array_push($nomes, $fruta); //qualquer dado, mix de valores
array_push($nomes, "Manu", "Silva"); //acrescentando posições novas
print_r($nomes);

echo("<br>Contagem: ". count($nomes));


//push com array, exerga uma posição 
$nomes2 = array("Juliana");
array_push($nomes2, $frutas);
print_r($nomes2);
echo("<br>Contagem: ". count($nomes2));



?>
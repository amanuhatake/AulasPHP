<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Notas com Array</title>
</head>
<body>

<h1>Cadastro de Notas</h1>

<form method="post">
    Nota 1: <input type="number" name="nota1" step="0.1"><br><br>
    Nota 2: <input type="number" name="nota2" step="0.1"><br><br>
    Nota 3: <input type="number" name="nota3" step="0.1"><br><br>

    <button type="submit">Calcular Média</button>
</form>

<?php
if (isset($_POST["nota1"], $_POST["nota2"], $_POST["nota3"])) {

    $notas = array(
        $_POST["nota1"],
        $_POST["nota2"],
        $_POST["nota3"]
    );

    $soma = 0;

    foreach ($notas as $nota) { //para cada item de notas, guarde em nota (variavel temporaria para posição do array)
        $soma += $nota;
    }

    $media = $soma / count($notas);

    echo "<h2>Resultado</h2>";
    echo "Notas: " . implode(", ", $notas) . "<br>";
    echo "Média: " . number_format($media, 2, ",", ".") . "<br>";

    if ($media >= 6) {
        echo "Situação: APROVADO";
    } else {
        echo "Situação: REPROVADO";
    }
}
?>

</body>
</html>
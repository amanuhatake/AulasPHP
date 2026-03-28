<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Lanchonete</title>
</head>

<body>
    <h1>Registro de pedido</h1>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome..">
        </div>

        <div>
            <label>Produto:</label>
            <select name="produto">
                <option value="Lanche">Lanche</option>
                <option value="Batata-Frita">Batata-Frita</option>
                <option value="Mandioca">Porção de Mandioca</option>
            </select>
        </div>

        <div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                <label class="form-check-label" for="radioDefault1">
                    Médio
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                <label class="form-check-label" for="radioDefault2">
                    Grande
                </label>
            </div>
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Quantidade</label>
            <input type="text" class="form-control" id="quantidade" placeholder="Digite a quantidade..">
        </div>

        <button type="submit">Fazer pedido</button>
    </form>

    <?php
    if (isset($_POST["Lanche"], $_POST["Batata-Frita"], $_POST["Mandioca"])) {

        $pedidos = array(
            $_POST["Lanche"],
            $_POST["Batata-Frita"],
            $_POST["Mandioca"]
        );

        $soma = 0;

        foreach ($pedidos as $pedido) { //para cada item de notas, guarde em nota (variavel temporaria para posição do array)
            $soma += $pedido;
        }

        $media = $soma / count($pedido);

        echo "<h2>Resultado</h2>";
        echo "Pedido: " . implode(", ", $pedido) . "<br>";
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
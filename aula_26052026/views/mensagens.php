<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow-sm">
                <div class="card-header">
                    <h1 class="h4 mb-0">Resultado</h1>
                </div>

                <div class="card-body">

                    <?php if ($resultado["sucesso"]): ?>
                        <div class="alert alert-success">
                            <?php echo $resultado["mensagem"]; ?>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-danger">
                            <?php echo $resultado["mensagem"]; ?>
                        </div>
                    <?php endif; ?>

                    <a href="index.php" class="btn btn-primary">
                        Voltar ao formulário
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
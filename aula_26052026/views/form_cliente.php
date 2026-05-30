<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!--<link rel="stylesheet" href="css/bootstrap.min.css"> -->
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h1 class="h4 mb-0">Cadastro de Clientes</h1>
                </div>

                <div class="card-body">
                    <form action="index.php?acao=cadastrar" method="POST">

                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input 
                                type="text" 
                                name="nome" 
                                id="nome" 
                                class="form-control" 
                                placeholder="Digite o nome do cliente"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                class="form-control" 
                                placeholder="Digite o e-mail do cliente"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input 
                                type="text" 
                                name="telefone" 
                                id="telefone" 
                                class="form-control" 
                                placeholder="Digite o telefone do cliente"
                                required>
                        </div>

                        <button type="submit" class="btn btn-success">
                            Cadastrar Cliente
                        </button>

                        <a href="index.php" class="btn btn-secondary">
                            Limpar
                        </a>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
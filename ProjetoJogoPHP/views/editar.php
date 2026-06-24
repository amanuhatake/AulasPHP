<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jogo</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    
    <style>
        :root {
            --purple-main: #6f42c1;
            --purple-dark: #5a32a3;
            --purple-light: #f3effb;
        }
        .text-purple { color: var(--purple-main); }
        
        .btn-purple {
            background-color: var(--purple-main);
            color: white;
            border: none;
        }
        .btn-purple:hover {
            background-color: var(--purple-dark);
            color: white;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-purple">Editar Jogo</h2>
        <a href="index.php" class="btn btn-outline-secondary">Voltar para a Lista</a>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body p-4">
            <form action="index.php?action=atualizar" method="POST">
                
                <input type="hidden" name="id" value="<?= $jogo['id'] ?>">

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nome" class="form-label fw-bold">Nome do Jogo</label>
                        <input type="text" class="form-control" id="nome" name="nome" 
                               value="<?= htmlspecialchars($jogo['nome']) ?>" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="plataforma" class="form-label fw-bold">Plataforma</label>
                        <input type="text" class="form-control" id="plataforma" name="plataforma" 
                               value="<?= htmlspecialchars($jogo['plataforma']) ?>" placeholder="Ex: PC, PS5, Switch" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="genero" class="form-label fw-bold">Gênero</label>
                        <input type="text" class="form-control" id="genero" name="genero" 
                               value="<?= htmlspecialchars($jogo['genero']) ?>" placeholder="Ex: RPG, Ação" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="ano" class="form-label fw-bold">Ano de Lançamento</label>
                        <input type="number" class="form-control" id="ano" name="ano" 
                               value="<?= $jogo['ano'] ?>" min="1950" max="<?= date('Y') + 2 ?>" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="preco" class="form-label fw-bold">Preço (R$)</label>
                        <input type="number" class="form-control" id="preco" name="preco" 
                               value="<?= number_format($jogo['preco'], 2, '.', '') ?>" step="0.01" required>
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-3">
                    <a href="index.php" class="btn btn-light border">Cancelar</a>
                    <button type="submit" class="btn btn-purple px-4 shadow-sm">Salvar Alterações</button>
                </div>

            </form>
        </div>
    </div>

</div>
<script src="public/js/bootstrap.bundle.min.js"></script>
</body>
</html>
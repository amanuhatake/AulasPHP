<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Jogo</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-4" style="max-width: 600px;">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Cadastrar Jogo</h2>
        <a href="index.php?action=listar" class="btn btn-secondary">Voltar</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="index.php?action=salvar" method="POST">

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome do Jogo *</label>
                    <input type="text"
                           class="form-control"
                           id="nome"
                           name="nome"
                           placeholder="Ex: Star Wars"
                           required>
                </div>

                <div class="mb-3">
                    <label for="plataforma" class="form-label">Plataforma *</label>
                    <select class="form-select" id="plataforma" name="plataforma" required>
                        <option value="">Selecione...</option>
                        <option value="PC">PC</option>
                        <option value="PS5">PS5</option>
                        <option value="PS4">PS4</option>
                        <option value="Xbox Series">Xbox Series</option>
                        <option value="Xbox One">Xbox One</option>
                        <option value="Nintendo Switch">Nintendo Switch</option>
                        <option value="Mobile">Mobile</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="genero" class="form-label">Gênero *</label>
                    <input type="text"
                           class="form-control"
                           id="genero"
                           name="genero"
                           placeholder="Ex: Ação, RPG, Esporte..."
                           required>
                </div>

                <div class="mb-3">
                    <label for="ano" class="form-label">Ano de Lançamento *</label>
                    <input type="number"
                           class="form-control"
                           id="ano"
                           name="ano"
                           min="1970"
                           max="2099"
                           placeholder="Ex: 2005"
                           required>
                </div>

                <div class="mb-4">
                    <label for="preco" class="form-label">Preço (R$) *</label>
                    <input type="number"
                           class="form-control"
                           id="preco"
                           name="preco"
                           min="0"
                           step="0.01"
                           placeholder="Ex: 400,00"
                           required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-lg">
                        Salvar Jogo
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>
<script src="public/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Jogos</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    
    <style>
        :root {
            --purple-main: #6f42c1;
            --purple-dark: #5a32a3;
            --purple-light: #f3effb;
        }
        /* Cor do título */
        .text-purple { color: var(--purple-main); }
        
        /* Botão Novo Jogo Customizado */
        .btn-purple {
            background-color: var(--purple-main);
            color: white;
            border: none;
        }
        .btn-purple:hover {
            background-color: var(--purple-dark);
            color: white;
        }
        
        /* Cabeçalho da Tabela Roxo */
        .table-purple {
            background-color: var(--purple-main) !important;
            color: white !important;
        }
        .table-purple th {
            color: white !important;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-purple">Bem Vindos! Lista de jogos</h2>
        <a href="index.php?action=cadastrar" class="btn btn-purple shadow-sm">+ Novo Jogo</a>
    </div>

    <?php if (isset($_GET['msg'])): ?>
        <?php include 'views/mensagem.php'; ?>
    <?php endif; ?>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-striped table-hover mb-0">
                <thead class="table-purple">
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Plataforma</th>
                        <th>Gênero</th>
                        <th>Ano</th>
                        <th>Preço</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($jogos)): ?>
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">
                                Nenhum jogo cadastrado ainda.
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($jogos as $jogo): ?>
                            <tr>
                                <td><?= $jogo['id'] ?></td>
                                <td><?= htmlspecialchars($jogo['nome']) ?></td>
                                <td><?= htmlspecialchars($jogo['plataforma']) ?></td>
                                <td><?= htmlspecialchars($jogo['genero']) ?></td>
                                <td><?= $jogo['ano'] ?></td>
                                <td>R$ <?= number_format($jogo['preco'], 2, ',', '.') ?></td>
                                <td class="text-center">
                                    <a href="index.php?action=editar&id=<?= $jogo['id'] ?>"
                                       class="btn btn-sm btn-warning me-1">Editar</a>
                                    <a href="index.php?action=excluir&id=<?= $jogo['id'] ?>"
                                       class="btn btn-sm btn-danger"
                                       onclick="return confirm('Excluir <?= htmlspecialchars($jogo['nome']) ?>?')">
                                    Excluir</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<script src="public/js/bootstrap.bundle.min.js"></script>
</body>
</html>
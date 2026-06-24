<?php

$mensagens = [
    'cadastrado' => ['tipo' => 'success', 'texto' => ' Jogo cadastrado com sucesso!'],
    'atualizado' => ['tipo' => 'success', 'texto' => 'Jogo atualizado com sucesso!'],
    'excluido'   => ['tipo' => 'success', 'texto' => 'Jogo excluído com sucesso!'],
    'erro'       => ['tipo' => 'danger',  'texto' => 'Ocorreu um erro. Tente novamente.'],
    'campos_vazios' => ['tipo' => 'warning', 'texto' =>'Preencha todos os campos obrigatórios!'],
];

$msg = $_GET['msg'] ?? '';

if (isset($mensagens[$msg])):
    $alerta = $mensagens[$msg];
?>
    <div class="alert alert-<?= $alerta['tipo'] ?> alert-dismissible fade show" role="alert">
        <?= $alerta['texto'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>
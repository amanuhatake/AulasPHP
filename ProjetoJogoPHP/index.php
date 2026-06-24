<?php

require_once 'config/Database.php';
require_once 'models/Jogo.php';
require_once 'controllers/JogoController.php';

$controller = new JogoController();

$action = $_GET['action'] ?? 'listar';

switch ($action) {
    case 'listar':
        $controller->listar();
        break;
    case 'cadastrar':
        $controller->cadastrarJ();
        break;
    case 'salvar':
        $controller->salvarJ();
        break;
    case 'editar':
        $controller->editarJ();
        break;
    case 'atualizar':
        $controller->atualizarJ();
        break;
    case 'excluir':
        $controller->excluirJ();
        break;
    default:
        $controller->listar();
        break;
}

?>
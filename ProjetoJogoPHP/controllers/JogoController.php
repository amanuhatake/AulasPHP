<?php
class JogoController
{

    private $model;

    public function __construct()
    {
        $this->model = new Jogo();
    }


    public function listar()
    {
        $jogos = $this->model->listarJogos();
        include 'views/listar.php';
    }


    public function cadastrarJ()
    {
        include 'views/cadastrar.php';
    }


    public function salvarJ()
    {
        $nome       = trim($_POST['nome']);
        $plataforma = trim($_POST['plataforma']);
        $genero     = trim($_POST['genero']);
        $ano        = trim($_POST['ano']);
        $preco      = trim($_POST['preco']);

        if (empty($nome) || empty($plataforma) || empty($genero) || empty($ano) || empty($preco)) {
            header('Location: index.php?action=cadastrar&msg=erro');
            exit;
        }

        if (!is_numeric($ano) || !is_numeric($preco)) {
            header('Location: index.php?action=cadastrar&msg=erro');
            exit;
        }

        $resultado = $this->model->cadastrarJ($nome, $plataforma, $genero, $ano, $preco);

        if ($resultado) {
            header('Location: index.php?action=listar&msg=cadastrado');
        } else {
            header('Location: index.php?action=cadastrar&msg=erro');
        }
        exit;
    }

    public function editarJ()
    {
        $id   = $_GET['id'];
        $jogo = $this->model->buscarId($id);
        include 'views/editar.php';
    }


    public function atualizarJ()
    {
        $id         = $_POST['id'];
        $nome       = trim($_POST['nome']);
        $plataforma = trim($_POST['plataforma']);
        $genero     = trim($_POST['genero']);
        $ano        = trim($_POST['ano']);
        $preco      = trim($_POST['preco']);

        $resultado = $this->model->atualizarJ($id, $nome, $plataforma, $genero, $ano, $preco);

        if ($resultado) {
            header('Location: index.php?action=listar&msg=atualizado');
        } else {
            header('Location: index.php?action=editar&id=' . $id . '&msg=erro');
        }

        if (empty($nome) || empty($plataforma) || empty($genero) || empty($ano) || empty($preco)) {
            header('Location: index.php?action=editar&id=' . $id . '&msg=erro');
            exit;
        }
        exit;
    }


    public function excluirJ()
    {
        $id = $_GET['id'];

        $resultado = $this->model->excluirJ($id);

        if ($resultado) {
            header('Location: index.php?action=listar&msg=excluido');
        } else {
            header('Location: index.php?action=listar&msg=erro');
        }
        exit;
    }
}

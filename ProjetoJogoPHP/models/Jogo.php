<?php
require_once './config/Database.php';

class Jogo {
    private $conexao;
    private $tabela = 'jogos';

    public function __construct(){
        $db = new Database();
        $this-> conexao = $db->getConexao();
    }

    public function listarJogos(){
        $sql = "SELECT * FROM {$this->tabela} ORDER BY id DESC";
        $lista = $this->conexao->prepare($sql);
        $lista->execute();

        return $lista->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarId($id){
        $sql = "Select *FROM {$this->tabela} WHERE id = :id";
        $lista = $this->conexao->prepare($sql);
        $lista->bindParam(':id', $id);
        $lista->execute();

        return $lista->fetch(PDO::FETCH_ASSOC);
    }

    public function cadastrarJ($nome, $plataforma,$genero,$ano,$preco){
        $sql = "INSERT INTO {$this->tabela}(nome,plataforma,genero,ano,preco) VALUES (:nome, :plataforma, :genero, :ano, :preco)";
        $lista = $this->conexao->prepare($sql);

        $lista->bindParam(':nome',$nome);
        $lista->bindParam(':plataforma',$plataforma);
        $lista->bindParam(':genero',$genero);
        $lista->bindParam(':ano',$ano);
        $lista->bindParam(':preco',$preco);

        return $lista->execute();

    }

     public function atualizarJ($id, $nome, $plataforma,$genero,$ano,$preco){
        $sql = "UPDATE {$this->tabela} SET nome=:nome, plataforma=:plataforma, genero=:genero, ano=:ano, preco=:preco WHERE id=:id";
        $lista = $this->conexao->prepare($sql);

        $lista->bindParam(':id',$id);
        $lista->bindParam(':nome',$nome);
        $lista->bindParam(':plataforma',$plataforma);
        $lista->bindParam(':genero',$genero);
        $lista->bindParam(':ano',$ano);
        $lista->bindParam(':preco',$preco);

        return $lista->execute();

    }

    public function excluirJ($id){
        $sql = "Delete FROM {$this->tabela} WHERE id = :id";
        $lista = $this->conexao->prepare($sql);
        $lista->bindParam(':id', $id);
        return $lista->execute();

    }
}





?>
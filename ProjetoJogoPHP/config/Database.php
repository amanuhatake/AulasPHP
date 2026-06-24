<?php
class Database {

    private $host    = 'localhost';
    private $banco   = 'sistema_jogos';
    private $usuario = 'root';
    private $senha   = '';

    private $conexao;

    public function getConexao() {

        $this->conexao = null;

        try {

            $dsn = "mysql:host={$this->host};dbname={$this->banco};charset=utf8mb4";
            $this->conexao = new PDO($dsn, $this->usuario, $this->senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }

        return $this->conexao;
    }
}
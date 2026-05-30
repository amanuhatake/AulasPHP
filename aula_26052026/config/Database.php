<?php
class Database
{
    private $host = "localhost";
    private $dbname = "sistema_clientes";
    private $usuario = "root";
    private $senha = "1234";
    //$port = 3307; //definir apenas para portas diferentes de 3306
    private $port = 3306;

    private ?PDO $conexao = null;

    public function conectar(): PDO {
        if ($this->conexao === null) {

            try {
                //instanciando objeto PDO, classe especifica para banco de dados 
                $conexao = new PDO(
                    "mysql:host=$this->host;port=port->porta;dbname=$this->dbname;charset=utf8mb4", //host = onde está ospedado 
                    $this->usuario,
                    $this->senha
                );

                echo "Conexão realizada com sucesso";
            } catch (PDOException $erro) {

                echo "Erro na conexão: " . $erro->getMessage();
                // ou echo "Erro na conexão:   {$erro->getMessage()}";
            }
            //$conexao = null; //fecha a conexão 



        }

        return $this->conexao;
    }
}

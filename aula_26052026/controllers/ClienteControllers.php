<?php
//Controller regra de negocio

//revisar caminho ao executar
//se subir sem o DIR no servidor de php não sobe 
require_once __DIR__."./models/Cliente.php";

class ClienteControllers{
    public function cadastrar(): array{
        if($_SERVER["REQUEST_METHOD"]!== "POST"){
            //array de posição 
            return [
                "sucesso" => false,
                "mensagem" => "Requisição inválida"
            ];

        }
        //tira espaço do começo e do fim 
        $nome = trim($_POST["nome"]??"");
        $telefone = trim($_POST["telefone"]??"");
        $email = trim($_POST["email"]??"");

        if(empty($nome)|| empty($telefone)|| empty($email)){
         return [
                "sucesso" => false,
                "mensagem" => "Todos os campos devem ser preenchidos"
            ];
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            return [
                "sucesso" => false,
                "mensagem" => "O e-mail ainda está invalido"
            ];
        }
        try{
            $cliente = new Cliente($nome,$email,$telefone);
            $cliente -> salvar();
            return [
                "sucesso" => true,
                "mensagem" => "Cliente cadastrado com sucesso!"
            ];
        }catch(PDOException $erro){
             return [
                "sucesso" => false,
                "mensagem" => "Erro ao cadastrar o cliente {$erro->getMessage()}"
            ];

        }
    }
}
?>
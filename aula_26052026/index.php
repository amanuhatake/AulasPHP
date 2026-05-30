<?php

require_once __DIR__."./controllers/ClienteControllers.php";

$acao =$_GET["acao"]?? "formulario"; //vinda do form

if($acao === "cadastrar"){
    $controller = new ClienteControllers();
    $resultado = $controller -> cadastrar();
    require_once __DIR__."./views/mensagens.php";
}else{
    require_once __DIR__."./views/from_cliente.php";
}
?>
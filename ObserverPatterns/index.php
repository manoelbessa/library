<?php


require("config.php");
// Conectar ao banco
$db = new mysqli("localhost", "root", "", "design_patterns");

// Cria o pedido com a conexão do banco
$pedido = new Pedido($db);

// Altera o status do pedido, o que disparará a notificação por e-mail
$pedido->setStatus("Processando");
$pedido->setStatus("Enviado");


?>
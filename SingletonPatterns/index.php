<?php

require("config.php");

$db = Database::getInstance();
$conn = $db->getConnection();

// Inserindo um novo usuário
$nome = "João Silva";
$email = "maria@example.com";

$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Usuário inserido com sucesso.\n";
} else {
    echo "Erro ao inserir usuário: " . $conn->error;
}


?>
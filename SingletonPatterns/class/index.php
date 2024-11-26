<?php

require("config.php");
// Inclui a classe Database


// Obtém a instância única da conexão com o banco
$db1 = Database::getInstance();
$connection1 = $db1->getConnection();

// Realiza uma consulta
$result = $connection1->query("SELECT * FROM tabela_exemplo");

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . " - Nome: " . $row['nome'] . "\n";
    }
} else {
    echo "Erro na consulta: " . $connection1->error;
}

// Obtém a mesma instância em outro ponto do código
$db2 = Database::getInstance();
$connection2 = $db2->getConnection();

// Verifica se as conexões são as mesmas
if ($connection1 === $connection2) {
    echo "As conexões são iguais, Singleton funcionando corretamente.";
} else {
    echo "As conexões são diferentes, Singleton não implementado corretamente.";
}


?>

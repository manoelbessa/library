<?php

require("config.php");

try {
    // Criando uma conexão MySQL
    $connection = DatabaseFactory::create('mysql');
    $mysqlConnection = $connection->connect();

    // Criando uma conexão PostgreSQL
    $connection = DatabaseFactory::create('postgresql');
    $postgresConnection = $connection->connect();

} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}


?>

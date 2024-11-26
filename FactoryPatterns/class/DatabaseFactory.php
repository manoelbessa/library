<?php

class DatabaseFactory {
    public static function create($type) {
        // Carrega o arquivo de configuração
        $config = include('secret.php');

        if (!isset($config[$type])) {
            throw new Exception("Configuração para o tipo de banco de dados '{$type}' não encontrada.");
        }

        $dbConfig = $config[$type];

        // Cria a conexão com base no tipo de banco e parâmetros do arquivo de configuração
        switch (strtolower($type)) {
            case 'mysql':
                return new MySQLConnection($dbConfig['host'], $dbConfig['user'], $dbConfig['password'], $dbConfig['database']);
            case 'postgresql':
                return new PostgreSQLConnection($dbConfig['host'], $dbConfig['user'], $dbConfig['password'], $dbConfig['database']);
            default:
                throw new Exception("Tipo de banco de dados '{$type}' não suportado.");
        }
    }
}


?>
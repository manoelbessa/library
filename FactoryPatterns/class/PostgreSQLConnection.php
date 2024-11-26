<?php

class PostgreSQLConnection implements DatabaseConnection {
    private $host;
    private $user;
    private $password;
    private $database;

    public function __construct($host, $user, $password, $database) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect() {
        $connectionString = "host={$this->host} dbname={$this->database} user={$this->user} password={$this->password}";
        $connection = pg_connect($connectionString);

        if (!$connection) {
            die("Erro de conexão com PostgreSQL");
        }

        echo "Conexão com PostgreSQL estabelecida com sucesso!";
        return $connection;
    }
}

?>
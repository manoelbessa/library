<?php

class MySQLConnection implements DatabaseConnection {
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
        $connection = new mysqli($this->host, $this->user, $this->password, $this->database);
        
        if ($connection->connect_error) {
            die("Erro de conexão: " . $connection->connect_error);
        }

        echo "Conexão com MySQL estabelecida com sucesso!";
        return $connection;
    }
}


?>
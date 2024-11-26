<?php

class Database {

    private static $instance = null;
    private $connection;

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "design_patterns";

    private function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Erro de conexão: " . $this->connection->connect_error);
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    private function __clone() { }
    public function __wakeup() { }

    public function getConnection() {
        return $this->connection;
    }
}

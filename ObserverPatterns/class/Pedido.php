<?php

class Pedido {
    private $status;
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function setStatus($status) {
        $this->status = $status;
        $this->notificarObservadores();
    }

    private function notificarObservadores() {
        // Busca os observadores do banco de dados
        $observadores = $this->getObservadoresFromDatabase();

        foreach ($observadores as $observador) {
            $observador->update($this);
        }
    }

    public function getStatus() {
        return $this->status;
    }

    private function getObservadoresFromDatabase() {
        $observadores = [];

        $query = "SELECT email FROM observadores";
        $result = $this->db->query($query);

        while ($row = $result->fetch_assoc()) {
            $observadores[] = new EmailNotificacao($row['email']);
        }

        return $observadores;
    }
}


?>


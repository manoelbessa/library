<?php

class EmailNotificacao implements Observer {
    private $email;

    public function __construct($email) {
        $this->email = $email;
    }

    public function update($pedido) {
        $subject = "Atualização do Pedido";
        $message = "O status do pedido foi atualizado para: " . $pedido->getStatus();
        $headers = "From: no-reply@example.com";

        if (mail($this->email, $subject, $message, $headers)) {
            echo "E-mail enviado para {$this->email}\n";
        } else {
            echo "Falha ao enviar e-mail para {$this->email}\n";
        }
    }
}


?>

<?php

class EmailNotificacao implements NotificacaoInterface {
    public function enviar(string $mensagem): void {
        echo "Enviando e-mail: {$mensagem}\n";
    }
}

?>

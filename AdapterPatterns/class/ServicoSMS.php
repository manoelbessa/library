<?php

class ServicoSMS {
    public function enviarSMS(string $numero, string $mensagem): void {
        echo "Enviando SMS para {$numero}: {$mensagem}\n";
    }
}


?>

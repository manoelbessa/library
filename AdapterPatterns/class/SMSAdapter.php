<?php

class SMSAdapter implements NotificacaoInterface {
    private $servicoSMS;
    private $numero;

    public function __construct(ServicoSMS $servicoSMS, string $numero) {
        $this->servicoSMS = $servicoSMS;
        $this->numero = $numero;
    }

    public function enviar(string $mensagem): void {
        $this->servicoSMS->enviarSMS($this->numero, $mensagem);
    }
}


?>

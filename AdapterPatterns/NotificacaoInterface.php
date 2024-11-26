<?php

interface NotificacaoInterface {

    public function enviar(string $mensagem): void;
    
}

<?php

require("config.php");
function enviarNotificacao(NotificacaoInterface $notificacao, string $mensagem) {
    $notificacao->enviar($mensagem);
}

// Enviando uma notificação por e-mail
$emailNotificacao = new EmailNotificacao();
enviarNotificacao($emailNotificacao, "Bem-vindo ao nosso sistema!");

// Enviando uma notificação por SMS usando o Adapter
$servicoSMS = new ServicoSMS();
$smsAdapter = new SMSAdapter($servicoSMS, "123-456-7890");
enviarNotificacao($smsAdapter, "Sua senha foi alterada com sucesso!");


?>

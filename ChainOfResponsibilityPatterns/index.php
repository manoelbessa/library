<?php

require("config.php");

// Criação dos manipuladores
$suporteTecnico = new SuporteTecnicoHandler();
$financeiro = new FinanceiroHandler();
$administrativo = new AdministrativoHandler();

// Configuração da cadeia
$suporteTecnico->setNext($financeiro)->setNext($administrativo);

// Testando a cadeia com diferentes solicitações
$requests = ["problema técnico"];

foreach ($requests as $request) {
    $response = $suporteTecnico->handle($request);
    if ($response) {
        echo $response . "\n";
    } else {
        echo "Nenhum departamento pôde resolver: {$request}\n";
    }
}


?>

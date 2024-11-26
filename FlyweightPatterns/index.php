<?php

require("config.php");

$fabrica = new FabricaEstudante();

// Criando e exibindo estudantes com diferentes pontuações e médias
$estudante1 = $fabrica->obterEstudante('001', 'Ana');
$estudante1->exibirScore(85, 90);

$estudante2 = $fabrica->obterEstudante('002', 'Carlos');
$estudante2->exibirScore(78, 82);

$estudante3 = $fabrica->obterEstudante('001', 'Ana');
$estudante3->exibirScore(88, 90); // Reutilizando o mesmo objeto de Ana

// Verifica quantos objetos únicos foram criados
echo "Total de objetos únicos de estudantes: " . $fabrica->contarEstudantes() . "\n";


?>

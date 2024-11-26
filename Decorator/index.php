<?php

require("config.php");

// Criando um café simples
$cafe = new CafeSimples();
echo "Custo do café simples: " . $cafe->custo() . "\n"; // Saída: 5.0

// Adicionando leite ao café
$cafeComLeite = new LeiteDecorator($cafe);
echo "Custo do café com leite: " . $cafeComLeite->custo() . "\n"; // Saída: 6.5

// Adicionando açúcar ao café com leite
$cafeComLeiteEAçucar = new AcucarDecorator($cafeComLeite);
echo "Custo do café com leite e açúcar: " . $cafeComLeiteEAçucar->custo() . "\n"; // Saída: 7.0

?>

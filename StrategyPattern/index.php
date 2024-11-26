<?php

require_once("config.php");

// Produto com preço base de 100
$product = new Product(100, new PercentageDiscount(10)); // Desconto de 10%
echo "Preço com desconto percentual: " . $product->getPrice() . "\n"; // Deve exibir 90

// Alterando a estratégia de desconto para um desconto fixo
$product->setDiscountStrategy(new FixedDiscount(15)); // Desconto fixo de 15
echo "Preço com desconto fixo: " . $product->getPrice() . "\n"; // Deve exibir 85

?>
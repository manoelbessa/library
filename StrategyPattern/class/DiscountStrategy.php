<?php

interface DiscountStrategy {

    public function calculate(float $price): float;
    
}
?>

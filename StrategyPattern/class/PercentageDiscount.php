<?php

class PercentageDiscount implements DiscountStrategy {

    private $percentage;

    public function __construct(float $percentage) {

        $this->percentage = $percentage;

    }

    public function calculate(float $price): float {

        return $price - ($price * $this->percentage / 100);
        
    }
}


?>

<?php

class FixedDiscount implements DiscountStrategy {
    private $discountAmount;

    public function __construct(float $discountAmount) {
        $this->discountAmount = $discountAmount;
    }

    public function calculate(float $price): float {
        return max(0, $price - $this->discountAmount);
    }
}

?>

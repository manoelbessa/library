<?php

class Product {
    private $price;
    private $discountStrategy;

    public function __construct(float $price, DiscountStrategy $discountStrategy) {
        $this->price = $price;
        $this->discountStrategy = $discountStrategy;
    }

    public function setDiscountStrategy(DiscountStrategy $discountStrategy) {
        $this->discountStrategy = $discountStrategy;
    }

    public function getPrice(): float {
        return $this->discountStrategy->calculate($this->price);
    }
}
?>

<?php

abstract class BebidaDecorator implements Bebida {
    protected $bebida;

    public function __construct(Bebida $bebida) {
        $this->bebida = $bebida;
    }

    abstract public function custo(): float;
}

?>

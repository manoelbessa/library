<?php

class LeiteDecorator extends BebidaDecorator {
    public function custo(): float {
        return $this->bebida->custo() + 1.5; // Custo adicional do leite
    }
}

?>

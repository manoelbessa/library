<?php

class AcucarDecorator extends BebidaDecorator {
    public function custo(): float {
        return $this->bebida->custo() + 0.5; // Custo adicional do açúcar
    }
}

?>

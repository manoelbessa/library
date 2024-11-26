<?php

class FabricaEstudante {
    private $estudantes = [];

    public function obterEstudante(string $id, string $nome): Estudante {
        if (!isset($this->estudantes[$id])) {
            $this->estudantes[$id] = new EstudanteConcreto($id, $nome);
        }
        return $this->estudantes[$id];
    }

    public function contarEstudantes(): int {
        return count($this->estudantes);
    }
}
?>
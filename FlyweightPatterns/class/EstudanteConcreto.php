<?php

class EstudanteConcreto implements Estudante {
    private $id;
    private $nome;

    public function __construct(string $id, string $nome) {
        $this->id = $id;
        $this->nome = $nome;
    }

    public function exibirScore(float $score, float $averageScore): void {
        echo "Estudante: {$this->nome} | ID: {$this->id} | Score: {$score} | Média: {$averageScore}\n";
    }
}
?>

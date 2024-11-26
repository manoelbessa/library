<?php

class FinanceiroHandler extends AbstractHandler {
    public function handle(string $request): ?string {
        if ($request === "problema financeiro") {
            return "Financeiro: Nós resolvemos seu problema financeiro.";
        }

        return parent::handle($request);
    }
}


?>

<?php

class SuporteTecnicoHandler extends AbstractHandler {
    public function handle(string $request): ?string {
        if ($request === "problema técnico") {
            return "Suporte Técnico: Nós resolvemos seu problema técnico.";
        }

        return parent::handle($request);
    }
}

?>

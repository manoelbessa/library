<?php

class AdministrativoHandler extends AbstractHandler {
    public function handle(string $request): ?string {
        if ($request === "problema administrativo") {
            return "Administrativo: Nós resolvemos seu problema administrativo.";
        }

        return parent::handle($request);
    }
}

?>
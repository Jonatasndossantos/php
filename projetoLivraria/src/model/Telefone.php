<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php

    class Telefone
    {
        private string $telefone;

        public function __construct(string $telefone)
        {
            $formatacaoValida = $this->validaFormatacao($telefone);

            if ($formatacaoValida === false) {
                header("Location: index.php?erro=Telefone");
                die();
            }

            $this->telefone = $this->limpaFormatacao($telefone);

        }

        public function recuperaTelefone(): string
        {
            return $this->telefone;
        }
    }
    private function validaFormatacao(string $telefone):bool
    {
        return preg_match("/^\([0-9]{2}\) 9?[0-9]{4}\-[0-9]{4}$/", $telefone);
    }
    private function limpaFormatacao(string $telefone):string
    {
        return str_replace(["(",")","-"," "],"",$telefone);
    }
</body>
</html>
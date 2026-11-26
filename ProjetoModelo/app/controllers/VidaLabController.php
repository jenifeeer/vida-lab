<?php

class VidaLabController
{
    public function inicio(): void
    {
        $candidatos = [
            __DIR__ . '/../views/vidalab/inicio.php',
            __DIR__ . '/../views/vidalab/index.php',
        ];

        foreach ($candidatos as $view) {
            if (file_exists($view)) {
                require $view;
                return;
            }
        }

        http_response_code(404);
        echo 'Crie o arquivo app/views/vidalab/inicio.php com a página inicial do VidaLab.';
    }

    public function exames(): void
    {
        require __DIR__ . '/../views/vidalab/exames.php';
    }

    public function cadastro(): void
    {
        $sucesso = null;
        $erro = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = trim($_POST['nome'] ?? '');
            $email = trim($_POST['email'] ?? '');
            if ($nome !== '' && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($_POST['senha'])) {
                // Cadastro demonstrativo: não grava no banco, pois o projeto-base não possui tabela de pacientes.
                $sucesso = 'Cadastro demonstrativo enviado! A integração ainda não salva pacientes no banco de dados.';
            } else {
                $erro = 'Confira os campos obrigatórios e tente novamente.';
            }
        }

        require __DIR__ . '/../views/vidalab/cadastro.php';
    }
}
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$baseUrl = '/ProjetoModelo';
$erro = $_SESSION['erro_login'] ?? ($erro ?? null);
$sucesso = $_SESSION['sucesso_login'] ?? ($sucesso ?? null);
$loginAntigo = $_SESSION['login_antigo'] ?? '';

unset($_SESSION['erro_login'], $_SESSION['sucesso_login'], $_SESSION['login_antigo']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso ao Sistema - VidaLab</title>
    <link rel="shortcut icon" href="<?= $baseUrl ?>/public/vidalab/img_favicon/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-page: #f1f5f9;
            --bg-card: #ffffff;
            --primary: #0f766e;
            --primary-hover: #115e59;
            --primary-soft: #f0fdfa;
            --text-main: #0f172a;
            --text-muted: #475569;
            --border: #cbd5e1;
            --border-focus: #0f766e;
            --error-bg: #fef2f2;
            --error-border: #fecaca;
            --error-text: #b91c1c;
            --success-bg: #f0fdf4;
            --success-border: #bbf7d0;
            --success-text: #15803d;
            --radius: 12px;
            --shadow: 0 18px 40px -15px rgba(15, 23, 42, 0.14);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            background: radial-gradient(circle at top right, #ccfbf1 0%, var(--bg-page) 48%, #e2e8f0 100%);
            color: var(--text-main);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px 16px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 410px;
        }

        .box-login {
            background: var(--bg-card);
            border: 1px solid #e2e8f0;
            border-radius: var(--radius);
            padding: 32px 28px;
            box-shadow: var(--shadow);
        }

        .marca {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            color: var(--text-main);
            margin-bottom: 20px;
        }

        .marca-icone {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: var(--primary);
            color: #ffffff;
            display: grid;
            place-items: center;
            font-size: 18px;
            font-weight: 700;
        }

        .marca strong {
            display: block;
            font-size: 16px;
            line-height: 1.1;
        }

        .marca small {
            display: block;
            font-size: 12px;
            color: var(--text-muted);
        }

        .box-login h2 {
            margin: 0 0 6px;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        .subtitulo {
            margin: 0 0 22px;
            font-size: 14px;
            color: var(--text-muted);
            line-height: 1.45;
        }

        .alerta {
            border-radius: 8px;
            padding: 11px 13px;
            font-size: 13px;
            line-height: 1.4;
            margin-bottom: 16px;
            border: 1px solid transparent;
        }

        .erro-login {
            background: var(--error-bg);
            border-color: var(--error-border);
            color: var(--error-text);
        }

        .sucesso-login {
            background: var(--success-bg);
            border-color: var(--success-border);
            color: var(--success-text);
        }

        .campo {
            margin-bottom: 16px;
        }

        .campo label {
            display: block;
            margin-bottom: 6px;
            font-size: 13px;
            font-weight: 600;
            color: var(--text-main);
        }

        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .campo input[type="text"],
        .campo input[type="password"] {
            width: 100%;
            height: 42px;
            padding: 0 42px 0 12px;
            font-family: inherit;
            font-size: 14px;
            color: var(--text-main);
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 8px;
            transition: border-color 0.15s ease, box-shadow 0.15s ease;
        }

        .campo input:focus {
            outline: none;
            border-color: var(--border-focus);
            box-shadow: 0 0 0 3px rgba(15, 118, 110, 0.16);
        }

        .toggle-senha {
            position: absolute;
            right: 8px;
            background: transparent;
            border: none;
            color: var(--text-muted);
            font-family: inherit;
            font-size: 12px;
            font-weight: 600;
            padding: 6px 8px;
            border-radius: 6px;
            cursor: pointer;
        }

        .toggle-senha:hover {
            background: var(--primary-soft);
            color: var(--primary);
        }

        .btn-entrar {
            width: 100%;
            height: 44px;
            margin-top: 4px;
            border: none;
            border-radius: 8px;
            background: var(--primary);
            color: #ffffff;
            font-family: inherit;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.15s ease, transform 0.05s ease;
        }

        .btn-entrar:hover {
            background: var(--primary-hover);
        }

        .btn-entrar:active {
            transform: translateY(1px);
        }

        .rodape-card {
            margin-top: 20px;
            padding-top: 16px;
            border-top: 1px solid #e2e8f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            font-size: 13px;
        }

        .rodape-card a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
        }

        .rodape-card a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="box-login">
            <a class="marca" href="<?= $baseUrl ?>/index.php?controller=vidalab&action=inicio">
                <span class="marca-icone">✚</span>
                <span>
                    <strong>VidaLab</strong>
                    <small>Análises Clínicas</small>
                </span>
            </a>

            <h2>Acesso ao Sistema</h2>
            <p class="subtitulo">Entre com suas credenciais para acessar o painel.</p>

            <?php if (!empty($sucesso)): ?>
                <div class="alerta sucesso-login" role="status">
                    <?= htmlspecialchars($sucesso, ENT_QUOTES, 'UTF-8') ?>
                </div>
            <?php endif; ?>

            <?php if (!empty($erro)): ?>
                <div class="alerta erro-login" role="alert">
                    <?= htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') ?>
                </div>
            <?php endif; ?>

            <form action="<?= $baseUrl ?>/index.php?controller=login&action=logar" method="post" autocomplete="on">
                <div class="campo">
                    <label for="login">Login:</label>
                    <div class="input-wrapper">
                        <input
                            type="text"
                            id="login"
                            name="login"
                            value="<?= htmlspecialchars($loginAntigo, ENT_QUOTES, 'UTF-8') ?>"
                            placeholder="Digite seu usuário ou e-mail"
                            autocomplete="username"
                            required
                            autofocus
                        >
                    </div>
                </div>

                <div class="campo">
                    <label for="senha">Senha:</label>
                    <div class="input-wrapper">
                        <input
                            type="password"
                            id="senha"
                            name="senha"
                            placeholder="Digite sua senha"
                            autocomplete="current-password"
                            required
                        >
                        <button type="button" class="toggle-senha" id="btnToggleSenha" aria-label="Mostrar ou ocultar senha">
                            Mostrar
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn-entrar">Entrar</button>
            </form>

            <div class="rodape-card">
                <a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=inicio">← Voltar ao início</a>
                <a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=cadastro">Criar conta</a>
            </div>
        </div>
    </div>

    <script>
        (function () {
            const btn = document.getElementById('btnToggleSenha');
            const inputSenha = document.getElementById('senha');
            if (!btn || !inputSenha) return;

            btn.addEventListener('click', function () {
                const visivel = inputSenha.type === 'text';
                inputSenha.type = visivel ? 'password' : 'text';
                btn.textContent = visivel ? 'Mostrar' : 'Ocultar';
            });
        })();
    </script>
</body>
</html>
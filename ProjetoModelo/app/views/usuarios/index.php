<?php
$baseUrl = '/ProjetoModelo';
$usuarios = $usuarios ?? [];
$sucesso = $_SESSION['sucesso_usuario'] ?? ($sucesso ?? null);
$erro = $_SESSION['erro_usuario'] ?? ($erro ?? null);
unset($_SESSION['sucesso_usuario'], $_SESSION['erro_usuario']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Usuários - VidaLab</title>
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
            --border: #e2e8f0;
            --danger: #b91c1c;
            --danger-bg: #fef2f2;
            --danger-border: #fecaca;
            --success: #15803d;
            --success-bg: #f0fdf4;
            --success-border: #bbf7d0;
            --radius: 12px;
            --shadow: 0 12px 30px -12px rgba(15, 23, 42, 0.1);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            background: var(--bg-page);
            color: var(--text-main);
            padding: 28px 16px;
        }

        .container {
            max-width: 1040px;
            margin: 0 auto;
        }

        .card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .topo {
            padding: 24px 28px;
            border-bottom: 1px solid var(--border);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
        }

        .topo-titulo small {
            display: inline-block;
            font-size: 12px;
            font-weight: 700;
            color: var(--primary);
            background: var(--primary-soft);
            padding: 4px 10px;
            border-radius: 999px;
            margin-bottom: 6px;
        }

        .topo-titulo h2 {
            margin: 0;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        .topo-titulo p {
            margin: 4px 0 0;
            font-size: 14px;
            color: var(--text-muted);
        }

        .acoes-topo {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            align-items: center;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 10px 16px;
            border-radius: 8px;
            font-family: inherit;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            border: 1px solid transparent;
            cursor: pointer;
            transition: all 0.15s ease;
        }

        .btn-primary {
            background: var(--primary);
            color: #ffffff;
        }

        .btn-primary:hover {
            background: var(--primary-hover);
        }

        .btn-outline {
            background: #ffffff;
            color: var(--text-main);
            border-color: var(--border);
        }

        .btn-outline:hover {
            background: #f8fafc;
        }

        .corpo {
            padding: 20px 28px 28px;
        }

        .alerta {
            padding: 12px 14px;
            border-radius: 8px;
            font-size: 14px;
            margin-bottom: 18px;
            border: 1px solid transparent;
        }

        .alerta-sucesso {
            background: var(--success-bg);
            border-color: var(--success-border);
            color: var(--success);
        }

        .alerta-erro {
            background: var(--danger-bg);
            border-color: var(--danger-border);
            color: var(--danger);
        }

        .barra-ferramentas {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .campo-busca {
            width: 100%;
            max-width: 340px;
            padding: 9px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-family: inherit;
            font-size: 14px;
            color: var(--text-main);
        }

        .campo-busca:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(15, 118, 110, 0.15);
        }

        .contador {
            font-size: 13px;
            color: var(--text-muted);
            font-weight: 500;
        }

        .tabela-responsiva {
            width: 100%;
            overflow-x: auto;
            border: 1px solid var(--border);
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 14px;
        }

        th {
            background: #f8fafc;
            color: var(--text-muted);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            padding: 12px 16px;
            border-bottom: 1px solid var(--border);
            white-space: nowrap;
        }

        td {
            padding: 13px 16px;
            border-bottom: 1px solid var(--border);
            vertical-align: middle;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background: #f8fafc;
        }

        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 600;
            background: #e2e8f0;
            color: #1e293b;
        }

        .badge-admin {
            background: #ccfbf1;
            color: #0f766e;
        }

        .acoes-linha {
            display: inline-flex;
            gap: 8px;
            white-space: nowrap;
        }

        .acao-link {
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            border: 1px solid transparent;
        }

        .acao-editar {
            color: var(--primary);
            background: var(--primary-soft);
            border-color: #99f6e4;
        }

        .acao-editar:hover {
            background: #ccfbf1;
        }

        .acao-excluir {
            color: var(--danger);
            background: var(--danger-bg);
            border-color: var(--danger-border);
        }

        .acao-excluir:hover {
            background: #fee2e2;
        }

        .vazio {
            text-align: center;
            padding: 28px 16px;
            color: var(--text-muted);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="topo">
                <div class="topo-titulo">
                    <small>ADMINISTRAÇÃO • tbl_usuario</small>
                    <h2>Controle de Usuários</h2>
                    <p>Gerencie contas, logins e perfis de acesso do sistema.</p>
                </div>

                <div class="acoes-topo">
                    <a class="btn btn-outline" href="<?= $baseUrl ?>/index.php?controller=vidalab&action=inicio">← Início VidaLab</a>
                    <a class="btn btn-primary" href="<?= $baseUrl ?>/index.php?controller=usuario&action=cadastrar">+ Novo Usuário</a>
                </div>
            </div>

            <div class="corpo">
                <?php if (!empty($sucesso)): ?>
                    <div class="alerta alerta-sucesso" role="status">
                        <?= htmlspecialchars($sucesso, ENT_QUOTES, 'UTF-8') ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($erro)): ?>
                    <div class="alerta alerta-erro" role="alert">
                        <?= htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') ?>
                    </div>
                <?php endif; ?>

                <div class="barra-ferramentas">
                    <input
                        type="search"
                        id="filtroUsuarios"
                        class="campo-busca"
                        placeholder="Buscar por nome, login ou perfil..."
                        aria-label="Buscar usuário"
                    >
                    <span class="contador" id="contadorUsuarios">
                        <?= count($usuarios) ?> usuário(s) encontrado(s)
                    </span>
                </div>

                <div class="tabela-responsiva">
                    <table id="tabelaUsuarios">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Login</th>
                                <th>Perfil</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($usuarios)): ?>
                                <tr>
                                    <td colspan="5" class="vazio">Nenhum registro encontrado.</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($usuarios as $u): ?>
                                    <?php
                                        $id = (int) ($u['id'] ?? 0);
                                        $nome = (string) ($u['nome'] ?? '');
                                        $login = (string) ($u['login'] ?? '');
                                        $perfil = (string) ($u['perfil'] ?? '');
                                        $isAdmin = strtolower(trim($perfil)) === 'admin';
                                    ?>
                                    <tr class="linha-usuario">
                                        <td><?= $id ?></td>
                                        <td><?= htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') ?></td>
                                        <td><?= htmlspecialchars($login, ENT_QUOTES, 'UTF-8') ?></td>
                                        <td>
                                            <span class="badge <?= $isAdmin ? 'badge-admin' : '' ?>">
                                                <?= htmlspecialchars($perfil, ENT_QUOTES, 'UTF-8') ?>
                                            </span>
                                        </td>
                                        <td>
                                            <div class="acoes-linha">
                                                <a
                                                    class="acao-link acao-editar"
                                                    href="<?= $baseUrl ?>/index.php?controller=usuario&action=editar&id=<?= $id ?>"
                                                >
                                                    Editar
                                                </a>
                                                <a
                                                    class="acao-link acao-excluir"
                                                    href="<?= $baseUrl ?>/index.php?controller=usuario&action=excluir&id=<?= $id ?>"
                                                    onclick="return confirm('Deseja excluir o usuário <?= htmlspecialchars(addslashes($nome), ENT_QUOTES, 'UTF-8') ?>?')"
                                                >
                                                    Excluir
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            const input = document.getElementById('filtroUsuarios');
            const linhas = Array.from(document.querySelectorAll('#tabelaUsuarios tbody tr.linha-usuario'));
            const contador = document.getElementById('contadorUsuarios');
            if (!input || !contador) return;

            input.addEventListener('input', function () {
                const termo = input.value.trim().toLowerCase();
                let visiveis = 0;

                linhas.forEach(function (tr) {
                    const texto = tr.textContent.toLowerCase();
                    const bate = termo === '' || texto.includes(termo);
                    tr.style.display = bate ? '' : 'none';
                    if (bate) visiveis++;
                });

                contador.textContent = visiveis + ' usuário(s) encontrado(s)';
            });
        })();
    </script>
</body>
</html>
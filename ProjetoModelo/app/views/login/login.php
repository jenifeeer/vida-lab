<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - VidaLab Análises Clínicas</title>
    <meta name="description" content="Acesse a Área do Paciente VidaLab para acompanhar seus agendamentos e histórico.">
    <link rel="shortcut icon" href="public/vidalab/img_favicon/favicon.png" type="image/x-icon">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://w3.org' viewBox='0 0 100 100'><defs><linearGradient id='g' x1='0' y1='0' x2='1' y2='1'><stop offset='0%' stop-color='%230f766e'/><stop offset='100%' stop-color='%230ea5e9'/></linearGradient></defs><rect width='100' height='100' rx='22' fill='url(%23g)'/><path d='M42 22h16v20h20v16H58v20H42V58H22V42h20z' fill='%23ffffff'/></svg>">
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="public/vidalab/login.css">


</head>
<body class="pagina-auth">

    <!-- =========================================================
         CABEÇALHO E MENU PRINCIPAL
         ========================================================= -->
    <header class="cabecalho">
        <div class="container cabecalho-conteudo">
            <a class="marca" href="index.php?controller=vidalab&action=inicio">
                <span class="marca-icone">✚</span>
                <span><strong>VidaLab</strong><small>Análises Clínicas</small></span>
            </a>
            <nav class="menu-navegacao">
                <a href="index.php?controller=vidalab&action=inicio">Início</a>
                <a href="index.php?controller=vidalab&action=inicio#sobre">Sobre</a>
                <a href="index.php?controller=vidalab&action=exames">Exames</a>
                <a href="index.php?controller=vidalab&action=inicio#unidades">Unidades</a>
                <a href="#contato">Contato</a>
                <a class="botao-resultados" href="https://SEU-LINK-DE-RESULTADOS.com.br" target="_blank" rel="noopener">Resultados Online</a>
                <a class="ativo" href="index.php?controller=login&action=index">Login</a>
                <a class="botao-nav" href="index.php?controller=vidalab&action=cadastro">Cadastre-se</a>
            </nav>
        </div>
    </header>

    <!-- =========================================================
         ÁREA DE LOGIN (CENTRALIZADA)
         ========================================================= -->
    <main class="fundo-formulario">
        <section class="formulario">
            <div class="form-icone" aria-hidden="true">👤</div>
            <span class="etiqueta">ÁREA DO PACIENTE</span>
            <h1>Bem-vindo de volta!</h1>
            <p class="form-descricao">Entre com seus dados para acessar sua área demonstrativa.</p>

            <?php if (!empty($erro)): ?><p class="mensagem-erro"><?= htmlspecialchars($erro, ENT_QUOTES, "UTF-8") ?></p><?php endif; ?>
            <form action="index.php?controller=login&action=logar" method="post">
                <div class="campo-grupo">
                    <label for="login">Login</label>
                    <input type="email" id="login" name="login" placeholder="Seu login ou e-mail" required autocomplete="email">
                </div>

                <div class="campo-grupo">
                    <div class="label-linha">
                        <label for="senha">Senha</label>
                        <a href="#recuperar" class="link-esqueci">Esqueceu a senha?</a>
                    </div>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required autocomplete="current-password">
                </div>

                <div class="lembrar-linha">
                    <label class="checkbox-label">
                        <input type="checkbox" name="lembrar">
                        <span>Manter conectado</span>
                    </label>
                </div>

                <button class="botao botao-largo" type="submit">Entrar na conta</button>
            </form>

            <p class="form-rodape">Ainda não tem cadastro? <a href="index.php?controller=vidalab&action=cadastro">Criar conta</a></p>

            
        </section>
    </main>

    <!-- =========================================================
         RODAPÉ
         ========================================================= -->
    <footer class="rodape" id="contato">
        <div class="container rodape-grid">
            <div>
                <a class="marca marca-rodape" href="index.php?controller=vidalab&action=inicio">
                    <span class="marca-icone">✚</span>
                    <span><strong>VidaLab</strong><small>Análises Clínicas</small></span>
                </a>
                <p class="rodape-desc">Excelência em medicina diagnóstica com acolhimento, agilidade e precisão nos resultados.</p>
            </div>
            <div>
                <h4>Links Rápidos</h4>
                <ul>
                    <li><a href="index.php?controller=vidalab&action=inicio">Início</a></li>
                    <li><a href="#sobre">Sobre o Laboratório</a></li>
                    <li><a href="index.php?controller=vidalab&action=exames">Lista de Exames</a></li>
                    <li><a href="#unidades">Nossas Unidades</a></li>
                </ul>
            </div>
            <div>
                <h4>Atendimento</h4>
                <ul>
                    <li>📞 (61) 3333-4444</li>
                    <li>💬 (61) 99999-9999</li>
                    <li>✉️ contato@vidalab.com.br</li>
                    <li>Resp. Técnico: Dr. Nome Exemplo - CRF 0000</li>
                </ul>
            </div>
        </div>
        <div class="rodape-base">
            <p>&copy; 2026 VidaLab Análises Clínicas. Todos os direitos reservados.  </p>
            feito por <span>Jenifer</span>
        </div>
    </footer>

</body>
</html>

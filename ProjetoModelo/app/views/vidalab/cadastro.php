<?php
$baseUrl = '/ProjetoModelo';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - VidaLab</title>
    <link rel="shortcut icon" href="<?= $baseUrl ?>/public/vidalab/img_favicon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/vidalab/login.css">
</head>
<body>
    <!-- =========================================================
         CABEÇALHO E MENU PRINCIPAL
         ========================================================= -->
    <header class="cabecalho">
        <div class="container cabecalho-conteudo">
            <a class="marca" href="<?= $baseUrl ?>/index.php?controller=vidalab&action=inicio">
                <span class="marca-icone">✚</span>
                <span><strong>VidaLab</strong><small>Análises Clínicas</small></span>
            </a>
            <nav class="menu-navegacao">
                <a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=inicio">Início</a>
                <a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=inicio#sobre">Sobre</a>
                <a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=exames">Exames</a>
                <a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=inicio#unidades">Unidades</a>
                <a href="<?= $baseUrl ?>/index.php?controller=usuario&action=index">Gerenciar Usuários</a>
                <a href="#contato">Contato</a>
                <a class="botao-resultados" href="https://SEU-LINK-DE-RESULTADOS.com.br" target="_blank" rel="noopener">Resultados Online</a>
                <a href="<?= $baseUrl ?>/index.php?controller=login&action=index">Login</a>
                <a class="ativo botao-nav" href="<?= $baseUrl ?>/index.php?controller=vidalab&action=cadastro">Cadastre-se</a>
            </nav>
        </div>
    </header>

    <main class="fundo-formulario">
        <section class="formulario formulario-cadastro">
            <div class="form-icone">＋</div>
            <span class="etiqueta">FAÇA SEU CADASTRO</span>
            <h1>Crie sua conta</h1>
            <p class="form-descricao">Preencha os campos abaixo para conhecer a área do paciente.</p>
            <?php if (!empty($sucesso)): ?>
                <div class="mensagem-sucesso"><?= htmlspecialchars($sucesso, ENT_QUOTES, "UTF-8") ?></div>
            <?php endif; ?>
            <?php if (!empty($erro)): ?>
                <div class="mensagem-erro"><?= htmlspecialchars($erro, ENT_QUOTES, "UTF-8") ?></div>
            <?php endif; ?>
            <form action="<?= $baseUrl ?>/index.php?controller=vidalab&action=cadastro" method="post">
                <label for="nome">Nome completo</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000">
                <label for="nascimento">Data de nascimento</label>
                <input type="date" id="nascimento" name="nascimento">
                <label for="senha">Crie uma senha</label>
                <input type="password" id="senha" name="senha" placeholder="Crie uma senha" required>
                <button class="botao botao-largo" type="submit">Criar cadastro</button>
            </form>
            <p class="form-rodape">Já possui cadastro? <a href="<?= $baseUrl ?>/index.php?controller=login&action=index">Fazer login</a></p>
        </section>
    </main>

    <!-- =========================================================
         RODAPÉ
         ========================================================= -->
    <footer class="rodape" id="contato">
        <div class="container rodape-grid">
            <div>
                <a class="marca marca-rodape" href="<?= $baseUrl ?>/index.php?controller=vidalab&action=inicio">
                    <span class="marca-icone">✚</span>
                    <span><strong>VidaLab</strong><small>Análises Clínicas</small></span>
                </a>
                <p class="rodape-desc">Excelência em medicina diagnóstica com acolhimento, agilidade e precisão nos resultados.</p>
            </div>
            <div>
                <h4>Links Rápidos</h4>
                <ul>
                    <li><a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=inicio">Início</a></li>
                    <li><a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=inicio#sobre">Sobre o Laboratório</a></li>
                    <li><a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=exames">Lista de Exames</a></li>
                    <li><a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=inicio#unidades">Nossas Unidades</a></li>
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
            <p>&copy; 2026 VidaLab Análises Clínicas. Todos os direitos reservados.</p>
            feito por <span>Jenifer</span>
        </div>
    </footer>
</body>
</html>
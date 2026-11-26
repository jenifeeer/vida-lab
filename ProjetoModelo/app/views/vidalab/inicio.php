<?php
$baseUrl = '/ProjetoModelo';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VidaLab - Análises Clínicas</title>
    <meta name="description" content="Exames laboratoriais com atendimento humanizado, qualidade e confiança. Agende seu exame pelo WhatsApp.">
    <link rel="icon" type="image/png" href="<?= $baseUrl ?>/public/vidalab/img_favicon/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $baseUrl ?>/public/vidalab/index.css">
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
                <a class="ativo" href="<?= $baseUrl ?>/index.php?controller=vidalab&action=inicio">Início</a>
                <a href="#sobre">Sobre</a>
                <a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=exames">Exames</a>
                <a href="#unidades">Unidades</a>
                <a href="<?= $baseUrl ?>/index.php?controller=usuario&action=index">Gerenciar Usuários</a>
                <a href="#contato">Contato</a>
                <a class="botao-resultados" href="https://SEU-LINK-DE-RESULTADOS.com.br" target="_blank" rel="noopener">Resultados Online</a>
                <a href="<?= $baseUrl ?>/index.php?controller=login&action=index">Login</a>
                <a class="botao-nav" href="<?= $baseUrl ?>/index.php?controller=vidalab&action=cadastro">Cadastre-se</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- =========================================================
             BANNER PRINCIPAL (HERO)
             ========================================================= -->
        <section class="banner">
            <div class="container banner-grid">
                <div class="banner-conteudo">
                    <span class="etiqueta">CUIDAR DA SAÚDE É PRIORIDADE</span>
                    <h1>Seu cuidado começa com um <em>bom diagnóstico.</em></h1>
                    <p>Exames laboratoriais com atendimento humanizado, tecnologia de ponta e confiança em cada etapa.</p>
                    <div class="acoes">
                        <a class="botao" href="<?= $baseUrl ?>/index.php?controller=vidalab&action=exames">Conheça nossos exames</a>
                        <!-- [SUBSTITUIR: Troque 5561999999999 pelo WhatsApp real do laboratório] -->
                        <a class="botao botao-contorno" href="https://wa.me/5561999999999" target="_blank" rel="noopener">Agendar pelo WhatsApp</a>
                    </div>
                </div>

                <div class="banner-ilustracao" aria-label="Atendimento humanizado no VidaLab">
                    <div class="circulo-fundo"></div>
                    <!-- [SUBSTITUIR: Salve a foto real na pasta img_banner/ e ajuste o caminho se desejar] -->
                    <img src="<?= $baseUrl ?>/public/vidalab/img_banner/profissional_saude.jpg" alt="Profissional de saúde sorrindo em atendimento no VidaLab" class="foto-banner">
                    <div class="selo">
                        <strong>100%</strong>
                        <span>Compromisso<br>com você</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================
             FAIXA DE INFORMAÇÕES RÁPIDAS
             ========================================================= -->
        <section class="container">
            <div class="faixa-info">
                <div class="info-item">
                    <span class="info-icone">◷</span>
                    <!-- [SUBSTITUIR: Ajuste para o horário real de coleta do cliente] -->
                    <p><strong>Horário de Coleta</strong><small>Seg a Sex: 06h30 às 17h | Sáb: 07h às 11h</small></p>
                </div>
                <a href="#unidades" class="info-item info-link">
                    <span class="info-icone">📍</span>
                    <p><strong>Fácil Acesso</strong><small>Consulte nossas unidades e endereços</small></p>
                </a>
                <div class="info-item">
                    <span class="info-icone">♡</span>
                    <p><strong>Atendimento Humano</strong><small>Coleta infantil e domiciliar com agendamento</small></p>
                </div>
            </div>
        </section>

        <!-- =========================================================
             SEÇÃO SOBRE / DIFERENCIAIS DO LABORATÓRIO
             ========================================================= -->
        <section class="secao" id="sobre">
            <div class="container">
                <div class="titulo-secao">
                    <span class="etiqueta">CONHEÇA A VIDALAB</span>
                    <h2>Saúde e confiança em cada exame</h2>
                    <p>Unimos tecnologia diagnóstica de precisão e uma equipe acolhedora para oferecer resultados rápidos, seguros e claros para você e sua família.</p>
                </div>
                <div class="sobre-grid">
                    <article class="sobre-card">
                        <span class="card-icone">♧</span>
                        <h3>Cuidado com as pessoas</h3>
                        <p>Atendimento respeitoso e acolhedor para adultos, crianças e idosos durante todo o processo de coleta.</p>
                    </article>
                    <article class="sobre-card">
                        <span class="card-icone">⌕</span>
                        <h3>Informação clara</h3>
                        <p>Orientações organizadas sobre preparo, tempo de jejum e prazos para facilitar o seu atendimento.</p>
                    </article>
                    <article class="sobre-card">
                        <span class="card-icone">✓</span>
                        <h3>Qualidade e precisão</h3>
                        <p>Equipamentos modernos e rigoroso controle técnico para garantir diagnósticos altamente confiáveis.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- =========================================================
             SEÇÃO EXAMES MAIS PROCURADOS E CONVÊNIOS
             ========================================================= -->
        <section class="secao secao-clara">
            <div class="container">
                <div class="titulo-secao">
                    <span class="etiqueta">NOSSOS SERVIÇOS</span>
                    <h2>Exames mais procurados</h2>
                    <p>Confira alguns dos exames realizados diariamente em nossas unidades e por coleta domiciliar.</p>
                </div>
                <div class="cards">
                    <article class="exame-card">
                        <span class="exame-icone">🩸</span>
                        <h3>Hemograma completo</h3>
                        <p>Avalia diferentes componentes do sangue para check-up geral e acompanhamento médico.</p>
                        <a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=exames">Ver detalhes →</a>
                    </article>
                    <article class="exame-card">
                        <span class="exame-icone">💧</span>
                        <h3>Exame de urina</h3>
                        <p>Auxilia na avaliação da função renal e na detecção precoce de infecções urinárias.</p>
                        <a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=exames">Ver detalhes →</a>
                    </article>
                    <article class="exame-card">
                        <span class="exame-icone">🧪</span>
                        <h3>Glicemia</h3>
                        <p>Verifica a quantidade de glicose no sangue para prevenção e controle do diabetes.</p>
                        <a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=exames">Ver detalhes →</a>
                    </article>
                </div>

                <!-- Lista de Convênios Atendidos -->
                <div class="convenios-bloco">
                    <p class="convenios-titulo">Convênios atendidos e condições especiais:</p>
                    <div class="convenios-lista">
                        <span class="convenio-item">Unimed</span>
                        <span class="convenio-item">Bradesco Saúde</span>
                        <span class="convenio-item">Amil</span>
                        <span class="convenio-item">SulAmérica</span>
                        <span class="convenio-item destaque-particular">Atendimento Particular</span>
                    </div>
                </div>

                <div class="centro">
                    <a class="botao" href="<?= $baseUrl ?>/index.php?controller=vidalab&action=exames">Ver todos os exames</a>
                </div>
            </div>
        </section>

        <!-- =========================================================
             SEÇÃO NOSSAS UNIDADES
             ========================================================= -->
        <section class="secao" id="unidades">
            <div class="container">
                <div class="titulo-secao">
                    <span class="etiqueta">ONDE ESTAMOS</span>
                    <h2>Nossas Unidades</h2>
                    <p>Ambientes modernos, climatizados e de fácil acesso para atender você com conforto.</p>
                </div>

                <div class="unidades-grid">
                    <!-- Unidade 1 -->
                    <article class="unidade-card">
                        <div class="unidade-img-wrapper">
                            <img src="<?= $baseUrl ?>/public/vidalab/img_unidades/unidade001.avif" alt="Recepção da Unidade Centro VidaLab">
                        </div>
                        <div class="unidade-info">
                            <span class="unidade-tag">Matriz</span>
                            <h3>Unidade Centro</h3>
                            <p>Av. Principal, 1250 - Sala 04, Centro</p>
                            <small>Seg a Sex: 06h30 às 17h | Sáb: 07h às 11h</small>
                            <a href="https://maps.google.com" target="_blank" rel="noopener" class="link-mapa">Ver no Google Maps →</a>
                        </div>
                    </article>

                    <!-- Unidade 2 -->
                    <article class="unidade-card">
                        <div class="unidade-img-wrapper">
                            <img src="<?= $baseUrl ?>/public/vidalab/img_unidades/unidade02.avif" alt="Sala de coleta da Unidade Jardim das Acácias">
                        </div>
                        <div class="unidade-info">
                            <span class="unidade-tag">Coleta Infantil</span>
                            <h3>Unidade Jardim das Acácias</h3>
                            <p>Rua das Flores, 480 - Jardim das Acácias</p>
                            <small>Seg a Sex: 06h30 às 16h | Sáb: 07h às 11h</small>
                            <a href="https://maps.google.com" target="_blank" rel="noopener" class="link-mapa">Ver no Google Maps →</a>
                        </div>
                    </article>

                    <!-- Unidade 3 -->
                    <article class="unidade-card">
                        <div class="unidade-img-wrapper">
                            <img src="<?= $baseUrl ?>/public/vidalab/img_unidades/unidade03.avif" alt="Atendimento da Unidade Águas Lindas">
                        </div>
                        <div class="unidade-info">
                            <span class="unidade-tag">Atendimento Ágil</span>
                            <h3>Unidade Parque das Águas</h3>
                            <p>Av. Comercial, Quadra 12 - Lote 08</p>
                            <small>Seg a Sex: 06h30 às 17h | Sáb: 07h às 11h</small>
                            <a href="https://maps.google.com" target="_blank" rel="noopener" class="link-mapa">Ver no Google Maps →</a>
                        </div>
                    </article>
                </div>
            </div>
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
                    <li><a href="#sobre">Sobre o Laboratório</a></li>
                    <li><a href="<?= $baseUrl ?>/index.php?controller=vidalab&action=exames">Lista de Exames</a></li>
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
            <p>&copy; 2026 VidaLab Análises Clínicas. Todos os direitos reservados.</p>
            feito por <span>Jenifer</span>
        </div>
    </footer>

</body>
</html>
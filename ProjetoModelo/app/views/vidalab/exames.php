
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exames e Check-ups - VidaLab Análises Clínicas</title>
    <meta name="description" content="Conheça nossos exames laboratoriais e pacotes de check-up. Agende rápido pelo WhatsApp com atendimento humanizado.">
    
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://w3.org' viewBox='0 0 100 100'><defs><linearGradient id='g' x1='0' y1='0' x2='1' y2='1'><stop offset='0%' stop-color='%230f766e'/><stop offset='100%' stop-color='%230ea5e9'/></linearGradient></defs><rect width='100' height='100' rx='22' fill='url(%23g)'/><path d='M42 22h16v20h20v16H58v20H42V58H22V42h20z' fill='%23ffffff'/></svg>">
    <link rel="icon" type="image/png" href="public/vidalab/img_favicon/favicon.png">
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link href="https://googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/vidalab/index.css">
</head>
<body>

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
                <a class="ativo" href="index.php?controller=vidalab&action=exames">Exames</a>
                <a href="index.php?controller=vidalab&action=inicio#unidades">Unidades</a>
                <a href="#contato">Contato</a>
                <a class="botao-resultados" href="https://SEU-LINK-DE-RESULTADOS.com.br" target="_blank" rel="noopener">Resultados Online</a>
                <a href="index.php?controller=login&action=index">Login</a>
                <a class="botao-nav" href="index.php?controller=vidalab&action=cadastro">Cadastre-se</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- =========================================================
             TOPO DA PÁGINA (PROPOSTA DE VALOR)
             ========================================================= -->
        <section class="pagina-topo">
            <div class="container">
                <span class="etiqueta">CATÁLOGO DE EXAMES E CHECK-UPS</span>
                <h1>Exames rápidos, seguros e sem complicação</h1>
                <p>Atendemos convênios e particular com valores acessíveis. Escolha seu exame abaixo e agende direto pelo WhatsApp em poucos segundos.</p>
                <div class="topo-badges">
                    <span>✓ Coleta sem fila</span>
                    <span>✓ Laudo online rápido</span>
                    <span>✓ Atendimento domiciliar</span>
                </div>
            </div>
        </section>

        <!-- =========================================================
             PACOTES DE CHECK-UP (DESTAQUE DE VENDAS)
             ========================================================= -->
        <section class="secao secao-clara">
            <div class="container">
                <div class="titulo-secao">
                    <span class="etiqueta">MAIS VANTAGEM PARA VOCÊ</span>
                    <h2>Pacotes de Check-up Preventivo</h2>
                    <p>Reúna os principais exames de rotina em uma única coleta com condições especiais para atendimento particular.</p>
                </div>

                <div class="pacotes-grid">
                    <!-- Pacote 1 -->
                    <article class="pacote-card">
                        <span class="pacote-nivel">Básico</span>
                        <h3>Check-up Essencial</h3>
                        <p class="pacote-desc">Ideal para avaliação anual rápida e controle geral da saúde.</p>
                        <ul class="pacote-lista">
                            <li>✓ Hemograma Completo</li>
                            <li>✓ Glicemia em Jejum</li>
                            <li>✓ Colesterol Total e Frações</li>
                            <li>✓ Triglicerídeos</li>
                            <li>✓ Urina Tipo 1</li>
                        </ul>
                        <a class="botao botao-contorno botao-largo" href="https://wa.me." target="_blank" rel="noopener">Consultar valor e agendar</a>
                    </article>

                    <!-- Pacote 2 (Destaque) -->
                    <article class="pacote-card pacote-destaque">
                        <div class="faixa-popular">MAIS PROCURADO</div>
                        <span class="pacote-nivel">Completo</span>
                        <h3>Check-up Saúde Total</h3>
                        <p class="pacote-desc">Investigação completa de vitaminas, metabolismo, rins e fígado.</p>
                        <ul class="pacote-lista">
                            <li>✓ Todos os exames do Essencial</li>
                            <li>✓ Vitamina D e Vitamina B12</li>
                            <li>✓ TSH e T4 Livre (Tireoide)</li>
                            <li>✓ Ureia, Creatinina, TGO e TGP</li>
                            <li>✓ Ferritina e Ferro Sérico</li>
                        </ul>
                        <a class="botao botao-largo" href="https://wa.me." target="_blank" rel="noopener">Agendar Check-up Total</a>
                    </article>

                    <!-- Pacote 3 -->
                    <article class="pacote-card">
                        <span class="pacote-nivel">Especial</span>
                        <h3>Check-up Kids</h3>
                        <p class="pacote-desc">Coleta humanizada com equipe especializada no público infantil.</p>
                        <ul class="pacote-lista">
                            <li>✓ Hemograma Completo</li>
                            <li>✓ Glicemia e Ferro Sérico</li>
                            <li>✓ Urina Tipo 1</li>
                            <li>✓ Parasitológico de Fezes</li>
                            <li>✓ Certificado de Coragem</li>
                        </ul>
                        <a class="botao botao-contorno botao-largo" href="https://wa.me." target="_blank" rel="noopener">Consultar valor e agendar</a>
                    </article>
                </div>
            </div>
        </section>

        <!-- =========================================================
             EXAMES INDIVIDUAIS
             ========================================================= -->
        <section class="secao">
            <div class="container">
                <div class="titulo-secao">
                    <span class="etiqueta">EXAMES INDIVIDUAIS</span>
                    <h2>Conheça nossos exames</h2>
                    <p>Veja detalhes de preparo e prazo dos exames mais solicitados pelos médicos.</p>
                </div>

                <div class="cards cards-exames">
                    <!-- Exame 1 -->
                    <article class="exame-card exame-venda">
                        <div class="exame-topo">
                            <span class="exame-icone">🩸</span>
                            <span class="tag">Exame de sangue</span>
                        </div>
                        <h3>Hemograma completo</h3>
                        <p>Analisa as células do sangue (hemácias, leucócitos e plaquetas) para investigar anemias, infecções e alergias.</p>
                        <div class="exame-meta">
                            <span>🍽️ <strong>Jejum:</strong> Não obrigatório</span>
                            <span>⚡ <strong>Resultado:</strong> Mesmo dia</span>
                        </div>
                        <a class="botao-exame" href="https://wa.me." target="_blank" rel="noopener">Agendar exame →</a>
                    </article>

                    <!-- Exame 2 -->
                    <article class="exame-card exame-venda">
                        <div class="exame-topo">
                            <span class="exame-icone">🧪</span>
                            <span class="tag">Exame de sangue</span>
                        </div>
                        <h3>Glicemia</h3>
                        <p>Mede a concentração de glicose no sangue para diagnóstico, prevenção e acompanhamento do diabetes.</p>
                        <div class="exame-meta">
                            <span>🍽️ <strong>Jejum:</strong> 8 a 12 horas</span>
                            <span>⚡ <strong>Resultado:</strong> Mesmo dia</span>
                        </div>
                        <a class="botao-exame" href="https://wa.me." target="_blank" rel="noopener">Agendar exame →</a>
                    </article>

                    <!-- Exame 3 -->
                    <article class="exame-card exame-venda">
                        <div class="exame-topo">
                            <span class="exame-icone">💧</span>
                            <span class="tag tag-azul">Exame de urina</span>
                        </div>
                        <h3>Urina tipo 1</h3>
                        <p>Avalia características físicas, químicas e elementos encontrados na urina para saúde renal e urinária.</p>
                        <div class="exame-meta">
                                                <!-- Exame 3 -->
                    <article class="exame-card exame-venda">
                        <div class="exame-topo">
                            <span class="exame-icone">💧</span>
                            <span class="tag tag-azul">Exame de urina</span>
                        </div>
                        <h3>Urina tipo 1</h3>
                        <p>Avalia características físicas, químicas e elementos encontrados na urina para saúde renal e urinária.</p>
                        <div class="exame-meta">
                            <span>🍽️ <strong>Jejum:</strong> Não necessário</span>
                            <span>⚡ <strong>Resultado:</strong> Mesmo dia</span>
                        </div>
                        <a class="botao-exame" href="https://wa.me." target="_blank" rel="noopener">Agendar exame →</a>
                    </article>

                    <!-- Exame 4 -->
                    <article class="exame-card exame-venda">
                        <div class="exame-topo">
                            <span class="exame-icone">🧬</span>
                            <span class="tag">Exame de sangue</span>
                        </div>
                        <h3>Colesterol Total e Frações</h3>
                        <p>Verifica os níveis de colesterol (HDL, LDL, VLDL) para prevenção de doenças cardiovasculares.</p>
                        <div class="exame-meta">
                            <span>🍽️ <strong>Jejum:</strong> Conforme pedido médico</span>
                            <span>⚡ <strong>Resultado:</strong> Até 24h</span>
                        </div>
                        <a class="botao-exame" href="https://wa.me." target="_blank" rel="noopener">Agendar exame →</a>
                    </article>

                    <!-- Exame 5 -->
                    <article class="exame-card exame-venda">
                        <div class="exame-topo">
                            <span class="exame-icone">🥼</span>
                            <span class="tag tag-ambar">Exame de fezes</span>
                        </div>
                        <h3>Parasitológico de fezes</h3>
                        <p>Pesquisa a presença de parasitas intestinais em amostras de fezes com análise microscópica precisa.</p>
                        <div class="exame-meta">
                            <span>🍽️ <strong>Jejum:</strong> Não necessário</span>
                            <span>⚡ <strong>Resultado:</strong> Até 24h</span>
                        </div>
                        <a class="botao-exame" href="https://wa.me." target="_blank" rel="noopener">Agendar exame →</a>
                    </article>

                    <!-- Exame 6 -->
                    <article class="exame-card exame-venda">
                        <div class="exame-topo">
                            <span class="exame-icone">🔬</span>
                            <span class="tag">Exame de sangue</span>
                        </div>
                        <h3>Vitamina D (25-Hidroxi)</h3>
                        <p>Mede a reserva de vitamina D no organismo, essencial para imunidade, saúde óssea e disposição.</p>
                        <div class="exame-meta">
                            <span>🍽️ <strong>Jejum:</strong> Não obrigatório</span>
                            <span>⚡ <strong>Resultado:</strong> Até 48h</span>
                        </div>
                        <a class="botao-exame" href="https://wa.me." target="_blank" rel="noopener">Agendar exame →</a>
                    </article>
                </div>

                <!-- Caixa de Aviso Médico -->
                <div class="aviso-caixa">
                    <span class="aviso-icone">⚠️</span>
                    <div>
                        <strong>Importante:</strong> A necessidade de jejum, preparo e horário de coleta pode variar conforme o pedido médico e medicamentos em uso. Confirme as orientações com nossa equipe antes da coleta. As descrições acima são informativas e não substituem orientação médica.
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================
             COMO FUNCIONA O ATENDIMENTO
             ========================================================= -->
        <section class="secao secao-clara">
            <div class="container">
                <div class="titulo-secao">
                    <span class="etiqueta">SIMPLES E RÁPIDO</span>
                    <h2>Como funciona o atendimento?</h2>
                    <p>Do agendamento ao resultado online, tudo pensado para economizar o seu tempo.</p>
                </div>

                <div class="passos">
                    <div class="passo-card">
                        <b>01</b>
                        <h3>Escolha o exame</h3>
                        <p>Selecione o exame ou envie a foto do seu pedido médico pelo nosso WhatsApp.</p>
                    </div>
                    <div class="passo-card">
                        <b>02</b>
                        <h3>Confirme o preparo</h3>
                        <p>Nossa equipe informa o valor, convênios aceitos e o tempo de jejum necessário.</p>
                    </div>
                    <div class="passo-card">
                        <b>03</b>
                        <h3>Coleta rápida</h3>
                        <p>Compareça à unidade mais próxima ou agende nossa coleta domiciliar no seu endereço.</p>
                    </div>
                </div>

                <!-- Chamada Final para Orçamento -->
                <div class="cta-orcamento">
                    <div>
                        <h3>Não encontrou o seu exame na lista?</h3>
                        <p>Realizamos mais de 1.500 tipos de exames. Envie seu pedido médico e faça um orçamento rápido.</p>
                    </div>
                    <a class="botao" href="https://wa.me." target="_blank" rel="noopener">Enviar pedido no WhatsApp</a>
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
                    <li><a href="index.php?controller=vidalab&action=inicio#sobre">Sobre o Laboratório</a></li>
                    <li><a href="index.php?controller=vidalab&action=exames">Lista de Exames</a></li>
                    <li><a href="index.php?controller=vidalab&action=inicio#unidades">Nossas Unidades</a></li>
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
        </div>
    </footer>

</body>
</html>

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

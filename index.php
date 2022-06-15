<!DOCTYPE html>
<html lang="pt-BR" itemscope itemtype="https://schema.org/WebSite">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Projeto Prático do curso HTML5 e CSS3 Essentials</title>


    <meta name="description" content="Projeto Prático do curso HTML5 e CSS3 Essentials criado pela UpInside treinamentos">
    <meta name="robots" content="index, follow">
    <meta rel="canonical" href="https://atentoaqui.com/projects/html5_css3/">

    <meta itemprop="name" content="Projeto Prático do curso HTML5 e CSS3 Essentials">
    <meta itemprop="description" content="Projeto Prático do curso HTML5 e CSS3 Essentials criado pela UpInside treinamentos">
    <meta itemprop="image" content="https://atentoaqui.com/projects/html5_css3/_img/post.jpg">
    <meta itemprop="url" content="https://atentoaqui.com/projects/html5_css3/">

    <meta property="og:url" content="https://atentoaqui.com/projects/html5_css3/" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Projeto Prático do curso HTML5 e CSS3 Essentials" />
    <meta property="og:description" content="Projeto Prático do curso HTML5 e CSS3 Essentials criado pela UpInside treinamentos" />
    <meta property="og:image" content="https://atentoaqui.com/projects/html5_css3/_img/post.jpg" />
    <meta property="fb:app_id" content="2076887859153591">
    <meta property="og:locale" content="pt-BR">

    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <meta property="article:author" content="https://www.facebook.com/caacique">
    <meta property="article:publisher" content="https://www.facebook.com/caacique">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" content="https://atentoaqui.com">
    <meta name="twitter:creator" content="@UiraquitanP">
    <meta name="twitter:title" content="Projeto Prático do curso HTML5 e CSS3 Essentials">
    <meta name="twitter:description" content="Projeto Prático do curso HTML5 e CSS3 Essentials criado pela UpInside treinamentos">
    <meta name="twitter:image" content="https://atentoaqui.com/projects/html5_css3/_img/post.jpg">
    <meta name="twitter:url" content="https://atentoaqui.com/projects/html5_css3/">

    <link rel="stylesheet" href="_cdn/fonticon.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="_cdn/boot.css">
    <link rel="stylesheet" href="_cdn/style.css">
</head>

<body>

    <header class="main_header">
        <div class="main_header_content">
            <a href="#" class="logo">
                <img src="_img/logo.png" alt="Bem vindo ao projeto prático HTML5 e css3 Essentials" title="Bem vindo ao projeto prático HTML5 e css3 Essentials">
            </a>

            <nav class="main_header_content_menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Escola</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <nav class="main_header_content_menu_mobile">
                <ul>
                    <li class="main_header_content_menu_mobile_obj"><span class="icon-menu icon-notext"></span>
                        <ul class="main_header_content_menu_mobile_sub ds_none">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Escola</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_space">
                    <header>
                        <h1>Aqui você aprende tudo o que é necessário para trabalhar como um webmaster fullstack</h1>

                    </header>
                    <p>Domine o HTML5 e o CSS3 de uma vez por todas</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>

        <section class="main_blog">
            <header class="main_blog_header">
                <h1 class="icon-blog">Nossos Últimos Artigos</h1>
                <p>Aqui você encontra os artigos necessários para auxiliar na sua caminhada WEB.</p>
            </header>
            <?php
            for ($i = 1; $i <= 12; $i++) {
            ?>

                <article itemscope itemtype="https://schema.org/Article">
                    <a href="" itemprop="mainEntityOfPage">
                        <img src="_img/post.jpg" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply" itemprop="image">
                    </a>
                    <p><a href="" class="category">Categoria</a></p>
                    <h2><a href="" class="title"><span itemprop="headline">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.</span></a></h2>
                    <div class="main_blog_meta">
                        <p>
                            <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                                Por: <a href="https://www.facebook.com/caacique/" itemprop="url">
                                    <span itemprop="name">Uiraquitan Pessoa</span>
                                </a>
                            </span>

                            <span itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                                Via <a href="https://www.facebook.com/caacique/" itemprop="url">
                                    <span itemprop="name"> Atento Aqui</span>
                                </a>
                                <span itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                    <img src="_img/upinside.jpg" itemprop="url">
                                </span>
                            </span>

                        </p>
                        <time datetime="2022-06-08" itemprop="datePublished">08/06/2022</time>
                        <time datetime="2022-06-08" itemprop="dateModified" class="ds_none">08/06/2022</time>
                    </div>
                </article>
            <?php } ?>


        </section>

        <article class="main_optin">
            <div class="main_option_content">

                <header>
                    <h1>Quer receber todas as novidades em seu e-mail?</h1>
                    <p>Informe seu nome e e-mail no campo ao lado e clique em ok!</p>
                </header>

                <form action="">
                    <input type="text" name="" placeholder="Seu nome">
                    <input type="email" name="" placeholder="Seu e-mail">
                    <button type="submit">OK!</button>
                </form>
            </div>
        </article>

        <div itemscope itemtype="https://schema.org/Product">
            <section class="main_course">
                <header class="main_course_header">
                    <img src="_img/logo.png" alt="HTML5 e CSS3 Essentials" title="HTML5 e CSS3 Essentials" itemprop="image">
                    <h1 itemprop="name" class="icon-books">HTML5 e CSS3 Essentials</h1>
                    <p itemprop="description">Aprenda a trabalhar com HTML e CSS3 para desenvolver seus projetos e entregar paginas que estejam
                        dentro dos padrões da WEB seguindo as boas práticas</p>
                </header>

                <div class="main_course_content">
                    <article>
                        <header>
                            <h2>Curso 100% Online</h2>
                            <p>Todas as aulas são gravadas em estúdio profissional para que você tenha a máxima qualidade de
                                imagem e vídeo</p>
                        </header>
                    </article>

                    <article>
                        <header>
                            <h2>Suporte Especializado</h2>
                            <p>Este curso possui suporte diretamente com um profissional da nossa equipe oficial</p>
                        </header>
                    </article>

                    <article>
                        <header>
                            <h2>Mais de 100 aulas divididas em 10 módulos</h2>
                            <p>A modularização que você precisa para compreender de maneira mais objetiva</p>
                        </header>
                    </article>

                    <article>
                        <header>
                            <h2>Certificado reconhecido em mais de 17 países</h2>
                            <p>Ao concluir o curso você terá um certificado com reconhecimento em diversos países da América
                                Latina</p>
                        </header>
                    </article>
                </div>

                <div class="main_course_fullwidth">
                    <div class="main_course_hating_content">
                        <article class="main_course_hating_content_title" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                            <header>
                                <h2>Curso considerado <span itemprop="ratingValue">5</span> estrelas por nossos 100 alunos matriculados</h2>
                                <meta itemprop="ratingCount" content="6">
                                </mera>
                                <?php for ($i = 0; $i <= 5; $i++) { ?>
                                    <img src="_img/star.png" alt="Review do curo HTML5 e CSS3 Essentials" title="Review do curo HTML5 e CSS3 Essentials">
                                <?php } ?>
                            </header>
                        </article>

                        <section class="main_course_hating_content_comment">
                            <header>
                                <h2>Veja o que estão falando sobre o curso</h2>
                            </header>

                            <?php for ($j = 0; $j <= 5; $j++) { ?>
                                <article itemprop="review" itemscope itemtype="https://schema.org/Review">
                                    <header>
                                        <h3 itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name"> Uiraquitan Pessoa</span></h3>
                                        <p>06/06/2022</p>
                                        <?php for ($i = 0; $i <= 5; $i++) { ?>
                                            <img src="_img/star.png" alt="Review do curo HTML5 e CSS3 Essentials" title="Review do curo HTML5 e CSS3 Essentials">
                                        <?php } ?>
                                    </header>
                                    <p itemprop="description">O conteúdo é fantástico, eu não tinha conhecimento nenhum e agora estou desenvolvendo
                                        minhas
                                        páginas em HTML5 sem problemas</p>
                                </article>
                            <?php } ?>

                        </section>
                    </div>
                </div>
            </section>

            <div itemprop="manufacturer" itemscope itemtype="https://schema.org/Organization">
                <div class="main_school">
                    <section class="main_school_content">

                        <header class="main_school_header">
                            <h1>Bem vindo a <span itemprop="name"> UpInside Treinamentos</span></h1>
                            <p itemprop="description">A sua escola de programação e Marketind Digital</p>
                        </header>
                        <div class="main_school_content_left">
                            <article class="main_school_content_left_content">
                                <header>
                                    <p>
                                        <span class="icon-facebook"><a href="">Facebook</a></span>
                                        <span class="icon-google-plus2"><a href="">Google+</a></span>
                                        <span class="icon-twitter"><a href="">Twitter</a></span>
                                    </p>
                                    <h2>Tudo o que você precisa para ser um WebMaster Full Stack em um só lugar</h2>
                                </header>
                                <p>Desde 2010 a UpInside vem criando os melhores cursos do mercado, entregamos ao aluno
                                    conhecimento
                                    prático e testado sem enrolação. Você tem acesso a aulas com a melhor qualidade, recursos
                                    que
                                    aceleram seu aprendizado e muito mais...</p>
                                <p>Que tal estudar, e ter o certificado da escola eleita a melhor do Brasil com reconhecimento
                                    em
                                    mais
                                    de 17 países pela Latin American Quality Institute?
                                </p>
                            </article>

                            <section class="main_school_list">
                                <header>
                                    <h2>Confira nossos Prêmios</h2>
                                </header>

                                <article>
                                    <h3 class="icon-trophy" itemprop="award">Qualidade e Excelência - Master Pesquisas</h3>
                                </article>

                                <article>
                                    <h3 class="icon-trophy" itemprop="award">Qualidade e Atendimento - Master Pesquisas</h3>
                                </article>

                                <article>
                                    <h3 class="icon-trophy" itemprop="award">Prêmio Diamante - Master Pesquisas</h3>
                                </article>

                                <article>
                                    <h3 class="icon-trophy" itemprop="award">Estrela do Sul - Master Pesquisas</h3>
                                </article>

                                <article>
                                    <h3 class="icon-trophy" itemprop="award">Medalha de Ouro a Excelência - LAQI</h3>
                                </article>

                                <article>
                                    <h3 class="icon-trophy" itemprop="award">Brazil Quality Certification - LAQI</h3>
                                </article>

                                <article>
                                    <h3 class="icon-trophy" itemprop="award">Melhor Plataforma EAD - Digital Awards</h3>
                                </article>


                            </section>

                        </div>

                        <div class="main_school_content_right">
                            <img src="_img/upinside.jpg" alt="UpInside Treinamentos" title="UpInside Treinamentos" itemprop="image">
                        </div>

                        <article class="main_school_addrees">
                            <header>
                                <h2 class="icon-map2">Nos Encontre</h2>
                            </header>
                            <p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress"> <span itemprop="streetAddress"> Rua Huberto Rohden, 100</span> <span itemprop="postalCode">05886-140</span>- <span itemprop="addressCountry">Campeche</span> - <span itemprop="addressLocality">Florianópolis</span>
                                <span itemprop="addressRegion">SC</span> - <span itemprop="telephone"> +55 48 3371-5879</span>
                            </p>
                        </article>

                    </section>

                </div>

                <section class="main_tutor">
                    <div class="main_tutor_content" itemprop="member" itemscope itemtype="https://schema.org/Person">
                        <header>
                            <h1>Conheça o <span itemprop="name">Gustavo Web</span>, seu tutor nesse Curso</h1>
                            <p>Eu vou te ajudar a criar sua webpage em HTML% e CSS3</p>
                        </header>

                        <div class="main_tutor_content_img">
                            <img src="_img/gustavoweb.jpg" alt="Imagem do Gustavo WEB" title="Imagem do Gustavo WEB" itemprop="image">
                        </div>

                        <article class="main_tutor_content_history">

                            <header>
                                <h2>Formado em Ciencia da Computação e apaixonado por Web</h2>
                            </header>

                            <p itemprop="descroption">Como muitos, comecei na programação por conta dos jogos! Com o tempo, o amor pela programação foi
                                crescendo a ponto de tomar como profissão e me especializar na área. Hoje, com a bagagem que
                                tenho, compartilho meu conhecimento com todos os alunos da UpInside Treinamentos</p>

                        </article>

                        <section class="main_tutor_content_socialnetwork">

                            <header>
                                <h2>Me siga nas redes sociais</h2>
                            </header>

                            <article>
                                <h3><a class="icon-facebook" href="#" itemprop="url">Meu Facebook</a></h3>
                            </article>

                            <article>
                                <h3><a class="icon-facebook2" href="#" itemprop="url">Minha FanPage</a></h3>
                            </article>

                            <article>
                                <h3><a class="icon-google-plus2" href="#" itemprop="url">Meu Google+</a></h3>
                            </article>

                            <article>
                                <h3><a class="icon-instagram" href="#" itemprop="url">Meu Instagram</a></h3>
                            </article>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <section class="main_option_footer">
        <div class="main_option_footer_content">
            <header>
                <h1>Quer Receber nosso conteúdo exclusivo? Assine nossa lista VIP :)</h1>
            </header>

            <article>
                <header>
                    <h2><a href="" class="btn">Entrar para a lista VIP</a></h2>
                </header>
            </article>
        </div>

    </section>



    <section class="main_footer">
        <header>
            <h1>Quer saber mais ?</h1>
        </header>

        <article class="main_footer_our_pages">
            <header>
                <h2>Nossas Páginas</h2>
            </header>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">A Escola</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </article>

        <article class="main_footer_our_links">
            <header>
                <h2>Links Úteis</h2>
            </header>
            <ul>
                <li><a href="#">Política de privacidade</a></li>
                <li><a href="#">Aviso Legal</a></li>
                <li><a href="#">Termos de Uso</a></li>
            </ul>
        </article>

        <article class="main_footer_our_about">
            <header>
                <h2>Sobre o Projeto</h2>
            </header>
            <p>Aprenda a trabalhar com HTML5 e CSS3 para desenvolver seus projetos e entregar páginas que estejam
                dentro dos padrões da WEB seguindo as boas práticas!</p>
        </article>
    </section>

    <footer class="main_footer_rights">
        <p>Todos os direitos reservados &reg;</p>
    </footer>

    <script src="_cdn/js/jquery-3.6.0.min.js"></script>
    <script src="_cdn/js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YCRQXVVD9B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YCRQXVVD9B');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 10833694135 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10833694135"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-10833694135');
    </script>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2002360249916313');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2002360249916313&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
</body>

</html>
<?php get_header(); ?>

<main class="page<?php echo $post->post_name; ?>">
    <section class="banner-home">
        <div class="container">
            <div class="bl-header-wrap">
                <div class="row align-items-end">
                    <div class="col-md-7">
                        <h2 class="titulo maior"><strong>Lorem ipsum dolor sit amet consec tetur adi sicing elit. Accusantium providen.</strong></h2>
                        <div class="meta-post maior">
                            <?php includeTagPadrao('Shows'); ?>
                            <p class="texto-cinza escrito-por">Por: Lorem ipsum</p>
                            <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <a href="" class="anuncio-banner">
                            <canvas class="gradiente-bandeira"></canvas>
                            <div class="conteudo">
                                <h2 class="titulo menor"><strong>Editorial</strong></h2>
                                <p class="maior">Lorem ipsum dolor sit amet consec. amet consecamet consec. amet consec. et consec.et consec.</p>
                            </div>
                            <picture class="picture-padrao">
                                <img src="<?php echo getImg(); ?>" alt="">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <a href="">
                        <picture class="picture-padrao img-banner-destaque"><img src="<?php echo getImg(); ?>" alt=""></picture>
                    </a>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="cp-post">
                        <a href="">
                            <picture class="picture-padrao">
                                <img src="<?php echo getImg(); ?>" alt="">
                            </picture>
                        </a>
                        <div class="conteudo">
                            <a href="" class="titulo"><strong>Shuri the Queen e Júlia Brito.</strong></a>
                            <div class="meta-post">
                                <p class="texto-cinza escrito-por">Por: Lorem ipsum</p>
                                <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                            </div>
                            <p class="resumo-post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium provident cumque dolore quibusdamLorem ipsum dol.. sit consectetur Accusantium providen qu...
                                dolore quibusd arovident cumque dolore quibusdarovident cumque dolore quibusdarovident cumque dolore quibusda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bloco-post-destaque">
        <div class="container">
            <canvas class="gradiente-bandeira"></canvas>
            <div class="row">
                <div class="cp-post">
                    <div class="col-lg-6">
                        <a href="" class="titulo"><strong>Lorem, ipsum dolor sit amet adipisicing elit. Nobis porro quasi sit amet elit. Nobis porro quasi </strong></a>
                        <div class="meta-post maior">
                            <?php includeTagPadrao('Debate'); ?>
                            </a>
                            <p class="texto-cinza escrito-por">Por: Lorem ipsum</p>
                            <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                        </div>
                        <div class="resumo-post maior">
                            <p></p>
                        </div>
                        <div class="cta-link">
                            <?php include 'img/svg/seta-expansiva.svg'; ?>
                            <span>Leia mais</span>
                        </div>
                        <div class="col-lg-6">
                            <picture class="picture-padrao">
                                <?php echo getImg() ?>
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bloco-listagem-categoria items-3">
        <div class="header-listagem-categoria">
            <?php includeTagPadrao('Parada Livre'); ?>
            <canvas class="gradiente-bandeira"></canvas>
        </div>
        <div class="container">
            <div class="row">
                <?php for ($i = 0; $i < 3; $i++) { ?>
                    <div class="col-lg-4">
                        <a href="" class="cp-post">
                            <picture class="picture-padrao">
                                <img src="<?php echo getImg(); ?>" alt="">
                            </picture>
                            <div class="meta-post">
                                <p class="texto-cinza escrito-por">Por: Lorem ipsum</p>
                                <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                            </div>
                            <h3 class="titulo"><strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis porro quasi </strong></h3>
                            <div class="resumo-post maior">
                                <p></p>
                            </div>
                            <div class="cta-link">
                                <?php include 'img/svg/seta-expansiva.svg'; ?>
                                <span>Leia mais</span>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="bloco-listagem-categoria items-2">
        <div class="header-listagem-categoria">
            <?php includeTagPadrao('Shows'); ?>
            <canvas class="gradiente-bandeira"></canvas>
        </div>
        <div class="container">
            <div class="row">
                <div class="colg-lg-7">
                    <div class="cp-post">
                        <picture class="picture-padrao">
                            <img src="<?php echo getImg(); ?>" alt="">
                        </picture>
                        <div class="meta-post">
                            <p class="texto-cinza escrito-por">Por: Lorem ipsum</p>
                            <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                        </div>
                        <h3 class="titulo"><strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis porro quasi </strong></h3>
                        <div class="resumo-post maior">
                            <p></p>
                        </div>
                        <div class="cta-link">
                            <?php include 'img/svg/seta-expansiva.svg'; ?>
                            <span>Leia mais</span>
                        </div>
                    </div>
                </div>
                <div class="colg-lg-5">
                    <div class="cp-post">
                        <picture class="picture-padrao">
                            <img src="<?php echo getImg(); ?>" alt="">
                        </picture>
                        <div class="meta-post">
                            <p class="texto-cinza escrito-por">Por: Lorem ipsum</p>
                            <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                        </div>
                        <h3 class="titulo"><strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis porro quasi </strong></h3>
                        <div class="resumo-post maior">
                            <p></p>
                        </div>
                        <div class="cta-link">
                            <?php include 'img/svg/seta-expansiva.svg'; ?>
                            <span>Leia mais</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bloco-swiper-materias">
        <div class="swiper" e-swiper-materias>
            <div class="swiper-wrapper">
                <?php for ($i = 0; $i < 9; $i++) { ?>
                    <div class="swiper-slide">
                        <div class="cp-post">
                            <picture class="picture-padrao"><img src="<?php echo getImg(); ?>" alt=""></picture>
                            <div class="conteudo">
                                <div class="titulo menor"><strong>Shuri the Queen e Júlia Brito</strong></div>
                                <div class="meta-post">
                                    <?php includeTagPadrao('Shows'); ?>
                                    <p class="texto-cinza escrito-por">Por: Lorem ipsum</p>
                                    <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                                </div>
                                <p class="resumo-post menor">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium provident cumque dolore quibusdamLorem ipsum dolor sit amet consectetur...</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-button-prev"><?php include 'img/svg/seta-expansiva.svg'; ?></div>
            <div class="swiper-button-next"><?php include 'img/svg/seta-expansiva.svg'; ?></div>
        </div>
    </section>
    */ ?>
</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<main class="page<?php echo $post->post_name; ?>">

    <?php /* BANNER */ ?>
    <section class="banner-home">
        <div class="container">
            <div class="bl-header-wrap">
                <div class="row align-items-end">
                    <div class="col-lg-7 mb-lg-0 mb-4">
                        <div class="cp-post">
                            <a href="<?php echo get_the_permalink(16); ?>">
                                <h2 class="titulo maior"><strong><?php echo get_the_title(16) ?></strong></h2>
                            </a>
                            <a href="<?php echo get_the_permalink(16); ?>">
                                <picture class="picture-padrao img-banner-destaque display-mobile">
                                    <img loading="lazy" src="<?php echo get_field('imagem_destaque', 16)['sizes']['thumbnail']; ?>" alt="">
                                </picture>
                            </a>
                            <div class="conteudo">
                                <div class="meta-post maior">
                                    <?php includeTagPadraoLink('Debate'); ?>
                                    <div class="inner display-mobile">
                                        <p class="texto-cinza escrito-por">Por: Lorem ipsum</p>
                                        <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                                    </div>
                                </div>
                                <div class="resumo-post display-mobile">
                                    <p><?php echo get_field('resumo', 16) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-1">
                        <a s class="anuncio-banner">
                            <canvas class="gradiente-bandeira"></canvas>
                            <div class="conteudo">
                                <h2 class="titulo menor"><strong>Editorial</strong></h2>
                                <p class="maior">Lorem ipsum dolor sit amet consec. amet consecamet consec. amet consec. et consec.et consec.</p>
                            </div>
                            <picture class="picture-padrao">
                                <img loading="lazy" src="<?php echo get_field('imagem_destaque', 70)['sizes']['thumbnail']; ?>" alt="">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row display-desktop">
                <div class="col-lg-8 col-md-7">
                    <div class="cp-post">
                        <a href="<?php echo get_the_permalink(16); ?>">
                            <picture class="picture-padrao img-banner-destaque"><img src="<?php echo get_field('imagem_destaque', 16)['sizes']['thumbnail']; ?>" alt=""></picture>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="cp-post">
                        <a href="<?php echo get_the_permalink(58); ?>">
                            <picture class="picture-padrao">
                                <img loading="lazy" src="<?php echo get_field('imagem_destaque', 58)['sizes']['thumbnail']; ?>" alt="">
                            </picture>
                        </a>
                        <div class="conteudo com-padding">
                            <a href="<?php echo get_the_permalink(58); ?>">
                                <h3 class="titulo"><strong><?php echo get_the_title(58) ?></strong></h3>
                            </a>
                            <div class="meta-post">
                                <p class="texto-cinza escrito-por">Por: Lorem ipsum</p>
                                <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                            </div>
                            <p class="resumo-post"><?php echo get_field('resumo', 58); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php /* --- */ ?>

    <?php /* POST DESTAQUE */ ?>
    <section class="bl-post-destaque">
        <div class="container">
            <canvas class="linha gradiente-bandeira"></canvas>
            <div class="cp-post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="conteudo">
                            <a href="<?php echo get_the_permalink(61); ?>" class="titulo"><strong><?php echo get_the_title(61) ?></strong></a>
                            <div class="col-lg-6 display-mobile">
                                <a href="">
                                    <picture class="picture-padrao">
                                        <img loading="lazy" src="<?php echo get_field('imagem_destaque', 61)['sizes']['thumbnail'] ?>" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="meta-post maior">
                                <?php includeTagPadraoLink('Debate', 'd-sm-flex d-none'); ?>
                                <p class="texto-cinza escrito-por">Por: Lorem ipsum</p>
                                <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                            </div>
                            <div class="resumo-post exibir-6 maior">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas voluptate beatae, a minus commodi quo officia repellendus quod dolores voluptates vitae similique eaque porro ut pariatur repudiandae quaerat provident et.
                                    Quibusdam, optio sequi provident distinctio molestias illo ab tempore recusandae autem. Obcaecati quis dolorem itaque mollitia eius vel rerum quas possimus expedita, nam iusto eos, amet, totam animi quisquam praesentium?
                                    Culpa, facere officia. Hic libero, error accusantium vel molestiae magni ea asperiores nam voluptatum officia animi saepe non quisquam doloribus praesentium! Natus deserunt molestiae non tenetur ducimus dicta magni cum?
                                    Laborum cum molestiae, ducimus modi accusamus numquam tempora accusantium officiis architecto debitis ratione asperiores hic, sapiente porro? Pariatur aspernatur tenetur voluptatem architecto, modi dolorum, aliquam voluptas quod similique, amet optio.
                                </p>
                            </div>
                            <a href="<?php echo get_the_permalink(61); ?>" class="cta-link">
                                <?php include 'img/svg/seta-expansiva.svg'; ?>
                                <span>Leia mais</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 display-desktop">
                        <a href="<?php echo get_the_permalink(55); ?>">
                            <picture class="picture-padrao">
                                <img loading="lazy" src="<?php echo get_field('imagem_destaque', 61)['sizes']['thumbnail'] ?>" alt="">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php /* --- */ ?>

    <?php /* LISTAGEM CATEGORIA 3 ITEMS */ ?>
    <section class="bl-listagem-categoria items-3 px-bl-xs">
        <div class="container">
            <div class="header-listagem-categoria">
                <?php includeTagPadraoLink('Parada Livre'); ?>
                <canvas class="linha gradiente-bandeira"></canvas>
            </div>
            <div class="row px-bl-m">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="col-lg-4 col-6">
                        <a href="<?php echo get_the_permalink(64); ?>" class="cp-post categoria">
                            <picture class="picture-padrao">
                                <img loading="lazy" src="<?php echo get_field('imagem_destaque', 64)['sizes']['thumbnail']; ?>" alt="">
                            </picture>
                            <div class="conteudo">
                                <div class="meta-post">
                                    <p class="texto-cinza escrito-por">Por: Lorem ipsum</p>
                                    <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                                </div>
                                <h3 class="titulo"><strong><?php echo get_the_title(64) ?></strong></h3>
                                <div class="resumo-post maior exibir-3">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, qui quia. Obcaecati at inventore earum, quasi nostrum a quis neque quia sint quaerat, alias iure architecto veniam deleniti. Dolorum, error.</p>
                                </div>
                                <div class="cta-link">
                                    <?php include 'img/svg/seta-expansiva.svg'; ?>
                                    <span>Leia mais</span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php /* --- */ ?>

    <?php /* LISTAGEM CATEGORIA 2 ITEMS */ ?>
    <section class="bl-listagem-categoria items-2">
        <div class="container">
            <div class="header-listagem-categoria">
                <?php includeTagPadraoLink('Shows'); ?>
                <canvas class="linha gradiente-bandeira"></canvas>
            </div>
            <div class="row px-bl-m">
                <div class="col-lg-7 col-6">
                    <a href="<?php echo get_the_permalink(58); ?>" class="cp-post categoria">
                        <picture class="picture-padrao">
                            <img loading="lazy" src="<?php echo get_field('imagem_destaque', 58)['sizes']['thumbnail']; ?>" alt="">
                        </picture>
                        <div class="conteudo">
                            <div class="meta-post">
                                <p class="texto-cinza escrito-por">Por: Lorem ipsum</p>
                                <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                            </div>
                            <h3 class="titulo"><strong><?php echo get_the_title(58) ?></strong></h3>
                            <div class="resumo-post maior">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error minima amet et excepturi. Earum officia voluptatibus facere consectetur repellendus, ex alias labore dolorum, deserunt odio maxime mollitia totam architecto tempore!</p>
                            </div>
                            <div class="cta-link">
                                <?php include 'img/svg/seta-expansiva.svg'; ?>
                                <span>Leia mais</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-5 col-6">
                    <a href="<?php echo get_the_permalink(67); ?>" class="cp-post categoria">
                        <picture class="picture-padrao">
                            <img loading="lazy" src="<?php echo get_field('imagem_destaque', 67)['sizes']['thumbnail']; ?>" alt="">
                        </picture>
                        <div class="conteudo">
                            <div class="meta-post">
                                <p class="texto-cinza escrito-por">Por: Lorem ipsum</p>
                                <p class="texto-cinza data-publicacao">05 junho, 2023</p>
                            </div>
                            <h3 class="titulo"><strong><?php echo get_the_title(67) ?> </strong></h3>
                            <div class="resumo-post maior">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error minima amet et excepturi. Earum officia voluptatibus facere consectetur repellendus, ex alias labore dolorum, deserunt odio maxime mollitia totam architecto tempore!</p>
                            </div>
                            <div class="cta-link">
                                <?php include 'img/svg/seta-expansiva.svg'; ?>
                                <span>Leia mais</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php /* --- */ ?>

    <?php include '_swiper-mais-materias.php'; ?>

</main>

<?php get_footer(); ?>
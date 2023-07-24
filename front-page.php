<?php
get_header();
$banner = get_field('banner', $post->ID);
$conteudoFlexivel = get_field('conteudo_flexivel', $post->ID);

$idPostBanner = $banner['post_banner'][0];
$idPostApoio = $banner['post_apoio'][0];
?>

<main class="page<?php echo $post->post_name; ?>">
    <!-- Banner -->
    <section class="banner-home">
        <div class="container">
            <div class="bl-header-wrap">
                <div class="row align-items-end">
                    <div class="col-lg-7 mb-lg-0 mb-4">
                        <?php
                        if (!empty($idPostBanner)) {
                        ?>
                            <div class="cp-post">
                                <a href="<?php echo get_the_permalink($idPostBanner); ?>">
                                    <h2 class="titulo maior"><strong><?php echo get_the_title($idPostBanner) ?></strong></h2>
                                </a>
                                <a href="<?php echo get_the_permalink($idPostBanner); ?>">
                                    <picture class="picture-padrao img-banner-destaque display-mobile">
                                        <img loading="lazy" src="<?php echo get_field('imagem_destaque', $idPostBanner)['sizes']['thumbnail']; ?>" alt="">
                                    </picture>
                                </a>
                                <div class="conteudo">
                                    <div class="meta-post maior">
                                        <?php includeTagPadraoLink(get_the_terms($idPostBanner, 'category')[0]->term_id); ?>
                                        <div class="inner display-mobile">
                                            <p class="texto-cinza escrito-por">Por: <?php postAuthor($idPostBanner); ?></p>
                                            <p class="texto-cinza data-publicacao"><?php echo get_the_date('d F, Y', $idPostBanner); ?></p>
                                        </div>
                                    </div>
                                    <div class="resumo-post display-mobile">
                                        <p><?php echo get_field('resumo', $idPostBanner) ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <?php
                    if (!empty($banner['anuncio'] && $banner['anuncio']['exibir'])) {
                    ?>
                        <div class="col-lg-4 offset-lg-1">
                            <a s class="anuncio-banner">
                                <canvas class="gradiente-bandeira"></canvas>
                                <div class="conteudo">
                                    <?php
                                    if (!empty($banner['anuncio']['titulo_personalizado'])) {
                                    ?>
                                        <h2 class="titulo menor"><strong><?php echo $banner['anuncio']['titulo_personalizado']; ?></strong></h2>
                                    <?php
                                    } else if ($banner['anuncio']['link']['title']) {
                                    ?>
                                        <h2 class="titulo menor"><strong><?php echo $banner['anuncio']['link']['title']; ?></strong></h2>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if (!empty($banner['anuncio']['subtitulo_personalizado'])) {
                                    ?>
                                        <p class="maior"><?php echo $banner['anuncio']['subtitulo_personalizado']; ?></p>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <?php
                                if (!empty($banner['anuncio']['imagem'])) {
                                ?>
                                    <picture class="picture-padrao">
                                        <img loading="lazy" src="<?php echo $banner['anuncio']['imagem']['sizes']['thumbnail']; ?>" alt="">
                                    </picture>
                                <?php
                                }
                                ?>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="row display-desktop">
                <div class="col-lg-8 col-md-7">
                    <div class="cp-post">
                        <a href="<?php echo get_the_permalink($idPostBanner); ?>">
                            <picture class="picture-padrao img-banner-destaque"><img src="<?php echo get_field('imagem_destaque', $idPostBanner)['sizes']['thumbnail']; ?>" alt=""></picture>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="cp-post">
                        <a href="<?php echo get_the_permalink($idPostApoio); ?>">
                            <picture class="picture-padrao">
                                <img loading="lazy" src="<?php echo get_field('imagem_destaque', $idPostApoio)['sizes']['thumbnail']; ?>" alt="">
                            </picture>
                        </a>
                        <div class="conteudo com-padding">
                            <a href="<?php echo get_the_permalink($idPostApoio); ?>">
                                <h3 class="titulo"><strong><?php echo get_the_title($idPostApoio) ?></strong></h3>
                            </a>
                            <div class="meta-post">
                                <p class="texto-cinza escrito-por">Por: <?php postAuthor($idPostApoio); ?></p>
                                <p class="texto-cinza data-publicacao"><?php echo get_the_date('d F, Y', $idPostApoio); ?></p>
                            </div>
                            <p class="resumo-post"><?php echo get_field('resumo', $idPostApoio); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->

    <?php
    if (!empty($conteudoFlexivel)) {
        foreach ($conteudoFlexivel as $bloco) {
            switch ($bloco['acf_fc_layout']) {

                    // Matéria Destaque
                case 'materia_destaque':
                    $idMateria = $bloco['materia_destaque'];
                    include '_bloco-materia-destaque.php';
                    break;

                    // Blocos de categoria
                case 'bloco_categoria':
                    switch (count($bloco['materias'])) {

                            // 2 Matérias por bloco
                        case 2:
                            $idMateria1 = $bloco['materias'][0]['materia'];
                            $idMateria2 = $bloco['materias'][1]['materia'];
                            $idCategoria = $bloco['categoria'];
                            include '_bloco-categoria-2-materias.php';
                            break;

                            // 3 Matérias por bloco
                        case 3:
                            $materias = $bloco['materias'];
                            $idCategoria = $bloco['categoria'];
                            include '_bloco-categoria-3-materias.php';
                            break;
                    }
                    break;
            } // switch ($bloco['acf_fc_layout'])
        } // foreach ($conteudoFlexivel as $bloco) {
    } // if (!empty($conteudoFlexivel))

    include '_swiper-mais-materias.php';
    ?>
</main>

<?php get_footer(); ?>
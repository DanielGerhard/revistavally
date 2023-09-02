<!-- Banner -->
<section class="banner-home px-bl-l">
    <div class="container">
        <div class="bl-header-wrap">
            <div class="row align-items-center">
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
                        <a href="<?php echo $banner['anuncio']['link']['url']; ?>" class="anuncio-banner">
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
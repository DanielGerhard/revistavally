<?php $resumo = get_field('resumo', $idMateria); ?>

<section class="bl-post-destaque">
    <div class="container">
        <canvas class="linha gradiente-bandeira"></canvas>
        <div class="cp-post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="conteudo">
                        <a href="<?php echo get_the_permalink($idMateria); ?>" class="titulo"><strong><?php echo get_the_title($idMateria) ?></strong></a>
                        <div class="col-lg-6 display-mobile">
                            <a href="">
                                <picture class="picture-padrao">
                                    <img loading="lazy" src="<?php echo get_field('imagem_destaque', $idMateria)['sizes']['thumbnail'] ?>" alt="">
                                </picture>
                            </a>
                        </div>
                        <div class="meta-post maior">
                            <?php includeTagPadraoLink(get_the_terms($idPostBanner, 'category')[0]->name, 'd-sm-flex d-none'); ?>
                            <p class="texto-cinza escrito-por">Por: <?php postAuthor($idMateria); ?></p>
                            <p class="texto-cinza data-publicacao"><?php echo get_the_date('d F, Y', $idMateria); ?></p>
                        </div>
                        <div class="resumo-post exibir-6 maior">
                            <?php
                            if (!empty($resumo)) {
                            ?>
                                <p><?php echo $resumo; ?></p>
                            <?php
                            } else {
                            ?>
                                <p><?php echo substr(get_the_content($post = $idMateria), 0, 120); ?></p>
                            <?php
                            }
                            ?>
                        </div>
                        <a href="<?php echo get_the_permalink($idMateria); ?>" class="cta-link">
                            <?php include 'img/svg/seta-expansiva.svg'; ?>
                            <span>Leia mais</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 display-desktop">
                    <a href="<?php echo get_the_permalink($idMateria); ?>">
                        <picture class="picture-padrao">
                            <img loading="lazy" src="<?php echo get_field('imagem_destaque', $idMateria)['sizes']['thumbnail'] ?>" alt="">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$materiasRecomendadas = get_field('materias_recomendadas', FRONT_PAGE_ID)
/* SWIPPER MAIS MATÉRIAS */
?>
<section class="bl-swiper-materias">
    <div class="bl-header-wrap">
        <h2 class="titulo menor"><strong>Veja mais materias</strong></h2>
        <canvas class="linha gradiente-bandeira"></canvas>
    </div>
    <div class="container">
        <div class="inner-container">
            <div class="row justify-content-center px-bl-l">
                <div class="col-lg-10">
                    <div class="swiper" e-swiper-materias>
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($materiasRecomendadas as $materia) {
                                $idMateria = $materia['materia'];
                            ?>
                                <div class="swiper-slide">
                                    <a href="<?php echo get_the_permalink($idMateria); ?>" class="cp-post horizontal">
                                        <picture class="picture-padrao"><img src="<?php echo get_field('imagem_destaque', $idMateria)['sizes']['thumbnail']; ?>" alt=""></picture>
                                        <div class="conteudo">
                                            <h3 class="titulo menor"><strong><?php echo get_the_title($idMateria) ?></strong></h3>
                                            <div class="meta-post">
                                                <?php includeTagPadrao($idCategoria, 'menor'); ?>
                                                <div class="inner">
                                                    <p class="texto-cinza escrito-por">Por: <?php postAuthor($idMateria); ?></p>
                                                    <p class="texto-cinza data-publicacao"><?php echo get_the_date('d F, Y', $idMateria); ?></p>
                                                </div>
                                            </div>
                                            <p class="resumo-post menor">
                                                <?php
                                                if (!empty($resumo)) {
                                                ?>
                                                    <?php echo $resumo; ?>
                                                <?php
                                                } else {
                                                ?>
                                                    <?php echo substr(get_the_content($post = $idMateria), 0, 120); ?>
                                                <?php
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev display-desktop" e-swiper-materias-btn-prev><?php include 'img/svg/seta-expansiva.svg'; ?></div>
            <div class="swiper-button-next display-desktop" e-swiper-materias-btn-next><?php include 'img/svg/seta-expansiva.svg'; ?></div>
        </div>
    </div>
</section>
<?php /* --- */ ?>
<?php
$resumoMateria1 = get_field('resumo', $idMateria1);
$resumoMateria2 = get_field('resumo', $idMateria2);
?>

<!-- Bloco Categoria 2 materias -->
<section class="bl-listagem-categoria items-2">
    <div class="container">
        <div class="header-listagem-categoria">
            <?php includeTagPadraoLink($idCategoria); ?>
            <canvas class="linha gradiente-bandeira"></canvas>
        </div>
        <div class="row px-bl-m">
            <div class="col-lg-7 col-6">
                <a href="<?php echo get_the_permalink($idMateria1); ?>" class="cp-post categoria">
                    <picture class="picture-padrao">
                        <img loading="lazy" src="<?php echo get_field('imagem_destaque', $idMateria1)['sizes']['thumbnail']; ?>" alt="">
                    </picture>
                    <div class="conteudo">
                        <div class="meta-post">
                            <p class="texto-cinza escrito-por">Por: <?php postAuthor($idMateria1); ?></p>
                            <p class="texto-cinza data-publicacao"><?php echo get_the_date('d F, Y', $idMateria1); ?></p>
                        </div>
                        <h3 class="titulo"><strong><?php echo get_the_title($idMateria1) ?></strong></h3>
                        <div class="resumo-post maior">
                            <?php
                            if (!empty($resumoMateria1)) {
                            ?>
                                <p><?php echo $resumoMateria1; ?></p>
                            <?php
                            } else {
                            ?>
                                <p><?php echo substr(get_the_content($post = $idMateria1), 0, 120); ?></p>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="cta-link">
                            <?php include 'img/svg/seta-expansiva.svg'; ?>
                            <span>Leia mais</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-5 col-6">
                <a href="<?php echo get_the_permalink($idMateria2); ?>" class="cp-post categoria">
                    <picture class="picture-padrao">
                        <img loading="lazy" src="<?php echo get_field('imagem_destaque', $idMateria2)['sizes']['thumbnail']; ?>" alt="">
                    </picture>
                    <div class="conteudo">
                        <div class="meta-post">
                            <p class="texto-cinza escrito-por">Por: <?php postAuthor($idMateria2); ?></p>
                            <p class="texto-cinza data-publicacao"><?php echo get_the_date('d F, Y', $idMateria2); ?></p>
                        </div>
                        <h3 class="titulo"><strong><?php echo get_the_title($idMateria2) ?> </strong></h3>
                        <div class="resumo-post maior">
                            <?php
                            if (!empty($resumoMateria2)) {
                            ?>
                                <p><?php echo $resumoMateria2; ?></p>
                            <?php
                            } else {
                            ?>
                                <p><?php echo substr(get_the_content($post = $idMateria2), 0, 120); ?></p>
                            <?php
                            }
                            ?>
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
<!---->
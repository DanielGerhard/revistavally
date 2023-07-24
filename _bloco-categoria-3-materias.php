<!-- Bloco Categoria 2 materias -->
<section class="bl-listagem-categoria items-3 px-bl-xs">
    <div class="container">
        <div class="header-listagem-categoria">
            <?php includeTagPadraoLink($idCategoria); ?>
            <canvas class="linha gradiente-bandeira"></canvas>
        </div>
        <div class="row px-bl-m">
            <?php
            foreach ($materias as $materia) {
                $idMateria = $materia['materia'];
                $resumo = get_field('resumo', $idMateria);
            ?>
                <div class="col-lg-4 col-6">
                    <a href="<?php echo get_the_permalink($idMateria); ?>" class="cp-post categoria">
                        <picture class="picture-padrao">
                            <img loading="lazy" src="<?php echo get_field('imagem_destaque', $idMateria)['sizes']['thumbnail']; ?>" alt="">
                        </picture>
                        <div class="conteudo">
                            <div class="meta-post">
                                <p class="texto-cinza escrito-por">Por: <?php postAuthor($idMateria); ?></p>
                                <p class="texto-cinza data-publicacao"><?php echo get_the_date('d F, Y', $idMateria); ?></p>
                            </div>
                            <h3 class="titulo"><strong><?php echo get_the_title($idMateria) ?></strong></h3>
                            <div class="resumo-post maior exibir-3">
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
                            <div class="cta-link">
                                <?php include 'img/svg/seta-expansiva.svg'; ?>
                                <span>Leia mais</span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            } ?>
        </div>
    </div>
</section>
<!---->
<?php
get_header();
$imagemDestaque = get_field('imagem_destaque', $post->ID);
$blocoFullTexto = get_field('bloco_full_texto', 188);
$blocoTextoImg = get_field('bloco_texto_imagem', 188);
?>

<main class="post-style single-projeto">
    <section class="banner-projeto">
        <div class="bandeira-listrada">
            <canvas></canvas>
            <canvas></canvas>
            <canvas></canvas>
            <canvas></canvas>
            <canvas></canvas>
            <canvas></canvas>
        </div>
        <?php
        if (!empty($imagemDestaque)) {
        ?>
            <header class="imagem-destaque">
                <picture class="picture picture-padrao">
                    <img src="<?php echo $imagemDestaque['sizes']['large']; ?>" alt="">
                </picture>
                <div class="titulo-post cor-branco">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <h1 class="titulo extra-grande mt-0 mb-0"><strong><?php the_title(); ?></strong></h1>
                                <small class="mt-3">20 - 21 novembro</small>
                                <p class="mt-3 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ligula augue, eleifend vel fringilla eu, maximus in urna. Nulla in congue velit. Sed porttitor volutpat odio, nec venenatis sapien bibendum eget. Sed non enim vitae nunc pulvinar pulvinar ac nec ligula. Nam pelle</p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <?php
        } // if !empty $imagemDestaque
        ?>
    </section>

    <section class="bl-img-esquerda">
        <div class="container">
            <div class="row ">
                <div class="col-auto">
                    <?php
                    if (!empty($blocoTextoImg['titulo'])) {
                    ?>
                        <h2 class="titulo maior mb-4"><strong><?php echo $blocoFullTexto['titulo']; ?></strong></h2>
                    <?php
                    } // if !empty $blocoTextoImg['titulo']
                    ?>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-5">
                    <?php
                    if (!empty($blocoTextoImg['texto'])) {
                    ?>
                        <p class="paragrafo-padrao"><?php echo $blocoTextoImg['texto']; ?></p>
                    <?php
                    } // if !empty $blocoTextoImg['texto']
                    ?>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <?php
                    if (!empty($blocoTextoImg['imagem'])) {
                    ?>
                        <picture class="picture-padrao"><img src="<?php echo $blocoTextoImg['imagem']['sizes']['medium']; ?>" alt=""></picture>
                    <?php
                    } // if !empty $blocoTextoImg['imagem']
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="bl-img-esquerda full-height bg-auxiliar">
        <?php
        if (!empty($blocoTextoImg['imagem'])) {
        ?>
            <picture class="picture-padrao"><img src="<?php echo $blocoTextoImg['imagem']['sizes']['medium']; ?>" alt=""></picture>
        <?php
        } // if !empty $blocoTextoImg['imagem']
        ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 offset-lg-6">
                    <?php
                    if (!empty($blocoTextoImg['titulo'])) {
                    ?>
                        <h2 class="titulo maior mb-4 mt-0"><strong><?php echo $blocoFullTexto['titulo']; ?></strong></h2>
                    <?php
                    } // if !empty $blocoTextoImg['titulo']
                    ?>
                    <?php
                    if (!empty($blocoTextoImg['texto'])) {
                    ?>
                        <p class="paragrafo-padrao"><?php echo $blocoTextoImg['texto']; ?></p>
                    <?php
                    } // if !empty $blocoTextoImg['texto']
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="bl-full-img">
        <picture class="picture-padrao">
            <img src="<?php echo getImg(); ?>" alt="">
        </picture>
    </section>

    <section class="bl-full-texto">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php
                    if (!empty($blocoFullTexto['titulo'])) {
                    ?>
                        <h2 class="titulo maior t-center mb-4 mt-0"><strong><?php echo $blocoFullTexto['titulo']; ?></strong></h2>
                    <?php
                    } // if !empty $blocoFullTexto['titulo']

                    if (!empty($blocoFullTexto['texto'])) {
                    ?>
                        <p class="paragrafo-padrao"><?php echo $blocoFullTexto['texto']; ?></p>
                    <?php
                    } // if !empty $blocoFullTexto['texto']
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="bloco-galeria">
        <div class="container">
            <div class="row">
                <div class="galeria">
                    <a href="<?php echo getImg(); ?>" class="galeria__item galeria__item-maior" data-fancybox="galeria">
                        <picture class="picture-padrao"><img src="<?php echo getImg(); ?>" alt=""></picture>
                    </a>
                    <a href="<?php echo getImg(); ?>" class="galeria__item galeria__item-menor" data-fancybox="galeria">
                        <picture class="picture-padrao"><img src="<?php echo getImg(); ?>" alt=""></picture>
                    </a>
                    <a href="<?php echo getImg(); ?>" class="galeria__item galeria__item-menor" data-fancybox="galeria">
                        <picture class="picture-padrao"><img src="<?php echo getImg(); ?>" alt=""></picture>
                    </a>
                    <a href="<?php echo getImg(); ?>" class="galeria__item galeria__item-menor" data-fancybox="galeria">
                        <picture class="picture-padrao"><img src="<?php echo getImg(); ?>" alt=""></picture>
                    </a>
                    <a href="<?php echo getImg(); ?>" class="galeria__item galeria__item-menor" data-fancybox="galeria">
                        <picture class="picture-padrao"><img src="<?php echo getImg(); ?>" alt=""></picture>
                    </a>
                    <a href="<?php echo getImg(); ?>" class="galeria__item galeria__item-menor" data-fancybox="galeria">
                        <picture class="picture-padrao"><img src="<?php echo getImg(); ?>" alt=""></picture>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
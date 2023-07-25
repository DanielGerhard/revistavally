<?php
get_header();
$banner = get_field('banner', $post->ID);
$blocoFullTexto = get_field('bloco_full_texto', $post->ID);
$blocoTextoImg = get_field('bloco_texto_imagem', $post->ID);
?>
<main class="page-<?php echo $post->post_name; ?>">
    <section class="banner-sobre">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="titulo extra-grande"><strong><?php the_title(); ?></strong></h1>
                </div>
                <?php
                if (!empty($banner['imagem'])) {
                ?>
                    <div class="col-md-8">
                        <picture class="picture-padrao">
                            <img src="<?php echo $banner['imagem']['sizes']['medium']; ?>" alt="">
                        </picture>
                    </div>
                <?php
                } // if !empty $banner['imagem']
                ?>
            </div>
        </div>
    </section>

    <section class="bl-full-texto bg-auxiliar">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <?php
                    if (!empty($blocoFullTexto['titulo'])) {
                    ?>
                        <h2 class="titulo maior mb-4"><strong><?php echo $blocoFullTexto['titulo']; ?></strong></h2>
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

    <section class="bl-img-esquerda">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <?php
                    if (!empty($blocoTextoImg['titulo'])) {
                    ?>
                        <h2 class="titulo maior mb-4"><strong><?php echo $blocoFullTexto['titulo']; ?></strong></h2>
                    <?php
                    } // if !empty $blocoTextoImg['titulo']
                    ?>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <?php
                    if (!empty($blocoTextoImg['texto'])) {
                    ?>
                        <p class="paragrafo-padrao"><?php echo $blocoFullTexto['texto']; ?></p>
                    <?php
                    } // if !empty $blocoTextoImg['texto']
                    ?>
                </div>
                <div class="col-lg-5">
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

    <?php include '_swiper-mais-materias.php'; ?>
</main>

<?php get_footer(); ?>
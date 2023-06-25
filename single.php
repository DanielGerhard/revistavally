<?php
get_header();
$imagemDestaque = get_field('imagem_destaque', $post->ID);
?>

<main class="post-style">
    <section>
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
                <div class="titulo-post">
                    <div class="container">
                        <h1 class="titulo extra-grande"><strong><?php the_title(); ?></strong></h1>
                    </div>
                </div>
            </header>
        <?php
        } // if !empty $imagemDestaque
        ?>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-10">
                    <?php
                    if (empty($imagemDestaque)) {
                    ?>
                        <div class="titulo-post">
                            <h1 class="titulo extra-grande"><strong><?php the_title(); ?></strong></h1>
                        </div>
                    <?php
                    } // if !empty $imagemDestaque
                    ?>
                    <div class=""><?php the_content(); ?></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
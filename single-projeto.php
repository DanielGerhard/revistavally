<?php
get_header();
$imagemDestaque = get_field('imagem_destaque', $post->ID);
$informacoesAdicionais = get_field('informacoes_adicionais', $post->ID);
$resumo = get_field('resumo', $post->ID);
$botaoContato = get_field('botao_contato', $post->ID);
$imagemDestaque = get_field('imagem_destaque', $post->ID);
$conteudoFlexivel = get_field('conteudo_flexivel', $post->ID);
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
                        <a href="<?php echo $botaoContato['url']; ?>" target="<?php echo $botaoContato['target'] ? "_blank" : ''; ?>" class=" banner-cta"><strong><?php echo $botaoContato['title']; ?></strong></a>
                        <div class="banner-projeto__conteudo">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h1 class="titulo extra-grande mt-0 mb-0"><strong><?php the_title(); ?></strong></h1>
                                    <?php
                                    if (!empty($informacoesAdicionais)) {
                                    ?>
                                        <small class="mt-3"><?php echo $informacoesAdicionais; ?></small>
                                    <?php
                                    } // if !empty $informacoesAdicionais
                                    if (!empty($resumo)) {
                                    ?>
                                        <p class="mb-0 mt-3"><?php echo $resumo; ?></p>
                                    <?php
                                    } // if !empty $resumo
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <?php
        } // if !empty $imagemDestaque
        ?>
    </section>

    <?php // Conteudo Flexível,
    if (!empty($conteudoFlexivel)) {
        foreach ($conteudoFlexivel as $bloco) {
            switch ($bloco['acf_fc_layout']) {

                    // Bloco Imagem Direita
                case 'imagem_direita':
                    $titulo = $bloco['titulo'];
                    $texto = $bloco['texto'];
                    $imagem = $bloco['imagem'];
                    include('_bloco-img-direita.php');
                    break;

                    // Bloco Imagem Esquerda
                case 'imagem_esquerda';
                    $titulo = $bloco['titulo'];
                    $texto = $bloco['texto'];
                    $imagem = $bloco['imagem'];
                    include('_bloco-img-esquerda.php');
                    break;

                    // Bloco Apenas Texto
                case 'full_texto':
                    $texto = $bloco['texto'];
                    include('_bloco-full-texto.php');
                    break;

                    // Bloco Apenas Imagem
                case 'full_imagem':
                    $imagem = $bloco['imagem'];
                    include('_bloco-full-imagem.php');
                    break;

                    // Bloco Galeria
                case 'galeria':
                    $galeria = $bloco['fotos'];
                    include('_bloco-galeria.php');
                    break;
            } // switch ($bloco['acf_fc_layout'])
        } // foreach ($conteudoFlexivel as $bloco) {
    } // if (!empty($conteudoFlexivel))

    ?>
</main>
<?php
include '_swiper-mais-materias.php';
get_footer();
?>
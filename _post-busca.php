<?php
$imagemDestaque = get_field('imagem_destaque', $post_id);
$titulo = get_the_title($post_id);
$resumo = get_field('resumo', $post_id);
$dataPublicacao = get_the_date('d F, Y', $post_id);
$autor = get_the_author_meta('display_name', $post_id);
$link = get_the_permalink($post_id);
?>
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="linha gradiente-bandeira"></div>
        <div class="cp-post horizontal resultado-busca px-bl-m">
            <div class="conteudo">
                <h2 class="titulo"><a href="https://revistavally.amindsight.com/destransicao-e-apagamento/"><strong><?php echo $titulo ?></strong></a></h2>
                <div class="resumo-post exibir-5">
                    <p><?php echo !empty($resumo) ? $resumo : wp_trim_words(get_the_content($post_id), $num_words = 150); ?></p>
                </div>
                <div class="meta-post">
                    <p class="texto-cinza autor">Por: <?php echo $autor; ?></p>
                    <p class="texto-cinza data-publicacao"><?php echo $dataPublicacao; ?></p>
                </div>
            </div>
            <a href="<?php echo $link; ?>">
                <picture class="picture-padrao">
                    <img src="<?php echo !empty($imagemDestaque) ? $imagemDestaque['sizes']['thumbnail'] : getImg(); ?>" alt="">
                </picture>
            </a>
        </div>
    </div>
</div>
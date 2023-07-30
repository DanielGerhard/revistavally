<?php
get_header();
$banner = get_field('banner', $post->ID);
$conteudoFlexivel = get_field('conteudo_flexivel', $post->ID);
?>
<main class="page<?php echo $post->post_name; ?>">
    <?php

    //Banner
    if ($banner['ordenar_por_publicacao']) {
        $args = array(
            'post_type' => 'post',
            'numeberposts' => 2,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $posts = get_posts($args);
        $idPostBanner = $posts[0];
        $idPostApoio = $posts[1];
    } else {
        $idPostBanner = $banner['post_banner'][0];
        $idPostApoio = $banner['post_apoio'][0];
    }
    include '_banner-home.php';

    // Conteudo Flexível,
    if (!empty($conteudoFlexivel)) {
        foreach ($conteudoFlexivel as $bloco) {
            switch ($bloco['acf_fc_layout']) {

                    // Matéria Destaque
                case 'materia_destaque':
                    $idMateria = $bloco['materia_destaque'];
                    include '_bloco-materia-destaque.php';
                    break;

                    // Blocos de categoria
                case 'bloco_categoria':
                    switch (count($bloco['materias'])) {

                            // 2 Matérias por bloco
                        case 2:
                            $idMateria1 = $bloco['materias'][0]['materia'];
                            $idMateria2 = $bloco['materias'][1]['materia'];
                            $idCategoria = $bloco['categoria'];
                            include '_bloco-categoria-2-materias.php';
                            break;

                            // 3 Matérias por bloco
                        case 3:
                            $materias = $bloco['materias'];
                            $idCategoria = $bloco['categoria'];
                            include '_bloco-categoria-3-materias.php';
                            break;
                    }
                    break;
            } // switch ($bloco['acf_fc_layout'])
        } // foreach ($conteudoFlexivel as $bloco) {
    } // if (!empty($conteudoFlexivel))
    include '_swiper-mais-materias.php';
    ?>
</main>
<?php
get_footer();
?>
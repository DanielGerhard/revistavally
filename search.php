<?php
get_header();
$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : null;
$pesquisa = $_GET['s'];

?>
<main class="sarch-page">
    <section class="bl-header-pesquisa px-bl-l">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <?php
                    if ($categoria != null) {
                    ?>
                        <h1 class="titulo extra-bold mb-4">Matérias da categoria: <strong><?php echo $categoria; ?></strong></h1>
                    <?php
                    } else {
                    ?>
                        <h1 class="titulo extra-bold mb-4">Resultados da pesquisa por: <strong><?php echo $pesquisa; ?></strong></h1>
                    <?php
                    }
                    ?>
                    <canvas class="linha gradiente-bandeira"></canvas>
                </div>
            </div>
            <?php
            $args = array(
                $args['post_type'] =  'post',
                'fields' => 'ids',
                'numberposts' => -1,
            );
            if ($categoria != null) {
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => $categoria,
                    ),
                );
            } else {
                $args['s'] = $_GET['s'];
            }
            $porPagina = 9;
            $paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
            $offset = ($paginaAtual - 1) * $porPagina;
            $args['numberposts'] = $porPagina;
            $args['offset'] = $offset;

            $posts = get_posts($args);
            if (!empty($posts)) {
                foreach ($posts as $post_id) {
                    include '_post-busca.php';
                }
            } else {
            ?>
                <div class="row justify-content-center px-bl-xl">
                    <div class="col-auto">
                        <h3>Não foi encontrada nenhuma materia</h3>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            /* <div e-add-aqui></div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="ver-mais">
                        <button e-ver-mais>+ Ver mais</button>
                    </div>
                </div>
            </div> 
            */ ?>
        </div>
    </section>

</main>
<?php get_footer();

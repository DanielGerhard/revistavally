<?php
set_include_path(get_template_directory());

function getImg($img = 'placeholder.jpg')
{
    $imgPath = get_template_directory_uri() . '/img/' . $img;
    return $imgPath;
}

function includeTagPadraoLink($idTermo, $classe = '')
{
    $termo = get_term($idTermo);
    if ($termo->slug != 'uncategorized') {
?>
        <a href="<?php echo site_url() . '/?s&categoria=' . strtolower($idTermo); ?>" class="tag-padrao <?php echo $classe; ?>">
            <h3><strong><?php echo $termo->name; ?></strong></h3>
            <div class="bandeira-listrada">
                <canvas></canvas>
                <canvas></canvas>
                <canvas></canvas>
                <canvas></canvas>
                <canvas></canvas>
                <canvas></canvas>
            </div>
        </a>
    <?php
    }
}

function includeTagPadrao($idTermo, $classe = '')
{
    $termo = get_term($idTermo);
    if ($termo->slug != 'uncategorized') {
    ?>
        <div class="tag-padrao <?php echo $classe; ?>">
            <h3><strong><?php echo $termo->name; ?></strong></h3>
            <div class="bandeira-listrada">
                <canvas></canvas>
                <canvas></canvas>
                <canvas></canvas>
                <canvas></canvas>
                <canvas></canvas>
                <canvas></canvas>
            </div>
        </div>
    <?php
    }
}

function postAuthor($postId)
{
    $authorId = get_post_field('post_author', $postId);
    $authorName = get_the_author_meta('display_name', $authorId);
    echo $authorName;
}

add_action('wp_ajax_nopriv_posts_paginados', 'postsPadraoPaginados');
add_action('wp_ajax_posts_paginados', 'postsPadraoPaginados');

function postsPadraoPaginados()
{
    $query_type = isset($_GET['query_type']) ? $_GET['query_type'] : null;
    $query = isset($_GET['query']) ? $_GET['query'] : '';
    $paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 2;
    $porPagina = isset($_GET['por_pagina']) ? $_GET['por_pagina'] : 9;

    $args = array(
        'post_type' => 'post',
        'fields' => 'ids',
        'posts_per_page' => -1,
    );

    if ($query_type == 'category') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $query,
            ),
        );
    } else if ($query_type == 'search') {
        $args['s'] = $query;
    }

    $offset = ($paginaAtual - 1) * $porPagina;
    $args['posts_per_page'] = $porPagina;
    $args['offset'] = $offset;

    $posts = get_posts($args);
    ob_start();
    if (!empty($posts)) {
        foreach ($posts as $post_id) {
            include '_post-busca.php';
        }
    }
    $html = ob_get_clean();

    // Verificar se há mais posts
    $next_page_args = $args;
    $next_page_args['offset'] = $offset + 1;
    $next_page_posts = get_posts($next_page_args);
    $hasMorePosts = !empty($next_page_posts);

    $response = array(
        'html' => $html,
        'has_more_posts' => $hasMorePosts, e
    );

    // Enviar a resposta JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}


// Hooks
function remover_taxonomia_tags()
{
    unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'remover_taxonomia_tags');

function desabilitar_comentarios_globais()
{
    return false;
}
add_filter('comments_open', 'desabilitar_comentarios_globais', 10, 2);
add_filter('pings_open', 'desabilitar_comentarios_globais', 10, 2);

function ocultar_aba_comentarios()
{
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'ocultar_aba_comentarios');


// Constantes

define('FRONT_PAGE_ID', get_option('page_on_front'));

define('CONTATOS', get_field('contatos', FRONT_PAGE_ID));

function pre($var)
{
    ?>
    <pre>
        <?php print_r($var); ?>
    </pre>
<?php
}

// Função para registrar o Custom Post Type Projetos
function registrar_post_type_projetos() {
    $labels = array(
        'name'               => 'Projetos',
        'singular_name'      => 'Projeto',
        'menu_name'          => 'Projetos',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Projeto',
        'edit_item'          => 'Editar Projeto',
        'new_item'           => 'Novo Projeto',
        'view_item'          => 'Ver Projeto',
        'search_items'       => 'Buscar Projetos',
        'not_found'          => 'Nenhum Projeto encontrado',
        'not_found_in_trash' => 'Nenhum Projeto encontrado na Lixeira',
        'parent_item_colon'  => ''
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'projeto' ),
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'taxonomies'          => array(),
        'menu_position'       => 5,
        'exclude_from_search' => false
    );

    register_post_type( 'projeto', $args );
}
add_action( 'init', 'registrar_post_type_projetos' );
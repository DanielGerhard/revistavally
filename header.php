<?php
$cabecalho = get_field('cabecalho', FRONT_PAGE_ID);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="language" content="portuguese, BR, PT">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="amindsight">
    <meta content="amindsight" property="og:author" />
    <title><?php wp_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="https://fonts.cdnfonts.com/css/arca-majora-3" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.css" integrity="sha512-Aeqz1zfbRIQHDPsvEobXzaeXDyh8CUqRdvy6QBCQEbxIc/vazrTdpjEufMbxSW61+7a5vIDDuGh8z5IekVG0YA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>"> -->
    <style>
        <?php include get_template_directory() . '/style.css'; ?>
    </style>
</head>

<body>
    <input type="hidden" id="theme-url" value="<?php echo get_template_directory_uri(); ?>">
    <input type="hidden" id="ajax-url" value="<?php echo admin_url('admin-ajax.php'); ?>">
    <div class="document-wrap">
        <header class="header" e-header>
            <div class="container-fluid">
                <div class="header-wrapper">
                    <div class="menu__toggle">
                        <button class="focus-border" e-toggle-btn>
                            <canvas></canvas>
                            <canvas></canvas>
                            <canvas></canvas>
                        </button>
                    </div>
                    <nav e-menu class="menu">
                        <ul>
                            <?php
                            if (!is_front_page()) {
                            ?>
                                <li class="menu-titulo"><strong><a href="<?php echo site_url(); ?>">Início</a></strong></li>
                            <?php
                            }
                            ?>
                            <li class="menu-titulo"><strong>Assuntos</strong></li>
                            <li>
                                <nav>
                                    <ul class="menu-grid-links grid">
                                        <?php
                                        foreach ($cabecalho['assuntos'] as $assunto) {
                                            $idCategoria = $assunto['categoria'];
                                        ?>
                                            <li><a href="<?php echo site_url() . '?s&categoria=' . $idCategoria; ?>"><?php echo get_term($idCategoria)->name; ?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </nav>
                            </li>
                            <li class="menu-titulo"><strong>Projetos</strong></li>
                            <li>
                                <nav>
                                    <ul class="menu-grid-links flex">
                                        <?php
                                        foreach ($cabecalho['projetos'] as $projetoObj) {
                                            $projeto = $projetoObj['url'];
                                        ?>
                                            <li><a href="<?php echo $projeto['url'] ?>" target="<?php echo $projeto['target'] == 'blank' ? '_blank' : ''; ?>"><?php echo !empty($projeto['title']) ? $projeto['title'] : ''; ?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </nav>
                            </li>
                            <?php
                            if (!empty($cabecalho['links_menu'])) {
                                foreach ($cabecalho['links_menu'] as $linkMenuObj) {
                                    $linkMenu = $linkMenuObj['link'];
                            ?>
                                    <li class="menu-titulo hover-underline"><strong><a href="<?php echo $linkMenu['url']; ?>" target="<?php echo $linkMenu['target'] == 'blank' ? '_blank' : ''; ?>"><?php echo !empty($linkMenu['title']) ? $linkMenu['title'] : ''; ?></a></strong></li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                        <canvas class="gradiente-bandeira separador-menu"></canvas>
                        <div class="redes">
                            <a href="mailto:<?php echo CONTATOS['email']; ?>" class="mail" target="_blank" rel="noopener noreferrer">
                                <?php include 'img/svg/mail-icon.svg'; ?>
                            </a>
                            <a href="https://instagram.com/<?php echo CONTATOS['instagram'] ?>" class="instagram" target="_blank" rel="noopener noreferrer">
                                <?php include 'img/svg/instagram-icon.svg'; ?>
                            </a>
                            <a href="https://wa.me/55<?php echo preg_replace('/[^0-9]/', '', CONTATOS['whatsapp']); ?>" class="whatsapp" target="_blank" rel="noopener noreferrer">
                                <?php include 'img/svg/whatsapp-icon.svg'; ?>
                            </a>
                        </div>
                    </nav>

                    <a href="<?php echo site_url(); ?>" class="logo">
                        <?php include 'img/svg/logo.svg'; ?>
                    </a>

                    <nav class="search-bar" e-header-searchbar>
                        <form action="<?php echo site_url(); ?>">
                            <button e-search-btn type="submit"><?php include 'img/svg/search-icon.svg'; ?></button>
                            <input id="searchbar" e-searchbar type="text" name="s" placeholder="pesquisar">
                            <button e-clear-searchbar><?php include 'img/svg/close-btn.svg'; ?></button>
                        </form>
                    </nav>
                </div>
            </div>
        </header>
        <div class="assuntos-header" e-assuntos-header>
            <ul>
                <?php
                if (!empty($cabecalho['assuntos'])) {
                    foreach (array_column($cabecalho['assuntos'], 'categoria') as $idCategoria) {
                ?>
                        <li><a href="<?php echo site_url() . '?s&categoria=' . $idCategoria; ?>" class="hover-underline-before"><?php echo get_term($idCategoria)->name; ?></a></li>
                <?php
                    } // foreach $cabecalho['assuintos'] as $idCategoria
                } // if !empty $cabecalho['assuintos'] as $idCategoria
                ?>
            </ul>
            <canvas class="linha gradiente-bandeira"></canvas>
        </div>
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

    <?php /*     <link href="https://cdn.jsdelivr.net/npm/swiper@9.4.1/modules/scrollbar/scrollbar.min.css" rel="stylesheet"> */ ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.css" integrity="sha512-Aeqz1zfbRIQHDPsvEobXzaeXDyh8CUqRdvy6QBCQEbxIc/vazrTdpjEufMbxSW61+7a5vIDDuGh8z5IekVG0YA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>"> -->
    <style>
        <?php include get_template_directory() . '/style.css'; ?>
    </style>
</head>

<body>
    <input type="hidden" id="theme_url" value="<?php echo get_template_directory_uri(); ?>">
    <input type="hidden" id="ajax_url" value="<?php echo admin_url('admin-ajax.php'); ?>">
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
                                <li class="menu-titulo"><strong><a href="">Início</a></strong></li>
                            <?php
                            }
                            ?>
                            <li class="menu-titulo"><strong>Assuntos</strong></li>
                            <li>
                                <nav>
                                    <ul class="menu-grid-links grid">
                                        <li><a href="<?php echo site_url() . '?s&categoria=debate'; ?>">Debate</a></li>
                                        <li><a href="<?php echo site_url() . '?s&categoria=shows'; ?>">Shows</a></li>
                                        <li><a href="<?php echo site_url() . '?s&categoria=cultura'; ?>">Cultura</a></li>
                                    </ul>
                                </nav>
                            </li>
                            <?php /*                             
                            <li class="menu-titulo"><strong>projetos</strong></li>
                            <li>
                                <nav>
                                    <ul class="menu-grid-links flex">
                                        <li><a href="" target="_blank" rel="noopener noreferrer">Editorial</a></li>
                                    </ul>
                                </nav>
                            </li> 
                            <li class="menu-titulo"><a href=""><strong>Quem somos</strong></a></li>
                            <li class="menu-titulo"><a href=""><strong>Contato</strong></a></li>
                            */ ?>
                        </ul>
                        <canvas class="gradiente-bandeira separador-menu"></canvas>
                        <div class="redes">
                            <a href="mailto:" class="mail" target="_blank" rel="noopener noreferrer">
                                <?php include 'img/svg/mail-icon.svg'; ?>
                            </a>

                            <a href="#" class="instagram" target="_blank" rel="noopener noreferrer">
                                <?php include 'img/svg/instagram-icon.svg'; ?>
                            </a>

                            <a href="#" class="whatsapp" target="_blank" rel="noopener noreferrer">
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
        <div class="assuntos-header">
            <ul>
                <li><a href="<?php echo site_url(); ?>?s&categoria=debate" class="hover-underline">Debate</a></li>
                <li><a href="<?php echo site_url(); ?>?s&categoria=shows" class="hover-underline">Shows</a></li>
                <li><a href="<?php echo site_url(); ?>?s&categoria=cultura" class="hover-underline">Cultura</a></li>
            </ul>
            <canvas class="linha gradiente-bandeira"></canvas>
        </div>
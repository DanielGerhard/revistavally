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
    <style>
        <?php include get_template_directory() . '/style.css'; ?>
    </style>
</head>

<body>
    <input type="hidden" id="theme_url" value="<?php echo get_template_directory_uri(); ?>">
    <input type="hidden" id="ajax_url" value="<?php echo admin_url('admin-ajax.php'); ?>">
    <div class="no-overflow">
        <header>
            <div class="container-fluid">
                <nav>
                    <div class="menu">
                        <div class="menu__toggle"></div>
                        <ul class="menu__accordion">
                            <li class="menu__accordion__item with-submenu">
                                <ul class="menu__accordion__submenu">
                                    <li class="menu__accordion__submenu_item">
                                        <a href="http://" target="_blank" rel="noopener noreferrer"></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
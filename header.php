<!doctype html>
<html lang="fr">
    <head>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/normalize.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <title><?php bloginfo('name') ?></title>

        <?php wp_head();
        ?>
    </head>
    <body>
        <header>
            <?php the_title(); ?>
            <?php wp_nav_menu(array( 'theme_location' => 'menu_principal' )); ?>
        </header>

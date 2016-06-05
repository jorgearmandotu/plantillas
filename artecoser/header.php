<!DOCTYPE html>
<html lang="<?php bloginfo('language');?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <h1><?php bloginfo('name'); ?></h1>
        </header>
        <nav>
            <ul class="main-nav">
                <?php wp_nav_menu( array('theme_location' => 'navegation', 'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',)); ?>
            </ul>
        </nav>
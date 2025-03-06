<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo(('charset'))?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?> 
    <?php get_header(); ?>
</head>
<body <?php body_class(); ?> >
        <!--  -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                        hero
                    </section>
                    <section class="services">
                        Services
                    </section>
                    <section class="home-blog">
                        blog
                    </section>
                </main>
            </div>
        </div>
  <?php get_footer(); ?> 
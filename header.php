<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() . "/img/favicon-logo-white.png" ?>" />
    <?php wp_head();  ?>
</head>
<body <?php body_class(); ?> >
    
<header class="site-header">
    <div class="container">
        <div class="nav-bar">

            <div class="site-header__menu-icon">
                <div class="site-header__menu-icon__middle"></div>
            </div>

            <div class="site-header__logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() . "/img/logo.png" ?>" alt="Site logo" />
                </a>
            </div>

            <div class="site-header__logo-mobile">
                <a class="" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() . "/img/logo-mobile.png" ?>" alt="Site logo mobile" />
                </a>
            </div>
                
            <?php
                $args = array(
                    'theme_location' => 'main-menu', 
                    'container' => 'nav', 
                    'container_class' => 'nav-bar__main-menu',
                );
                wp_nav_menu($args);
            ?> 

            
        </div><!--.nav-bar--> 
    </div><!--.container-->   
</header>

<div class="site-header__large-hero parallax" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . "/img/irelandcastle.jpg" ?>" data-z-index="1">
    <div class="site-header__large-hero-tagline text-center">
        <h1 class="paint-font text-primary"><?php the_field('hero_tagline'); ?></h1>
        <p class="paint-font"><?php the_field('hero_content'); ?></p>
    </div>
</div>

<!---*-*-*-*-*-*-*-*--*-*-*- Scroll to Top Button -*-*-*-*-*-*-*-*--*-*-*--->
<div class="scroll">
    <i class="fas fa-long-arrow-alt-up scroll__arrow"></i>
</div>

<!---*-*-*-*-*-*-*-*--*-*-*- Mouse Trail -*-*-*-*-*-*-*-*--*-*-*--->

<div class="cursor">
    <div class="dot"><span></span></div>
    <div class="circle"></div>
</div>
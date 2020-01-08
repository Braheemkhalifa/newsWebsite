<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="<?php bloginfo('description') ?>" />
    <title>
        <?php bloginfo('name') ?> |
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
     <!-- Custom Mobile styles for this template -->
    <link href="<?php bloginfo('template_url'); ?>/css/styleMobile.css" rel="stylesheet" />
    <!-- Custom AOS style for this template -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--Font Awesome styles -->
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />

    <meta name="theme-color" content="#563d7c" />

    <!-- Custom styles for this template -->
    <link
      href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900"
      rel="stylesheet"
    />

    <?php wp_head(); ?>
  </head>

  <body>
    <div class="container ">
       <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-12 text-center">
            <a class="blog-header-logo text-dark" href="#">
              <?php bloginfo('name') ?>
             </a>
            <p class="text-danger my-3 text-capitalize">        
                <?php bloginfo('description') ?>
            </p>
          </div>
        </div>
      </header>

        <nav class="navbar navbar-expand-md text-uppercase navbar-light bg-light text-center" role="navigation">
           <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                 <button class="navbar-toggler ml-auto   " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav m-auto">
                            <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'li',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                            ?>
                            
            
                    </ul>
           
                 </div>
           </div>
        </nav>
        
    
    </div>

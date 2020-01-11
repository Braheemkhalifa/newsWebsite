<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="<?php echo get_theme_mod('Footer_description','About Your site')  && bloginfo('description')  ?> " />
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
       <header class="blog-header ">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-12 text-center">
            <a class="blog-header-logo text-dark" href="<?php echo get_home_url(); ?>">
              <?php bloginfo('name') ?>
             </a>
            <p class="text-danger my-3 text-capitalize">        
                <?php bloginfo('description') ?>
            </p>
          </div>
        </div>
      </header> 


        <nav  class="navbar navbar-expand-md text-uppercase navbar-dark  bg-dark text-center" role="navigation">
                <a class="navbar-brand"  href="<?php echo get_home_url(); ?>">
                  <img src="<?php echo get_site_icon_url(); ?>" width="30" height="30" alt=" no ">
                </a>
                  <button class="navbar-toggler  text-danger" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon "></span>
                  </button>
              
        
                <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav m-auto">
                                  <?php
                                  wp_nav_menu( array(
                                      'theme_location'    => 'primary',
                                      'depth'             => 2,
                                      'container'         => 'li',
                                      'container_id'      => 'bs-example-navbar-collapse-1',
                                      'menu_class'        => 'nav navbar-nav',
                                      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                      'walker'            => new WP_Bootstrap_Navwalker(),
                                  ) );
                                  ?>
                                  
                  
                          </ul>
                              <?php get_template_part('searchform'); ?>

                      </div>
                </div>


        </nav>

    
    </div>
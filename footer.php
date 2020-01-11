    <footer class="blog-footer bg-dark py-5 ">
    
        <div class="container py-2 ">
          <div class="row">
                <!-- logo  -->
                <div data-aos="fade-right"  class=" col-md-4 col-lg-3  ">

                    <img src="<?php echo get_site_icon_url(); ?>"  alt="site logo" class="rounded  " width="210" height="210" >
                  
                </div>
                <!-- about -->
                <div data-aos="fade-right" class="col-md-8 col-lg-5 py-2 about">
                    <h3 class="text-white mt-2">
                        <span>
                                      <?php bloginfo('name') ?>

                        </span>
                    </h3>  
                    <p >
                        <?php echo get_theme_mod('Footer_description','About Your site'); ?>
                    </p>

                </div>
                <!-- contact -->
                <div  data-aos="fade-left" class="col-md-12 col-lg-3  findUsCol">
                     <h3 class="text-white  mt-3">
                        <span>
                                     Find Us
                        </span>
                    </h3> 
                      <div>
                           <i class="fa fa-map-marker"></i>
                           <?php echo get_theme_mod('Footer_address','tanta, ElGarbia, Egypt'); ?>
                      </div>
                      <div>
                          <i class="fa fa-mobile "></i>
                          <a href="tel:<?php echo get_theme_mod('Footer_Number','01127034564'); ?>">
                              <?php echo get_theme_mod('Footer_Number','01127034564'); ?>
                          </a>
                      </div>
                      <div>
                           <i class="fa fa-at"></i>
                           <?php echo get_theme_mod('Footer_mail','mail@examle.com'); ?>
                      </div>

                </div>
                  <!-- social links -->
                <div data-aos="fade-left" class="col-md-12 col-lg-1 socialCol">
                      <ul>
                                            
                        <a href="<?php echo get_theme_mod('Footer_fbLink','https://www.facebook.com/braheem.khalifa'); ?>" target="_blank"> 
                          <i class="fa fa-facebook-f"></i>
                        </a>
                        <a href="<?php echo get_theme_mod('Footer_twLink','https://www.facebook.com/braheem.khalifa'); ?>" target="_blank"> 
                          <i class="fa fa-twitter"></i>
                        </a>
                        <a href="<?php echo get_theme_mod('Footer_instaLink','https://www.facebook.com/braheem.khalifa'); ?>" target="_blank"> 
                          <i class="fa fa-instagram"></i>
                        </a>
                      </ul>
                </div>
          </div>
        </div>
        <div class="footerMenu my-3">
                                  <?php
                                  wp_nav_menu( array(
                                      'theme_location'    => 'footer',
                                      'depth'             => 3,
                                      'container'         => 'li',
                                      'container_class'   => 'footerLinks',
                                      'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                      'walker'            => new WP_Bootstrap_Navwalker(),
                                  ) );
                                  ?>
                                  
                  
        </div>


         <p >
              <span class="text-white">
                            &copy; <?php echo Date('Y'); ?>
                          -  
                          <?php bloginfo('name') ?>
                            Created  by

              </span>
              <a href="https://bkhalifa.com" class="text-danger font-weight-bold ">khalifa</a>.
        </p>
    </footer>
     
  <?php wp_footer(); ?>

  </body>
  <!-- jquery CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
  <!-- Custom js -->
  <script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>

    <!-- Custom AOS JS for this template -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</html>

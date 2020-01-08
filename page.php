<?php get_header(); ?>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
        
  
         <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <div data-aos="fade-right" class="blog-post border-0">
               
                <h2 class="blog-post-title py-3 text-danger">
                        
                            <?php the_title(); ?>
                        
                    </h2>
                

                   <div class="blog-post-body">
                       <?php the_content(); ?>
                    </div>
                              </div>
               <?php endwhile ; ?>                          
            <p> <?php __('No Page Found'); ?> <p>
         <?php endif; ?>
          <!-- /.blog-post -->

       
        </div>
        <!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
           <?php if(is_active_sidebar('sidebar')): ?>
                <?php dynamic_sidebar('sidebar') ?>
          <?php endif ;?>

        </aside>
        <!-- /.blog-sidebar -->
      </div>
      <!-- /.row -->
    </main>
    <!-- /.container -->

<?php get_footer();?>
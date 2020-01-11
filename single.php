<?php get_header(); ?>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 ">
 
 
        <!-- start of.blog-main -->
         <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('content'); ?>

            <?php endwhile ; ?>                          
            <p> 
                <?php __('No News Right Now'); ?>
            </p>
          <?php endif; ?>
          <!-- /.blog-post -->

         </div>
        <!-- end of .blog-main -->

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
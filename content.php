<div data-aos="fade-right"
        <?php if(is_single()) : ?> 
           class="blog-post border-0"
            <?php else : ?>
         class="blog-post "

        <?php endif ;?>

>
        <?php if(is_single()) : ?> 
               <!-- image without Link      -->
               <?php if(has_post_thumbnail()) : ?>
                     <div  class="thumbnail">
                          <?php the_post_thumbnail();?>    
                      </div>                
                <?php endif; ?>   
          <?php else : ?>
                <!-- image with Link      -->           
                <?php if(has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" class="thumbnail">
                         <?php the_post_thumbnail();?>    
                    </a>                
                 <?php endif; ?>   
        <?php endif ;?>

  
         <?php if(is_single()) : ?>
               <!-- header without Link      -->
               <h2 class="blog-post-title text-danger py-3">
                                    <?php the_title(); ?>
                </h2>
           <?php else : ?>
                <!-- header with Link      -->           
                  <h2 class="blog-post-title py-3">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
         <?php endif ;?>

         <p class="blog-post-meta">
            by : 
            <a class="text-danger mr-4" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <?php the_author(); ?>
            </a>
                      <?php echo  get_the_date(); ?>

                      <?php the_time(); ?>
        </p>


        <?php if(is_single()) : ?>
               <!-- all words      -->
                   <div class="blog-post-body">
                       <?php the_content(); ?>
                    </div>
            <?php else : ?>
                <!-- 20 word      -->           
                   <div class="blog-post-body">
                       <?php the_excerpt(); ?>
                  </div>
        <?php endif ;?>

        <?php if(is_single()) : ?>
                   <div class="blog-post-body">
                            <?php comments_template(); ?>
                         </div> 
        <?php endif ;?>


</div>
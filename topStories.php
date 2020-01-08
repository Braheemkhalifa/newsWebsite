  <?php $number = 5; $args = array('posts_per_page'=> $number, 'ignore_sticky_posts' => 1 ); ?>
            <?php $the_query = new WP_Query( $args   ); ?>                        
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                      
             <a href="<?php the_permalink() ?>" class="list-group-item">
                    <span class="badge badge-danger">
                            <?php echo $the_query->current_post +1; ?>
                    </span>
                     <?php the_title(); ?>
             </a>
  <?php endwhile;   wp_reset_postdata();    ?>

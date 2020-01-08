      <div data-aos="fade-right" class="mainNews p-1">
      
      
      <?php
                $args = array(
                      'posts_per_page' => 4,
                      'meta_key' => 'main-checkbox',
                      'meta_value' => 'main',
                      'ignore_sticky_posts' => 1
                  );
                  $featured = new WP_Query($args);
              
              if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
         
                      <a href="<?php the_permalink(); ?>" class="card my-2  text-white "  
                      data-aos="zoom-in">
                          <img src="<?php  echo the_post_thumbnail_url(); ?>" class="card-img " alt="imge" />
                        <div class="card-img-overlay">
                          <h5 class="card-title">
                            <span class="bg-danger p-2">
                               <?php  $categories = get_the_category();
 
                                    if ( ! empty( $categories ) ) {
                                        echo esc_html( $categories[0]->name );   
                                    };?>    
                            </span>
                          </h5>
                          <p class="card-text">
                              <?php the_title(); ?>
                          </p>
                        </div>
                      </a>

 <?php    endwhile; else:  endif; ?>

<?php
                $args = array(
                      'posts_per_page' => 6,
                      'meta_key' => 'meta-checkbox',
                      'meta_value' => 'featured',
                      'ignore_sticky_posts' => 1
                  );
                  $featured = new WP_Query($args);
              
              if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
         
                    <div class="col-md-6">
                      <a href="<?php the_permalink(); ?>" class="card my-2  text-white ">
                        <img src="<?php  echo the_post_thumbnail_url($size = 'post-thumbnail'); ?>" class="card-img" alt="..." />

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
                    </div>

 <?php    endwhile; else:  endif; ?>

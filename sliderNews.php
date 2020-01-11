
		<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">

                <?php $args = array( 'category_name' => 'egypt news','order'=> 'DESC', 
                'posts_per_page' => -1 ) ?>
                          <?php $the_query = new WP_Query( $args   ); ?>                        
                          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                  <div class=" item my-2">
                                        <a href="<?php the_permalink(); ?>" class="card  p-0 text-white " >
                                          <img  src="<?php  echo the_post_thumbnail_url($size = 'post-thumbnail'); ?>" class="card-img" alt="..." />
                                          <div class="card-img-overlay">
                                            <p class="card-text">
                                                <?php the_title(); ?>
                                            </p>
                                          </div>
                                    </a>
                                  </div>

                <?php endwhile;   wp_reset_postdata();    ?>

            
             </div>
            <button class="btn  leftLst">
            <i class="fa fa-chevron-left fa-2x"></i>
            </button>
            <button class="btn  rightLst">
                        <i class="fa fa-chevron-right fa-2x"></i>
            </button>
        </div>


 
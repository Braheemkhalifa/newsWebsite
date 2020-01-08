<?php get_header(); ?>



      <!-- Main Section -->
    <div class="container ">
        <div class="row firstRow">
          <?php get_template_part('mainHeader'); ?>
        </div>
    </div>

    <main role="main" class="container">

     <!-- Egypt News Section -->
      <div data-aos="fade-left" class="row egyptNews  mt-3 ">
         <h3 class=" col-md-12 my-3  text-danger">
            Egypt News
          </h3>
          <?php get_template_part('sliderNews'); ?>
      </div>  
      </div>
      <!-- /.row -->
    </main>

    <div role="main" class="container">
       <!-- feateurs and top Stories -->
      <div class="row">
                <!-- Feateurs -->
        <div data-aos="fade-right" class="col-md-8 blog-main  my-4 egyptNews">
          <h3 class=" my-3  text-danger">
            Feateurs
          </h3>
          <div class="row feateursNews">
              <?php get_template_part('feautersNews'); ?>
          </div>
        </div>
           <!-- Top Stories -->
        <div data-aos="fade-left" class="col-md-4 my-4   ">
            <div class="col-md-12 topStories">
                 <h3 class="pb-1 my-3  text-danger">
                      Top Stories
                 </h3>
  
                 <ul class="list-group">
                         <?php get_template_part('topStories'); ?>
                 </ul>
            </div>
        </div>

      </div>
    </div>
    <!-- /.container -->


<?php get_footer(); ?>
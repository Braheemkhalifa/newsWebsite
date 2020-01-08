    <footer class="blog-footer">
    
      <p>
       &copy; <?php echo Date('Y'); ?>
       -  
       <?php bloginfo('name') ?>
           by
        <a href="https://bkhalifa.com" class="text-danger font-weight-bold h5">khalifa</a>.
      </p>
      <p>
        <a href="#" class="text-danger">Back to top</a>
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

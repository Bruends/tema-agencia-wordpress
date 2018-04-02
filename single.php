<?php get_header(); ?>
<?php the_post(); ?>
  <section class="container py-5 mh">
    <h1 class="display-font display-4 text-center py-5">
      <?php the_title(); ?>
    </h1>
    <div class="col-sm-12 col-md-10 col-lg-8 mx-auto lead single-content">
      <p>
        <?php the_content(); ?>
      </p>  
    </div>
  </section> 
  <?php get_footer(); ?>
<?php get_header(); ?>
<?php the_post(); ?>
  <!-- Conteudo -->
  <section class="single-bg">
    <div class="single-container container py-5 mh">
      <h1 class="display-font display-4 text-center py-5">
        <?php the_title(); ?>
      </h1>
      <div class="col-sm-12 col-md-10 col-lg-8 mx-auto lead single-content">
        <p>
          <?php the_content(); ?>
        </p>  
      </div>
      <!-- comentarios -->
      <div class="col-12 my-5 comments-container">
        <?php if ( comments_open() || get_comments_number() ) : ?>
          <?php comments_template(); ?>
        <?php endif; ?>             
      </div>
    </div>
  </section> 
<?php get_footer(); ?>
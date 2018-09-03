<?php get_header(); ?>
  <section class="container py-5 mh">
    <h2 class="display-font display-4 text-center py-5">Projetos</h2>
    <div class="row flex-column">
      <!-- loop de projetos -->
      <?php $the_query = new WP_Query( array('post_type' => 'Projetos')); ?>
      <?php if( $the_query->have_posts() ) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <article class="container col-sm-11 col-md-8 my-4 mx-auto project-container">
          <div class="row align-items-center">
            <div>
              <img class="project-image" src="<?php the_field('project_img'); ?>" />
            </div>
            <div class="project-desc mx-5">            
              <h2 class="h4 my-3 text-center title-detail"><?php the_title(); ?> </h2>
              <p class="project-resume">
                <?php the_field('project_desc'); ?>
              </p>            
            </div>
          </div>
        </article>
      <?php endwhile; endif; ?>
    </div>
  </section> 

<?php get_footer(); ?>
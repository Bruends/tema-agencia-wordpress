<?php get_header(); ?>
  <section class="container py-5 mh">
    <h2 class="display-font display-4 text-center py-5">Projetos</h2>
    <div class="row">
      <?php $the_query = new WP_Query( array('post_type' => 'Projetos')); ?>
      <?php if( $the_query->have_posts() ) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <article class="col-sm-12 col-md-6 col-lg-4 my-2 mx-auto project-container">          
          <img class="project-image" src="<?php the_field('project_img'); ?>" />
          <div class="project-desc text-white">
            <div>
              <h2 class="h3"> <?php the_title(); ?> </h2>
              <div>
                <?php the_field('project_desc'); ?>
              </div>
            </div>
          </div>
        </article>
      <?php endwhile; endif; ?>
    </div>
  </section> 

<?php get_footer(); ?>
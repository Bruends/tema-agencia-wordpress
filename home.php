<!-- blog -->
<?php get_header(); ?>
  <section class="container py-5">
    <h1 class="display-font display-4 text-center py-5">Blog</h1>
    <div class="row">
      <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <article class="col-sm-12 col-lg-10 mx-auto p-4 my-2 post-container post-item">
          <h2 class="post-title"><?php the_title(); ?></h2>
          <div class="py-2">
            <?php the_excerpt(); ?>
          </div>
          <a href="<?php the_permalink(); ?>" class="btn btn-primary">
            Ler Post
          </a>
        </article>
      <?php endwhile; endif; ?>
    </div>
  </section> 
<?php get_footer(); ?>
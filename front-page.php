<?php get_header(); ?>
  <!-- banner -->
  <section class="container-fluid">
    <div class="banner-bg row justify-content-center align-items-center">
      <div class="banner-msg text-white text-center py-5">
        <h1 class="display-font display-2">
          <?php bloginfo( 'name' ); ?>
        </h1>
        <h2>
          <?php bloginfo( 'description' ); ?>
        </h2>
      </div>
    </div>
  </section> 

  <!-- sobre -->
  <section class="container py-5">
    <div class="row py-5">
      <div class="col d-none d-lg-block py-5">
        <img src="<?php echo THEME_PATH ?>/public/imgs/about.jpeg" class="about-img" alt="Tela de planejamento">
      </div>
      <article class="col text-center py-5">
        <h2 class="display-4 display-font py-2"> Sobre </h2>
        <p class="px-lg-5 px-sm-1">
          <?php the_field('about_text'); ?>
        </p>
      </article>
    </div>
  </section>

  <!-- detalhe -->
  <div class="container-fluid detail-bg"></div>

  <!-- o que fazemos -->
  <section class="container text-center py-5">
    <h2 class="display-4 display-font py-5">O que fazemos ?</h2>
    <div class="row py-5">
      <article class="col-sm-12 col-md-4 py-3">
        <i class="display-4 fa fa-clipboard"></i>
        <h3 class="py-2">Planejamento</h3>
        <p class="px-1">
          <?php the_field('planning_text'); ?>
        </p>
      </article>
      <article class="col-sm-12 col-md-4 py-3">
        <i class="display-4 fa fa-paint-brush"></i>
        <h3 class="py-2">Design</h3>
        <p class="px-1">
          <?php the_field('design_text'); ?>
        </p>
      </article>
      <article class="col-sm-12 col-md-4 py-3">
        <i class="display-4 fa fa-code"></i>
        <h3 class="py-2">Desenvolvimento</h3>
        <p class="px-1">
          <?php the_field('dev_text'); ?>
        </p>
      </article>
    </div>
    <a href="#" class="btn btn-lg btn-primary my-5">Ver Projetos!</a>
  </section>
<?php get_footer(); ?>
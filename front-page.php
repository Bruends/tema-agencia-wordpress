<?php get_header(); ?>
<!-- Home Page -->
  <!-- banner -->
  <section class="container-fluid">
    <div class="banner-bg row justify-content-center align-items-center">
      <div class="banner-msg text-white text-center py-5">
        <h1 class="display-font display-2">
          <?php bloginfo( 'name' ); ?>
        </h1>
        <h2 class="h4">
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
        <h2 class="display-4 display-font py-2 title-detail"> Sobre </h2>
        <p class="px-lg-5 px-sm-1">
          <?php the_field('about_text'); ?>
        </p>
      </article>
    </div>
  </section>

  <section class="phrase-bg py-5">
    <div class="py-5 text-white text-center">
      <blockquote class="display-4">
        <?php the_field('phrase'); ?>
      </blockquote>
      <cite class="lead">
        - <?php the_field('author'); ?> -
      </cite>
    </div>
  </section>

  <!-- o que fazemos -->
  <section class="works-bg">
    <div class="container text-center py-5">
      <h2 class="display-4 display-font py-5 title-detail">O que fazemos ?</h2>
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
      <a href="<?php echo getPageLink('projetos'); ?>" class="btn btn-lg btn-outline-primary my-5">Ver Projetos!</a>
    </div>
  </section>
  <!-- form de contato -->
  <section class="form-bg container-fluid">
    <div class="row">
      <div class="col p-5">
          <h2 class="text-center display-font title-detail">Mande uma mensagem</h2>
        <form class="py-5 my-5" action="">
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="exemplo@email.com">
            <small id="emailHelp" class="form-text text-muted">Não Mandaremos Spam ;)</small>
            </div>
            <div class="form-group">
              <label class="mt-2" for="mensagem">Mensagem</label>
              <textarea type="password" class="form-control" id="mensagem" ></textarea>
            </div>            
            <button type="submit" class="my-5 btn btn-outline-primary">Enviar</button>
        </form>
      </div>
      <div class="col form-side-bg d-none d-md-block d-lg-block d-xl-block "></div>
    </div>
  </section>
<?php get_footer(); ?>
<?php get_header(); ?>
  <!-- banner -->
  <section class="container-fluid">
    <div class="banner-bg row justify-content-center align-items-center">
      <div class="banner-msg text-white text-center py-5">
        <h1 class="display-font display-2">Agência
          <br> Web</h1>
      </div>
    </div>
  </section>
  <!-- endBanner --> 

  <!-- sobre -->
  <section class="container py-5">
    <div class="row py-5">
      <div class="col d-none d-lg-block py-5">
        <img src="<?php echo THEME_PATH ?>/public/imgs/about.jpeg" class="about-img" alt="tela de computador com códigos">
      </div>
      <article class="col text-center py-5">
        <h2 class="display-4 display-font py-2"> Sobre </h2>
        <p class="px-lg-5 px-sm-1">É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver
          examinando sua diagramação. A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao
          contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto legível.
          Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão,
          e uma rápida busca por 'lorem ipsum' mostra vários websites ainda em sua fase de construção.</p>
      </article>
    </div>
  </section>

  <!-- detail -->
  <div class="container-fluid detail-bg"></div>

  <!-- works -->
  <section class="container text-center py-5">
    <h2 class="display-4 display-font py-5">O que fazemos ?</h2>
    <div class="row py-5">
      <article class="col-sm-12 col-md-4 py-3">
        <i class="display-4 fa fa-clipboard"></i>
        <h3 class="py-2">Planejamento</h3>
        <p class="px-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a justo ipsum. Nulla venenatis eleifend pellentesque.
          Suspendisse nec commodo nisi. Pellentesque blandit sem ut est iaculis dictum. Morbi vitae risus elit.</p>
      </article>
      <article class="col-sm-12 col-md-4 py-3">
        <i class="display-4 fa fa-paint-brush"></i>
        <h3 class="py-2">Design</h3>
        <p class="px-1">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a justo ipsum. Nulla venenatis eleifend pellentesque. Suspendisse
          nec commodo nisi.
        </p>
      </article>
      <article class="col-sm-12 col-md-4 py-3">
        <i class="display-4 fa fa-code"></i>
        <h3 class="py-2">Desenvolvimento</h3>
        <p class="px-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a justo ipsum. Nulla venenatis eleifend pellentesque.
          Suspendisse nec commodo nisi. </p>
      </article>
    </div>
    <a href="#" class="btn btn-lg btn-primary my-5">Ver Projetos!</a>
  </section>
<?php get_footer(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo( 'name' ); ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo THEME_PATH ?>/public/style/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo THEME_PATH ?>/public/style/style.css">
  <?php wp_head(); ?>
</head>

<body>
<!-- contatos -->
  <section class="container-fluid py-2 bg-dark">
    <div class="text-right">
    <?php $home_id = 43 ?>
      <a href="#" class="text-white mx-2">
        Telefone: <?php the_field('phone', $home_id); ?>
      </a>
      <a href="#" class="text-white mx-2">
        Email: <?php the_field('email', $home_id); ?>
      </a>
    </div>
  </section>
  <!-- menu -->
  <nav class="menu navbar navbar-expand-lg navbar-dark py-3">
    <a class="display-font navbar-brand" href="<?php echo home_url(); ?>">
      AW
      <i class="fa fa-paint-brush"></i>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-lg-2">
          <a class="nav-link" href="<?php echo home_url(); ?>">
            Home
          </a>
        </li>
        <li class="nav-item mx-lg-2">
          <a class="nav-link" href="<?php echo getPageLink('projetos'); ?>">
            Projetos
          </a>
        </li>
        <li class="nav-item mx-lg-2">
          <a class="nav-link" href="<?php echo getPageLink('blog'); ?>">
            Blog
          </a>
        </li>
      </ul>
    </div>
  </nav>
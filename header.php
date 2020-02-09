<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Psicóloga Vanessa Mattos</title>

   <!-- Inicio WP Header -->
   <?php wp_head(); ?>
   <!-- Fim WP Header -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.ico" />
  </head>
  <body>
    <header class="menu js-scroll">
      <div class="container menu-header">
        <a href="/" class="menu-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo_horizontal.png" alt="Vanessa Mattos" />
        </a>

        <nav class="menu-nav">
          <button data-menu="button" aria-expanded="false"></button>
          <ul data-menu="list" id="menu">
            <li><a href="/home/">Home</a></li>
            <li><a href="/sobre/">Sobre</a></li>
            <li><a href="/especialidade/">Especialidade</a></li>
            <li><a href="/blog/">Blog</a></li>
            <li><a href="/contato/">Contato</a></li>
          </ul>
        </nav>
      </div>
    </header>
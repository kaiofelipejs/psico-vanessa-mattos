<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title><?php bloginfo('name')?><?php wp_title('|')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php the_field('description-seo')?>"/>

    <?php 
      if (is_page()) {
    ?>
      <meta property="og:type" content="website"/>
      <meta property="og:title" content="<?php bloginfo('name')?><?php wp_title('|')?>"/>
      <meta property="og:description" content="<?php the_field('description-seo')?>"/>
      <meta property="og:url" content="http://www.vanessamattos.com.br"/>
      <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/icons/logo_horizontal.png"/>
   	<?php } ?>

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
          <button data-menu="button" aria-expanded="false" aria-label="Abrir menu"></button>
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
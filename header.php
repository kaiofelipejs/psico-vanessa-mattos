<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158807255-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-158807255-1');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window,document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '586154885442899');
      fbq('track', 'PageView');
    </script>
    <noscript>
      <img height="1" width="1"
      src="https://www.facebook.com/tr?id=586154885442899&ev=PageView
      &noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

    <title><?php wp_title('|')?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="psicologia, psicóloga em Florianópolis, psicóloga, atendimento psicológico, atendimento psicológico online">
    <meta name="description" content="<?php the_field('description-seo')?>"/>

    <?php
      if (is_page()) {
    ?>
      <meta property="og:type" content="website"/>
      <meta property="og:title" content="<?php wp_title('|')?> "/>
      <meta property="og:description" content="<?php the_field('description-seo')?>"/>
      <meta property="og:url" content="http://www.vanessamattos.com.br"/>
      <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/icons/logo_horizontal.png"/>
    <?php } ?>

    <!-- Inicio WP Header -->
    <?php wp_head(); ?>
    <!-- Fim WP Header -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.ico" />
    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
  </head>

  <body>
  <header class="menu-wrapper js-scroll">
    <div class="container menu-header">
      <a href="/" class="menu-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo_horizontal.png" alt="Vanessa Mattos" />
      </a>

      <nav class="menu-nav">
        <button data-menu="button" aria-expanded="false" aria-label="Abrir menu"></button>
          <?php
            $args = array(
              'menu' => 'principal',
              'theme-location' => 'menu-principal',
              'container' => false
            );
            wp_nav_menu($args);
          ?>
      </nav>
    </div>
  </header>
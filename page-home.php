<?php
// Template Name: Home
  get_header();
  $blog = get_page_by_title('blog');
  $about = get_page_by_title('sobre');
  $speciality = get_page_by_title('especialidade');
?>

<main class="intro js-scroll">
  <div class="container">
    <div class="flex-item align-center">
      <h1>
        <?php the_field('frase-intro');?>
      </h1>
      <a href="/contato" class="btn">Agendar conversa</a>
    </div>

    <div class="flex-item align-center">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/homepage.svg"
        alt="Ilustração de uma mulher segurando uma lâmpada"
      />
    </div>
  </div>
</main>

<svg class="curve-top" viewBox="0 -10 1700 194" xmlns="http://www.w3.org/2000/svg">
  <path d="M1861 193.998L1488.42 193.998C1488.42 193.998 919.005 194.001 919.005 193.998C919.005 193.995 7.62925e-06 193.998 7.62925e-06 193.998L-2.80361e-06 74.6595C-2.80361e-06 74.6595 206.063 116.653 349.586 51.6632C493.108 -13.3262 661.259 109.654 919.005 51.6631C1176.75 -6.32739 1308.69 -24.8244 1488.42 51.6631C1668.16 128.151 1861 74.6594 1861 74.6594L1861 193.998Z"/>
</svg>

<section class="about bg-wavy active-scroll">
  <div class="container js-scroll">
    <div class="flex-item profile-photo">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/profile-photo.jpeg"
        alt="Foto profissional da Psicóloga Vanessa Mattos"
      />
    </div>

    <div class="content-right flex-item align-center">
      <h2><?php the_field('titulo-sobre', $about); ?></h2>
      <p><?php the_field('primeiro-paragrafo-sobre', $about); ?></p>
      <p><?php the_field('terceiro-paragrafo-sobre', $about); ?></p>
      <a href="/sobre" class="btn">Conhecer mais</a>
    </div>
  </div>
</section>

<svg class="curve-bottom" viewBox="0 10 1700 194" xmlns="http://www.w3.org/2000/svg">
  <path d="M0 0.999542L372.576 0.999211C372.576 0.999211 941.995 0.996591 941.995 0.999211C941.995 1.00183 1861 0.999669 1861 0.999669V120.338C1861 120.338 1654.94 78.3447 1511.41 143.334C1367.89 208.323 1199.74 85.3435 941.995 143.334C684.249 201.325 552.313 219.822 372.576 143.334C192.839 66.8465 0 120.338 0 120.338V0.999542Z"/>
</svg>

<section class="psico container js-scroll">
  <div class="content-left flex-item container">
    <h2><?php the_field('titulo-especialidade', $speciality);?></h2>
    <p>
      <?php the_field('first-paragrafo-especialidade', $speciality);?>
    </p>
    <p>
      <?php the_field('segundo-paragrafo-especialidade', $speciality);?>
    </p>
    <p>
      <?php the_field('terceiro-paragrafo-especialidade', $speciality);?>
    </p>
    <a href="/especialidade" class="btn">Saiba mais</a>
  </div>

  <div class="flex-item align-center">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arvore-sistemica.svg" alt="Ilustração de uma árvore" />
  </div>
</section>

<section class="blog-wrapper js-scroll">
  <div class="blog container flex-item">
    <h2>Blog</h2>
    <p class="flex-item">Conteúdos para aflorar seus conhecimentos...</p>

    <div class="posts container">
      <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

        <div class="blog-post">
          <a href="<?php the_permalink(); ?>">
            <div class="blog-post-image">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="blog-post-title">
      <h3><?php the_title()?></h3>
      <div class="blog-post-data">
        <svg id="clock" enable-background="new 0 0 443.294 443.294" viewBox="0 0 443.294 443.294" xmlns="http://www.w3.org/2000/svg">
        <path d="m221.647 0c-122.214 0-221.647 99.433-221.647 221.647s99.433 221.647 221.647 221.647 221.647-99.433 221.647-221.647-99.433-221.647-221.647-221.647zm0 415.588c-106.941 0-193.941-87-193.941-193.941s87-193.941 193.941-193.941 193.941 87 193.941 193.941-87 193.941-193.941 193.941z"/>
        <path d="m235.5 83.118h-27.706v144.265l87.176 87.176 19.589-19.589-79.059-79.059z"/>
        </svg>
        <small><?php echo do_shortcode('[rt_reading_time postfix="minutos" postfix_singular="minuto"]') ?> • <?php echo get_the_date('j M, Y');?> </small>
      </div>
      </div>
          </a>
          <div class="blog-post-info">
            <p><?php the_excerpt(); ?></p>
          </div>
        </div>

        <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
  <div class="container">
    <a href="/blog" class="btn">Acessar blog</a>
  </div>
</section>
<?php get_footer(); ?>
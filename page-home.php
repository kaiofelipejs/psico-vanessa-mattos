<?php 
// Template Name: Home
  get_header();
  $blog = get_page_by_title('blog');
  $about = get_page_by_title('sobre');
  $speciality = get_page_by_title('especialidade');
?>

    <main class="intro js-scroll">
      <div class="container">
        <h1 class="flex-item">
          <?php the_field('frase-intro');?>
        </h1>
        <div class="flex-item align-center">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/homepage.svg"
            alt="Ilustração de uma mulher segurando uma lâmpada"
          />
        </div>
      </div>
    </main>

    <section class="about bg-curves active-scroll">
      <div class="container js-scroll">
        <div class="flex-item profile-photo">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/profile-photo.png"
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

    <section class="psico container js-scroll">
      <div class="content-left flex-item container">
        <h2>Especialidade</h2>
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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arvore-sistemica.svg" alt="Árvore" />
      </div>
    </section>

    <section class="container js-scroll">
      <div class="blog-home flex-item">
        <h2>Blog</h2>
        <p>Conteúdo sobre ansiedade, stress, família e outros...</p>

        <div class="posts container">
          <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          
            <div class="blog-post">
              <a href="<?php the_permalink(); ?>">
                <div class="blog-post-image">
                  <?php the_post_thumbnail(); ?>
                </div>
                <div class="blog-post-info">
                  <h3><?php the_title()?></h3>
                  <p class="date"><?php echo get_the_date('j \d\e F \d\e Y');?></p>
                <p><?php the_excerpt(); ?></p>
                </div>
              </a>
            </div>

            <?php endwhile; wp_reset_postdata(); ?> 
          </div>
          <a href="/blog" class="btn">Acessar blog</a>
        </div>
      </div>
    </section>
<?php get_footer(); ?>
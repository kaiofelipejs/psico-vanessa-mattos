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

    <svg id="curve-top" viewBox="0 0 1861 115" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 22.1488C0 22.1488 44.1575 57.6916 329.68 56.7126C615.203 55.7336 780.5 -38.5268 1165 18.9866C1549.5 76.5 1861 18.9867 1861 18.9867
      V115C1861 115 1662.27 115 1512.73 115C1363.18 115 1202.81 115 939.805 115C676.803 115 624.764 115 418.725 115C212.686 115 0 115 0 115V22.1488Z"/>
    </svg>

    <section class="about active-scroll">
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
   
    <svg id="curve-bottom"  viewBox="0 1 1861 194" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 0.999542L372.576 0.999211C372.576 0.999211 941.995 0.996591 941.995 0.999211C941.995 1.00183 1861 0.999669 1861 0.999669V120.338C1861 120.338 1654.94 78.3447 1511.41 143.334C1367.89 208.323 1199.74 85.3435 941.995 143.334C684.249 201.325 552.313 219.822 372.576 143.334C192.839 66.8465 0 120.338 0 120.338V0.999542Z"/>
    </svg>


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

    <section class="blog-wrapper js-scroll">
      <div class="blog container flex-item">
        <h2>Blog</h2>
        <p class="flex-item">Conteúdo sobre ansiedade, stress, família e outros...</p>
      
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
                  <small><?php echo get_the_date('j \d\e F \d\e Y');?></small>
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
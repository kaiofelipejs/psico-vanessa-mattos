<?php
// Template Name: Especialidade
  get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <main class="intro-page js-scroll">
    <div class="container">
      <div class="flex-item align-center js-scroll">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/arvore-sistemica.svg"
          alt="Ilustração de uma árvore"
        />
      </div>

      <div class="content-right flex-item container js-scroll">
        <?php include(TEMPLATEPATH . "/include/speciality.php"); ?>
      </div>
    </div>
  </main>

  <svg class="curve-top" viewBox="0 -10 1700 194" xmlns="http://www.w3.org/2000/svg">
    <path d="M1861 193.998L1488.42 193.998C1488.42 193.998 919.005 194.001 919.005 193.998C919.005 193.995 7.62925e-06 193.998 7.62925e-06 193.998L-2.80361e-06 74.6595C-2.80361e-06 74.6595 206.063 116.653 349.586 51.6632C493.108 -13.3262 661.259 109.654 919.005 51.6631C1176.75 -6.32739 1308.69 -24.8244 1488.42 51.6631C1668.16 128.151 1861 74.6594 1861 74.6594L1861 193.998Z"/>
  </svg>

  <section class="assumption bg-wavy js-scroll active-scroll">
    <h2 class="js-scroll"><?php the_field('section_assumption_title') ?></h2>
    <div class="container">
      <div class="flex-item assumption-item js-scroll">
        <img 
          src="<?php the_field('first_assumption_item') ?>" 
          alt="Icone do primeiro tópico"
        />
        <h3><?php the_field('first_assumption_title') ?></h3>
        <p><?php the_field('first_assumption_description') ?></p>
      </div>

      <div class="flex-item assumption-item js-scroll">
        <img 
          src="<?php the_field('second_assumption_item') ?>" 
          alt="Icone do segundo tópico" 
        />
        <h3><?php the_field('second_assumption_title') ?></h3>
        <p><?php the_field('second_assumption_description') ?></p>
      </div>

      <div class="flex-item assumption-item js-scroll">
        <img
          src="<?php the_field('third_assumption_item') ?>"
          alt="Icone do terceiro tópico"
        />
        <h3><?php the_field('third_assumption_title') ?></h3>
        <p><?php the_field('third_assumption_description') ?></p>
      </div>
    </div>
  </section>

  <svg class="curve-bottom" viewBox="0 10 1700 194" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0.999542L372.576 0.999211C372.576 0.999211 941.995 0.996591 941.995 0.999211C941.995 1.00183 1861 0.999669 1861 0.999669V120.338C1861 120.338 1654.94 78.3447 1511.41 143.334C1367.89 208.323 1199.74 85.3435 941.995 143.334C684.249 201.325 552.313 219.822 372.576 143.334C192.839 66.8465 0 120.338 0 120.338V0.999542Z"/>
  </svg>

  <section class="practice container js-scroll">
    <div class="content-left flex-item">
      <?php include(TEMPLATEPATH . "/include/practice.php"); ?>
      <a href="/contato" class="btn">Vamos conversar!</a>
    </div>

    <div class="flex-item align-center">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pratica.svg" alt="Ilustração de uma mulher com três engrenagens" />
    </div>
  </section>

  <?php endwhile; else: endif; ?>
<?php get_footer(); ?>

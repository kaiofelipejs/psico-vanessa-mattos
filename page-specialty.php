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
          <h2><?php the_field('titulo-especialidade');?></h2>
          <p>
            <?php the_field('first-paragrafo-especialidade');?>
          </p>
          <p>
            <?php the_field('segundo-paragrafo-especialidade');?>
          </p>
          <p>
            <?php the_field('terceiro-paragrafo-especialidade');?>
          </p>
        </div>
      </div>
    </main>

    <svg class="curve-top" viewBox="0 0 1861 115" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 22.1488C0 22.1488 44.1575 57.6916 329.68 56.7126C615.203 55.7336 780.5 -38.5268 1165 18.9866C1549.5 76.5 1861 18.9867 1861 18.9867
      V115C1861 115 1662.27 115 1512.73 115C1363.18 115 1202.81 115 939.805 115C676.803 115 624.764 115 418.725 115C212.686 115 0 115 0 115V22.1488Z"/>
    </svg>

    <section class="assumption bg-wavy js-scroll active-scroll">
      <h2 class="js-scroll">Pressupostos da Psicologia Sistêmica</h2>
      <div class="container">
        <div class="flex-item assumption-item js-scroll">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/complexidade.png" alt="Complexidade" />
          <h3>Complexidade</h3>
          <p>
            Visualiza as interrelações entre os fenômenos, através de uma
            atitude contextualizadora.
          </p>
        </div>

        <div class="flex-item assumption-item js-scroll">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instabilidade.png" alt="instabilidade" />
          <h3>Instabilidade</h3>
          <p>
            Reconhece a imprevisibilidade, a irreversibilidade e a
            incontrabilidade dos fenômenos
          </p>
        </div>

        <div class="flex-item assumption-item js-scroll">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/icons/intersubjetividade.png"
            alt="intersubjetividade"
          />
          <h3>Intersubjetividade</h3>
          <p>
            Dialoga com a experiência subjetiva e admite o multi-versa de
            diferentes narrativas.
          </p>
        </div>
      </div>
    </section>

    <svg class="curve-bottom" viewBox="0 1 1861 194" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 0.999542L372.576 0.999211C372.576 0.999211 941.995 0.996591 941.995 0.999211C941.995 1.00183 1861 0.999669 1861 0.999669V120.338C1861 120.338 1654.94 78.3447 1511.41 143.334C1367.89 208.323 1199.74 85.3435 941.995 143.334C684.249 201.325 552.313 219.822 372.576 143.334C192.839 66.8465 0 120.338 0 120.338V0.999542Z"/>
    </svg>

    <section class="practice container js-scroll">
      <div class="content-left flex-item">
      <?php include(TEMPLATEPATH . "/include/practice.php"); ?>
        <a href="/contato" class="btn">Vamos conversar!</a>
      </div>

      <div class="flex-item align-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pratica.svg" alt="Prática" />
      </div>
    </section>

    <?php endwhile; else: endif; ?>
<?php get_footer(); ?>

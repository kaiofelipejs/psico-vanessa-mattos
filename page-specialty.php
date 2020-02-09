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

    <section class="assumption bg-curves js-scroll active-scroll">
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

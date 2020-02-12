<?php 
// Template Name: Contato
  get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="contact-wrapper container intro-page js-scroll">
      <div class="align-center container">
        <div class="flex-item align-center">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/contato.svg"
            alt="Ilustração de uma árvore"
          />
        </div>

        <div class="content-right flex-item align-center">
          <h2>Contato</h2>
          <p>
            Tem alguma dúvida ou sugestão?<br />
            Deixe sua mensagem!
          </p>

          <div class="contact-info">
            <ul>
              <li><span><?php the_field('endereco-email') ?></span></li>
              <li>
                <a 
                  href="https://api.whatsapp.com/send?phone=5548984463359&text=Ol%C3%A1!%20Encontrei%20seu%20contato%20atrav%C3%A9s%20do%20site%2C%20podemos%20conversar%3F%20" 
                  target="_blank">
                <?php 
                  the_field('numero-whatsapp')
                ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/whatsapp_black.png" alt="" />
                </a>
              </li>
            </ul>
          </div>

          <div class="contact-social">
            <h3>Redes Sociais</h3>
            <div class="icons">
              <a href="https://www.facebook.com/psicovanessam/" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook_black.png" alt="Facebook" />
              </a>
              <a href="https://www.instagram.com/psicovanessam/" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram_black.png" alt="Instagram" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>

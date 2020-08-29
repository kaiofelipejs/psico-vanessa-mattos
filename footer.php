<?php
   $home = get_page_by_title('home');
   if (is_page()  && !is_page(array ('blog', 'contato'))) {
?>
<section class="container quote js-scroll">
   <blockquote>
      <p>
         "<?php the_field('quote', $home);?>"
      </p>
      <cite>— <?php the_field('citacao', $home);?></cite>
   </blockquote>
</section>
<?php } ?>

	<!-- Begin Mailchimp Signup Form -->
	<div id="mc_embed_signup" >
    <div class="assine container">
    <div class="assine-info flex-item">
      <h2><?php the_field('titulo_newsletter', $home); ?></h2>
      <p><?php the_field('subtitulo_newsletter', $home)?></p>
    </div>

    <form
      action="https://vanessamattos.us4.list-manage.com/subscribe/post?u=c749aca32f972b8bd2c72670c&amp;id=6a10d406fa"
      method="post"
      id="mc-embedded-subscribe-form"
      name="mc-embedded-subscribe-form"
      class="validate flex-item"
      target="_blank"
      novalidate
    >
      <input type="email" value="" name="EMAIL" class="email-form" id="mce-EMAIL" placeholder="E-mail" required>
      <input type="submit" class="btn-submit-form" value="Inscrever!" name="subscribe" id="mc-embedded-subscribe">
    </form>
    </div>
	</div>
	<!--End mc_embed_signup-->

  <footer class="footer">
    <div class="container">
      <div class="align-center">
        <a href="/">
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo_vertical_white.png"
            alt="Psicóloga Vanessa Mattos"
        />
        </a>
      </div>

      <div class="contact align-center">
        <h3>Contato</h3>
        <ul>
          <li>
            <span>
              <?php
                $contact = get_page_by_title('contato');
                the_field('endereco-email', $contact)
              ?>
            </span>
          </li>
          <li>
            <a
              href="https://api.whatsapp.com/send?phone=5548984463359&text=Ol%C3%A1!%20Encontrei%20seu%20contato%20atrav%C3%A9s%20do%20site%2C%20podemos%20conversar%3F%20"
              target="_blank"
              class="email"
              rel="noopener noreferrer">
                <?php the_field('numero-whatsapp', $contact)?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/whatsapp.png" alt="Whatsapp" />
            </a>
          </li>
        </ul>
      </div>

      <div class="social align-center">
        <h3>Redes Sociais</h3>

        <div class="icons">
          <a
            href="mailto:psicovanessam@gmail.com"
            target="_blank"
            class="email"
            rel="noopener noreferrer"
          >
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/e-mail.png" alt="E-mail" />
          </a>

          <a
            href="https://api.whatsapp.com/send?phone=5548984463359&text=Ol%C3%A1!%20Encontrei%20seu%20contato%20atrav%C3%A9s%20do%20site%2C%20podemos%20conversar%3F%20" 				target="_blank"
            class="whatsapp"
            rel="noopener noreferrer"
          >
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/whatsapp_icon.png" alt="Whatsapp" />
          </a>

          <a href="https://www.facebook.com/psicovanessam/" target="_blank" class="facebook" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/facebook.png" alt="Facebook" />
          </a>

          <a href="https://www.instagram.com/psicovanessam/" target="_blank" class="instagram" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/instagram.png" alt="Instagram" />
          </a>
        </div>
      </div>
    </div>
  </footer>

  <section class="copyright">
    <div class="container">
      <ul class="flex-item copy-content">
        <li>Copyright © 2020 | Psicóloga Vanessa Mattos</li>
        <li>Feito por
          <a href="https://kaiofelipejs.dev/" target="_blank" rel="noopener noreferrer">
            Kaio Felipe Silva
          </a>
        </li>
      </ul>
    </div>
   </section>

   <?php wp_footer(); ?>

  </body>
</html>

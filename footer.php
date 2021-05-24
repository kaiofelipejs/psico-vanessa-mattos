<?php
   $home = get_page_by_title('home');
   $contact = get_page_by_title('contato');
   $whatsapp_number_formatted = WhatsappNumberFormatted(get_field('whatsapp_number', $contact));
   if (is_page() && !is_page(array ('blog', 'contato'))) {
?>
<section class="container quote js-scroll">
   <blockquote>
      <p>
         "<?php the_field('quote', $home);?>"
      </p>
      <cite>— <?php the_field('quote_author', $home);?></cite>
   </blockquote>
</section>
<?php } ?>

  <section class="assine">
    <div class="container">
      <div class="assine-info flex-item">
        <h2><?php the_field('title_newsletter', $home); ?></h2>
        <p><?php the_field('subtitle_newsletter', $home)?></p>
      </div>

      <form onsubmit="return alert('Obrigada! Espero que aproveite :)')">
        <input type="email" value="" name="EMAIL" class="email-form" placeholder="E-mail" required>
        <input type="submit" class="btn-submit-form" value="Inscrever!" name="subscribe">
      </form>
    </div>
  </section>

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
            <a
              href="mailto:<?php the_field('email_address', $contact) ?>"
              target="_blank"
              class="email"
              rel="noopener noreferrer"
            >
              <?php the_field('email_address', $contact) ?>
            </a>
          </li>
          <li>
            <a
              href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp_number_formatted ?>&text=Ol%C3%A1!%20Encontrei%20seu%20contato%20atrav%C3%A9s%20do%20site%2C%20podemos%20conversar%3F%20"
              target="_blank"
              class="email"
              rel="noopener noreferrer">
                <?php the_field('whatsapp_number', $contact)?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/whatsapp.png" alt="Whatsapp" />
            </a>
          </li>
        </ul>
      </div>

      <div class="social align-center">
        <h3>Redes Sociais</h3>

        <div class="icons">
          <a
            href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp_number_formatted ?>&text=Ol%C3%A1!%20Encontrei%20seu%20contato%20atrav%C3%A9s%20do%20site%2C%20podemos%20conversar%3F%20"
            target="_blank"
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
        <li>Copyright &copy; 2019 - <?php echo date('Y') ?> | Psicóloga Vanessa Mattos</li>
        <li>Feito por
          <a href="https://kaiofelipejs.dev/" target="_blank" rel="noopener noreferrer">
            Kaio Felipe Silva
          </a>
        </li>
      </ul>
    </div>
   </section>

   <?php wp_footer(); ?>
  <script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/691418e0-3edb-4e44-ae1b-4bd602bc9fc3-loader.js" ></script>
  </body>
</html>

<?php
// Template Name: Contato
  get_header();
  $whatsapp_number_formatted = WhatsappNumberFormatted(get_field('whatsapp_number'));
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<main class="contact-wrapper container intro-page js-scroll">
  <div class="align-center container">
    <div class="flex-item align-center">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/contato.svg"
        alt="Ilustração com icones de localização, e-mail e telefone"
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
          <li>
            <a
              href="mailto:<?php the_field('email_address') ?>"
              target="_blank"
              class="email"
              rel="noopener noreferrer"
            >
              <?php the_field('email_address') ?>
            </a>
          </li>
          <li>
            <a
              href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp_number_formatted ?>&text=Ol%C3%A1!%20Encontrei%20seu%20contato%20atrav%C3%A9s%20do%20site%2C%20podemos%20conversar%3F%20"
              target="_blank"
              rel="noopener"
            >
              <?php the_field('whatsapp_number') ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/whatsapp_black.png" alt="WhatsApp icon" />
            </a>
          </li>
        </ul>
        <a
          href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp_number_formatted ?>&text=Ol%C3%A1!%20Encontrei%20seu%20contato%20atrav%C3%A9s%20do%20site%2C%20podemos%20conversar%3F%20"
          target="_blank"
          rel="noopener"
          class="btn contact"
        >
          Chamar no WhatsApp
        </a>
      </div>

      <div class="contact-social">
        <h3>Redes Sociais</h3>
        <?php include(TEMPLATEPATH . "/include/icons.php"); ?>
      </div>
    </div>
  </div>
</main>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>

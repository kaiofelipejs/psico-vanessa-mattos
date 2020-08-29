<?php
// Template Name: Blog
  get_header();
?>
<main class="intro-page js-scroll">
  <div class="container">
    <div class="flex-item align-center">
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.svg"
        alt="Ilustração de uma maquina de datilografar"
      />
    </div>

    <div class="content-right flex-item align-center">
      <h2>Blog</h2>
      <p>
        Conteúdos para aflorar seus conhecimentos...
      </p>
    </div>
  </div>
</main>

<section class="container js-scroll">
  <div class="blog">
    <div class="posts container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="blog-post">
        <a href="<?php the_permalink(); ?>">
          <div class="blog-post-image">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="blog-post-title">
            <h3><?php the_title()?></h3>
            <div class="blog-post-data">
              <svg id="clock" enable-background="new 0 0 443.294 443.294" viewBox="0 0 443.294 443.294"  xmlns="http://www.w3.org/2000/svg">
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

      <?php endwhile; else: endif; ?>
    </div>

    <div class="blog-buttons">
      <p class="blog-button-prev">
        <?php previous_posts_link('Posts recentes');?>
      </p>

      <p class="blog-button-next">
        <?php next_posts_link('Posts antigos');?>
      </p>
    </div>
  </div>
</section>
<?php get_footer(); ?>

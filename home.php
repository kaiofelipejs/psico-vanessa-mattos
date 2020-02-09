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
          Acompanhe aqui conteúdos sobre ansiedade, stress, família e outros...
          </p>
        </div>
      </div>
    </main>

    <section class="container js-scroll">
      <div class="blog">
        <div class="posts container">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="blog-post flex-item">
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
          <?php endwhile; ?> 
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
        <?php else: endif; ?>

    </section>

<?php get_footer(); ?>

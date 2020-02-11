<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article>
   <section class="post-title">
      <div class="intro-page container">
         <h2><?php the_title();?></h2>
      </div>
   </section>

   <section class="container">
      <div class="post-wrapper-content">
         <div class="post-content">
            <p><?php the_content();?></p>
         </div>
		 <div class="blog-buttons">
			 <p class="blog-button-prev">
				<a href="/blog">Voltar para o blog</a>
			 </p>
		 </div>
      </div>
   </section>
</article>

<?php endwhile; else: ?>

   <h1>Ops, essa página não existe...</h1>

<?php endif; ?>

<?php get_footer(); ?>
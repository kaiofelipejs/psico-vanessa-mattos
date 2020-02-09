<?php $about = get_page_by_title('sobre'); ?>

<h2><?php the_field('titulo-sobre', $about);?></h2>
<p>
   <?php the_field('primeiro-paragrafo-sobre', $about);?>
</p>
<p>
   <?php the_field('segundo-paragrafo-sobre', $about);?>
</p>
<p>
   <?php the_field('terceiro-paragrafo-sobre', $about);?>
</p>
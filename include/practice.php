<?php $speciality = get_page_by_title('especialidade'); ?>

<h2><?php the_field('titulo-pratica', $speciality);?></h2>
<p>
   <?php the_field('primeiro-paragrafo-pratica', $speciality);?>
</p>
<p>
   <?php the_field('segundo-paragrafo-pratica', $speciality);?>
</p>
<p>
   <?php the_field('terceiro-paragrafo-pratica', $speciality);?>
</p>
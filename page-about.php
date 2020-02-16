<?php 
// Template Name: Sobre
  get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="intro-page js-scroll">
      <div class="container">
        <div class="flex-item profile-photo js-scroll ">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/profile-photo.png"
            alt="Foto profissional da Psicóloga Vanessa Mattos"
          />
        </div>

        <div class="content-right flex-item js-scroll">
          <?php include(TEMPLATEPATH . "/include/about.php"); ?>
          <a href="/contato" class="btn">Vamos conversar!</a>
        </div>
      </div>
    </main>

    <section class="focus bg-curves js-scroll active-scroll">
      <div class="container">
        <div class="content-left flex-item js-scroll">
          <h2><?php the_field('titulo-foco')?></h2>
            <p>
              <?php the_field('primeiro-paragrafo-foco');?>
            </p>
            <p>
              <?php the_field('segundo-paragrafo-foco');?>
            </p>
            <p>
              <?php the_field('terceiro-paragrafo-foco');?>
            </p>
          <a href="/especialidade" class="btn">Conhecer mais</a>
        </div>

        <div class="flex-item align-center js-scroll">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foco.svg" alt="" />
        </div>
      </div>
    </section>

    <section class="publications container js-scroll">

      <div class="flex-item js-scroll">
        <h2>Trabalhos Publicados</h2>

        <div class="publication js-scroll">
          <div class="flex-item align-center">
            <a href="http://cesuscvirtual.com.br/revistas/index.php/CIC-CESUSC/article/view/428">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/caderno-iniciacao-v2.jpg" alt="Revista Cesusc Virtual">
            </a>
          </div>

          <div class="publication-info flex-item">
            <a href="http://cesuscvirtual.com.br/revistas/index.php/CIC-CESUSC/article/view/428">
              <h3>O Mundo em Rede: Mapeando a rede social de crianças em psicoterapia.</h3>
            </a>
            <small>Novembro de 2019</small>
            <p class="publication-description">
            Este trabalho pretende apresentar um instrumento de avaliação e intervenção em psicologia, aplicado à infância e que é utilizado de forma lúdica no setting psicoterapêutico. O “Mundo em Rede”, nome dado ao instrumento, se propõe facilitar a construção e visualização da rede social da criança, considerando seu impacto na saúde emocional infantil.             </p>
          </div>
        </div>
        <hr />

        <div class="publication js-scroll">
          <div class="flex-item align-center">
            <a href="https://www.ufpi.br/arquivos_download/arquivos/VOLUME_0920190903151209.pdf">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/praticas-em-psico-escolar.jpg" alt="Livro Práticas em Psicologia Escolas: do Ensino Técnico ao Superior">
            </a>
          </div>

          <div class="publication-info flex-item">
            <a href="https://www.ufpi.br/arquivos_download/arquivos/VOLUME_0920190903151209.pdf">
              <h3>Práticas em Psicologia Escolas: do Ensino Técnico ao Superior, Cap. 01</h3>
            </a>
            <small>Junho de 2019</small>
            <p class="publication-description">
              O capítulo 1 tem como foco a atuação em Psicologia Educacional no IFSC, que ao longo de 09 anos estrutura o serviço de psicologia no Campus Florianópolis, a partir da tessitura de redes de significação por meio do trabalho coletivo.
            </p>
          </div>
        </div>
        <hr />

        <div class="publication js-scroll">
          <div class="flex-item align-center">
            <a href="http://cesuscvirtual.com.br/revistas/index.php/CIC-CESUSC/article/view/149">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/caderno-iniciacao-v1.png" alt="Revista Cesusc Virtual">
            </a>
          </div>

          <div class="publication-info flex-item">
            <a href="http://cesuscvirtual.com.br/revistas/index.php/CIC-CESUSC/article/view/149">
              <h3>Família Trans: Uma experiência de genograma para a compreensão e rompimento de paradigmas sociais.</h3>
            </a>
            <small>Junho de 2019</small>
            <p class="publication-description">
              O objetivo do trabalho foi descrever a conjugalidade de um casal trans, ou seja, constituído por pessoas que se autoidentificam como transexuais, com suas implicações sociais e culturais. Utilizou-se como método a abordagem qualitativa, no qual realizou-se entrevista semiestruturada para a produção de um genograma familiar.
            </p>
          </div>
        </div>
        <hr />
      </div>
    </section>
    
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>

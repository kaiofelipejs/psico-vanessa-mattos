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

    <svg class="curve-top" viewBox="0 -10 1700 194" xmlns="http://www.w3.org/2000/svg">
      <path d="M1861 193.998L1488.42 193.998C1488.42 193.998 919.005 194.001 919.005 193.998C919.005 193.995 7.62925e-06 193.998 7.62925e-06 193.998L-2.80361e-06 74.6595C-2.80361e-06 74.6595 206.063 116.653 349.586 51.6632C493.108 -13.3262 661.259 109.654 919.005 51.6631C1176.75 -6.32739 1308.69 -24.8244 1488.42 51.6631C1668.16 128.151 1861 74.6594 1861 74.6594L1861 193.998Z"/>
    </svg>

    <section class="focus bg-wavy js-scroll active-scroll">
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

    <svg class="curve-bottom" viewBox="0 10 1700 194" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 0.999542L372.576 0.999211C372.576 0.999211 941.995 0.996591 941.995 0.999211C941.995 1.00183 1861 0.999669 1861 0.999669V120.338C1861 120.338 1654.94 78.3447 1511.41 143.334C1367.89 208.323 1199.74 85.3435 941.995 143.334C684.249 201.325 552.313 219.822 372.576 143.334C192.839 66.8465 0 120.338 0 120.338V0.999542Z"/>
    </svg>

    <section class="publications container js-scroll">
      <div class="flex-item js-scroll">
        <h2>Trabalhos Publicados</h2>

        <div class="publication js-scroll">
          <div class="flex-item align-center">
            <a 
              href="http://cesuscvirtual.com.br/revistas/index.php/CIC-CESUSC/article/view/428"
              target="_blank"
              rel="noopener"  
            >
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/caderno-iniciacao-v2.jpg" alt="Revista Cesusc Virtual">
            </a>
          </div>

          <div class="publication-info flex-item">
            <a 
              href="http://cesuscvirtual.com.br/revistas/index.php/CIC-CESUSC/article/view/428" 
              target="_blank"
              rel="noopener"
            >
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
            <a 
              href="https://www.ufpi.br/arquivos_download/arquivos/VOLUME_0920190903151209.pdf"
              target="_blank"
              rel="noopener"
            >
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/praticas-em-psico-escolar.jpg" alt="Livro Práticas em Psicologia Escolas: do Ensino Técnico ao Superior">
            </a>
          </div>

          <div class="publication-info flex-item">
            <a 
              href="https://www.ufpi.br/arquivos_download/arquivos/VOLUME_0920190903151209.pdf"
              target="_blank"
              rel="noopener"
            >
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
            <a 
              href="http://cesuscvirtual.com.br/revistas/index.php/CIC-CESUSC/article/view/149"
              target="_blank"
              rel="noopener"
            >
              <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/caderno-iniciacao-v1.png" alt="Revista Cesusc Virtual">
            </a>
          </div>

          <div class="publication-info flex-item">
            <a 
              href="http://cesuscvirtual.com.br/revistas/index.php/CIC-CESUSC/article/view/149"
              target="_blank"
              rel="noopener"
            >
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

<?php get_header();?>

<section id="SlideshowHome" class="hide-on-small-only">
  <div class="hide-on-med-only ">
    <div class="container">
      <?php do_action('slideshow_deploy', '12'); ?>
    </div>
 </div>
 <div class="hide-on-large-only ">
  <?php do_action('slideshow_deploy', '13'); ?>
</div>
</section>
<!--SECTION SOBRE-->
<section id="Sobre">
  <div class="container">
    <div class="row">
      <!--TEXTO DA SESSÃO SOBRE-->
      <div class="col s12 l7 textosobre">
        <h1>Sobre</h1>
        <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
      </div>
      <!--IMAGEM DA SESSÃO SOBRE-->
      <div class="col s12 l5 hide-on-med-and-down">
        <img src="<?php bloginfo('template_url');?>/images/IphoneSobre.png" alt="Película Iphone" class="responsive-img">
      </div>
    </div>
  </div>
</section>
<!--SECTION CATEGORIAS-->
<section id="Categorias">
  <div class="row">
    <!--CAPAS-->
    <div class="col s12 Categoria" id="Capas">
      <h3>Capas</h3>
    </div>
    <!--SUPORTES-->
    <div class="col s12 l6 Categoria" id="Suportes">
      <h3>Suportes</h3>
    </div>
    <!--CABOS-->
    <div class="col s12 l6 Categoria" id="Cabos">
      <h3>Cabos</h3>
    </div>
    <!--BATERIA-->
    <div class="col s12 l6 Categoria" id="Baterias">
      <h3>Baterias</h3>
    </div>
    <!--Peliculas-->
    <div class="col s12 l6 Categoria" id="Peliculas">
      <h3>Películas</h3>
    </div>
  </div>
</section>
<?php get_footer(); ?>

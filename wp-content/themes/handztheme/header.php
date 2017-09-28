<!DOCTYPE html>
<html>
<head>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/materialize/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.ico" />
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <meta charset="utf-8">
  <title>
      <?php if ( is_category() ) {
        echo 'Categoria de &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
      } elseif ( is_tag() ) {
        echo 'Arquivo de &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
      } elseif ( is_archive() ) {
        wp_title(''); echo ' Arquivo | '; bloginfo( 'name' );
      } elseif ( is_search() ) {
        echo 'Buscar por &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
      } elseif ( is_home() || is_front_page() ) {
        bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
      }  elseif ( is_404() ) {
        echo 'Erro 404 - Não Encontrado | '; bloginfo( 'name' );
      } elseif ( is_single() ) {
        wp_title('');
      } else {
        echo wp_title( ' | ', false, right ); bloginfo( 'name' );
      } ?>
    </title>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <?php wp_head(); ?>
</head>

  <body>
      <!--BARRA DE NAVEGAÇÃO-->
      <div class="navbar-fixed">
        <nav class="semi-black z-depth-0 Navegacao">
          <div class="container">
            <div class="nav-wrapper">
              <a href="http://bulkdesign.com.br/handz" class="brand-logo black-text"><img src="<?php bloginfo('template_url');?>/images/handz_logo.png"></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="http://bulkdesign.com.br/handz" class="white-text">Home</a></li>
                <li><a href="Produtos" class="white-text">Produtos</a></li>
                <li><a href="Onde-Encontrar" class="white-text">Onde Encontrar</a></li>
                <li><a href="Cupons" class="white-text">Cupons e Promoções</a></li>
                <li><a href="seja-um-revendedor" class="white-text">Seja um Revendedor</a></li>
                <li><a href="#Contato" class="white-text">Contato</a></li>
              </ul>
              <main class="hide-on-large-only">
                <a class="white-text toggle-overlay"><i class="small material-icons">menu</i></a>
              </main>
            </div>
          </div>
        </nav>
      </div>

      <!-- Mobile Menu -->
      <aside>
        <div class="outer-close toggle-overlay">
          <a class="white-text right close"><i class="margin-clear small material-icons">clear</i></a>
        </div>
        <nav class="mobile-menu">
          <ul>
            <li><a href="http://bulkdesign.com.br/handz" class="white-text">Home</a></li>
            <li><a href="Produtos" class="white-text">Produtos</a></li>
            <li><a href="Onde-Encontrar" class="white-text">Onde Encontrar</a></li>
            <li><a href="Cupons" class="white-text">Cupons e Promoções</a></li>
            <li><a href="Revendedor" class="white-text">Seja um Revendedor</a></li>
            <li><a href="#Contato" class="white-text">Contato</a></li>
          </ul>
        </nav>
      </aside>

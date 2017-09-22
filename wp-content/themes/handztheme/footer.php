

    <!--SECTION CONTATO-->
      <section id="Contato" class="section scrollspy">
          <div class="container">
            <div class="row">
                <!--Formulário-->
                <div class="col s12 m12 l12">
                    <h4>Entre em Contato Conosco</h4>
                </div>
                <div class="col l2"></div>
                <div class="col s12 m12 l8 margin50">
                    <form>
                        <div class="col s12 m6 l6">
                            <input type="text" name="ContatoNome" placeholder="Seu Nome (requirido)">
                        </div>
                        <div class=" col s12 m6 l6">
                            <input type="text" name="ContatoEmail" placeholder="Seu E-mail (requirido)">
                        </div>
                        <div class="col s12">
                            <input type="text" name="ContatoTelefone" placeholder="Sua Mensagem">
                        </div>
                        <div class="col s12">
                            <input type="submit" value="Enviar" name="btnEnviar" class="btn">
                        </div>
                    </form>
                </div>
            </div>
          </div>
      </section>

      <section id="Footer">
        <div class="container">
          <div class="row">

            <div class="col s12 sitemap hide-on-small-only">
               <div class="col m6 l3">
                <h5>Sobre</h5>
                   <a href="#"><p>Sobre Nós</p></a>
                   <a href="#"><p>Onde Comprar</p></a>
               </div>
                <div class="col m6 l3">
                <h5>Suporte</h5>
                   <a href="#"><p>Contato</p></a>
                   <a href="#"><p>Ajuda</p></a>
               </div>
                <div class="col m6 l3">
                <h5>Legal</h5>
                   <a href="#"><p>Privacidade</p></a>
                   <a href="#"><p>Termos</p></a>
               </div>
                <div class="col m6 l3">
                <h5>Outros</h5>
                   <a href="#"><p>Conta</p></a>
                   <a href="$#"><p>Produtos</p></a>
               </div>
            </div>

            <div class="col s12 Social">
                <a href="http://facebook.com" target="_blank"><img src="<?php bloginfo('template_url');?>/images/FacebookIcon.png"></a>
                <a href="http://twitter.com" target="_blank"><img src="<?php bloginfo('template_url');?>/images/TwitterIcon.png"></a>
                <a href="http://instagram.com" target="_blank"><img src="<?php bloginfo('template_url');?>/images/InstagramIcon.png"></a>
            </div>
            <div class="col s12">
                <p id="ParagrafoFooter">Händz - Todos os direitos reservados © 2017 | Made by <a href="http://bulkdesign.com.br">Bulk Design</a></p>
            </div>
          </div>
        </div>
      </section>


  <!--Import jQuery before materialize.js-->
  <script src="http://code.jquery.com/jquery.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/materialize/js/materialize.js"></script>

  <!--SCROLLSPY-->
  <script>
    <!--SCROLLSPY-->
    $(document).ready(function(){
        $('.scrollspy').scrollSpy();
    });
  </script>

  <!--ASIDE-->
  <script type="text/javascript">
  (function($) {
    $(function() {
      $('.toggle-overlay').click(function() {
        $('aside').toggleClass('open');
      });
    });
    })(jQuery);
  </script>

  <?php wp_footer(); ?>
	</body>
</html>

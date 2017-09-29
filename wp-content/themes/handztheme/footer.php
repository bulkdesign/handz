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
                            <input type="text" name="ContatoNome" placeholder="Seu Nome (Requerido)">
                        </div>
                        <div class=" col s12 m6 l6">
                            <input type="text" name="ContatoEmail" placeholder="Seu E-mail (Requerido)">
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
               <div class="col l2">
                <h5>Sobre</h5>
                   <a href="#"><p>Sobre Nós</p></a>
                   <a href="#"><p>Onde Comprar</p></a>
               </div>
                <div class="col l2">
                <h5>Suporte</h5>
                   <a href="#"><p>Contato</p></a>
                   <a class=" waves-light modal-trigger" href="#modal1"><p>SAC</p></a>

                   <!--Modal do SAC-->
                   <div id="modal1" class="modal">
                    <div class="modal-content">
                      <h3>Entre em contato conosco</h3>
                      <h3 style="font-size: 20px;">(41) 4002-8922</h3>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
                    </div>
                  </div>
               </div>
                <div class="col l2">
                <h5>Legal</h5>
                   <a href="#"><p>Privacidade</p></a>
                   <a href="#"><p>Termos</p></a>
               </div>
               <div class="col l4"></div><!--ESPAÇAMENTO CENTRAL-->
               <div class="col l2" style="text-align: right;">
                 <h5>Outros</h5>
                   <a href="Produtos"><p>Produtos</p></a>
                   <a href="Cupons"><p>Cupons e Promoções</p></a>
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
    $(document).ready(function(){
      // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();
    });
  </script>
  <?php wp_footer(); ?>
	</body>
</html>

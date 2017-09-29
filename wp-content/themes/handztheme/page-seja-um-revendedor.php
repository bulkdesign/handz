<?php /* Template Name: Seja um Revendedor */ ?>
<?php get_header();?>
	<section id="revendedor">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h1>Seja um Revendedor</h1>
					<p class="subtitulo" ">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</p>
					<hr>
				</div>
                <div class="col l2"></div>
                <div class="col s12 m12 l8 margin50">
                    <form method="post">
                        <div class="col s12 m12 l12">
                            <input type="text" name="ContatoNome" placeholder="Nome Completo">
                        </div>
                        <div class="col s12 m6 l6">
                            <input type="text" name="ContatoCpf" placeholder="CPF">
                        </div>
                        <div class="col s12 m6 l6">
                            <input type="text" name="ContatoTelefone" placeholder="Telefone">
                        </div>
                        <div class=" col s12 m6 l6">
                            <input type="text" name="ContatoEmail" placeholder="E-mail">
                        </div>
                        <div class="col s12 m6 l6">
                            <input type="text" name="ContatoEndereço" placeholder="Endereço">
                        </div>
                        <div class="col s12 m6 l6">
                            <input type="text" name="ContatoBairro" placeholder="Bairro">
                        </div>
                        <div class="col s12 m6 l6">
                            <input type="text" name="ContatoCep" placeholder="CEP">
                        </div>

                        <input type="submit" name="btnConsultor" value="Enviar" class="btn">
                    </form>
                </div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
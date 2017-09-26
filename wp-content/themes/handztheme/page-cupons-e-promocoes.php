<?php /* Template Name: Cupons e Promoções */ ?>
<?php get_header();?>
	<section id="cuponsepromocoes">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h1>Cupons e Promoçoes</h1>
					<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</p>
					<hr>
				</div>
				<div>
					<?php echo do_shortcode("[post_grid id='25']"); ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
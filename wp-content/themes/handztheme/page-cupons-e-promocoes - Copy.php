<?php /* Template Name: Cupons e Promoções */ ?>
<?php get_header();?>
	<section id="cuponsepromocoes">
		<div class="container">
			<div class="row">
			<h1>Cupons e Promoçoes</h1>
			<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</p>
			<hr>
	    	<?php if ( have_posts() ) : ?>
	    		<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
		    	<?php endwhile; ?>
	        <?php endif; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
<?php /* Template Name: Cupons e Promoções */ ?>
<?php get_header();?>
	<section id="cuponsepromocoes">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h1>Cupons e Promoçoes</h1>
					<hr>
				</div>.
				<?php while ( have_posts() ) : the_post(); ?>
					
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="col s12 grid">
					<?php $loop = new WP_Query( array( 'order' => 'asc', 'post_type' => array('cupom') )); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<div class="col s12 m6 l4 cupom">
							<?php the_content(); ?>
							<h1 style="font-size:16px !important;"><?php the_title(); ?></h1>
							<a class="btn" href="#modal">Gerar Cupom</a>
						</div>
					<?php endwhile; wp_reset_query(); ?>
					</div>
				</article>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
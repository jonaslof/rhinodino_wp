<?php get_header(); ?>

	<section class="landing-page" role="main">
	
		<div class="landing-page-logo">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/public/assets/img/png/rhinodino_logo_black.png">
		</div>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<?php //get_template_part('tpl', 'portfolio-item'); ?>
			
		<?php endwhile; else: ?>
			
		<?php endif; ?>
		
	</section><!-- #site-main -->
		
<?php get_footer(); ?>

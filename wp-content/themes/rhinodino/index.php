<?php get_header(); ?>

	<div id="main">
		<?php $hero_image = get_field('hero_image', 'option'); ?>
		<?php $hero_content = get_field('hero_text', 'option'); ?>
		<header id="header" class="homepage-header" style="background-image: url(<?php echo $hero_image['sizes']['hero']; ?>) ">
			<?php echo $hero_content; ?>
		</header>

		<section id="content" class="homepage-portfolio">
			<?php 
				$args = array(
					'post_type' => 'portfolio',
					'post_status' => 'publish',
					'posts_per_page' => 4
				); 

				$posts = new WP_Query($args);
			?>
			<?php if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
				<?php get_template_part('tpl', 'portfolio-item');?>
			<?php endwhile; else: ?>
				
			<?php endif; ?>
		</section>

	</div>
		
<?php get_footer(); ?>

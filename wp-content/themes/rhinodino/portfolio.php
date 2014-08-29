<?php //Template Name: Portfolio ?>
<?php get_header(); ?>

	<div id="main">
		<header id="header" class="page-header">
			<h1><?php the_title(); ?></h1>
		</header>

		<section id="content" class="homepage-portfolio">
			<?php 
				$args = array(
					'post_type' => 'portfolio',
					'post_status' => 'publish',
					'posts_per_page' => -1
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

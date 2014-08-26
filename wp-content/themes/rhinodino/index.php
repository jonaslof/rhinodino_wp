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
				<a href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title(); ?>">
					<?php $image_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portfolio'); ?>
					<article id="portfolio-item-<?php $post->ID; ?>" class="portfolio-item" style="background-image: url(<?php echo $image_src[0]; ?>)">
						
						<div class="portfolio-item-inner">
							<?php $logo = get_field('portfolio_logo'); ?>
							
							<?php if($logo): ?>
								<div class="portfolio-item-logo">
									<img src="<?php echo $logo['sizes']['medium']; ?>" alt="<?php echo $logo['alt']; ?>">
								</div>
							<?php else: ?>
								<div class="portfolio-item-title">
									<h2><?php the_title(); ?></h2>
								</div>
							<?php endif; ?>
							
						</div>

					</article>
				</a>
			<?php endwhile; else: ?>
				
			<?php endif; ?>
		</section>

	</div>
		
<?php get_footer(); ?>

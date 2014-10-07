<?php //Template Name: Portfolio ?>
<?php get_header(); ?>

	<div id="main">
		<?php $image_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'hero'); ?>
		<header id="header" class="single-portfolio-header" style="background-image: url(<?php echo $image_src[0]; ?>) ">
			<?php $logo = get_field('portfolio_logo'); ?>			
			<?php if($logo): ?>
				<img src="<?php echo $logo['sizes']['medium']; ?>" alt="<?php echo $logo['alt']; ?>">
			<?php else: ?>
					<h1><?php the_title(); ?></h1>
			<?php endif; ?>
		</header>

		<section id="content" class="page-content single-portfolio-content">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
				
			<?php endif; ?>
		</section>

		<?php $gallery = get_field('bildgalleri'); ?>
		<?php if ($gallery): ?>
			<section class="portfolio-gallery">
				<?php foreach ($gallery as $image): ?>
					<img src="<?php echo $image['url']; ?>" title="<?php echo $image['title']; ?>" alt="<?php echo $image['alt']; ?>" width="720">
				<?php endforeach; ?>
			</section>
		<?php endif; ?>

		<section class="homepage-portfolio">
			<?php 
				$args = array(
					'post_type' => 'portfolio',
					'post_status' => 'publish',
					'posts_per_page' => -1,
					'post__not_in' => array($post->ID)
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

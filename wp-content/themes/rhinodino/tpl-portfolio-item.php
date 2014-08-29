<a class="portfolio-item-link" href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title(); ?>">
	<?php $image_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portfolio'); ?>
	<article id="portfolio-item-<?php $post->ID; ?>" class="portfolio-item" style="background-image: url(<?php echo $image_src[0]; ?>)">
		
		<div class="portfolio-item-inner">
			<span class="portfolio-item-align-helper"></span>
			<?php $logo = get_field('portfolio_logo'); ?>
			
			<?php if($logo): ?>
				<div class="portfolio-item-logo">
					<img src="<?php echo $logo['sizes']['medium']; ?>" alt="<?php echo $logo['alt']; ?>">
				</div>
				<div class="portfolio-item-toggle">
					<h2><?php the_title(); ?></h2>
					<p class="portfolio-item-subtitle"><?php echo get_the_excerpt($post->ID); ?></p>
				</div>
			<?php else: ?>
				<div class="portfolio-item-title">
					<h2><?php the_title(); ?></h2>
				</div>
			<?php endif; ?>
			
		</div>

	</article>
</a>
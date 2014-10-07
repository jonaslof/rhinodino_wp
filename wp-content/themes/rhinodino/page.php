<?php get_header(); ?>

<div id="main">

	<?php $image_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'hero'); ?>
	<?php if(has_post_thumbnail()): ?>
		<header id="header" class="single-portfolio-header" style="background-image: url(<?php echo $image_src[0]; ?>) ">
			<?php $logo = get_field('portfolio_logo'); ?>			
			<?php if($logo): ?>
				<img src="<?php echo $logo['sizes']['medium']; ?>" alt="<?php echo $logo['alt']; ?>">
			<?php else: ?>
					<h1><?php the_title(); ?></h1>
			<?php endif; ?>
		</header>
	<?php else: ?>
		<header id="header" class="page-header text-header">
			<h1><?php the_title(); ?></h1>
		</header>
	<?php endif; ?>

	<div id="content" class="page-content">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php echo the_content(); ?>
		<?php endwhile; else: ?>
			Nothing here to see.
		<?php endif; ?>
		
	</div><!-- #content -->

</div>
		
<?php get_footer(); ?>

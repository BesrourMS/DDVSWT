	<?php get_header(); ?>
		<div class="container">
			<header id="header" class="codrops-header">
				<h1><a href="./"><?php bloginfo('name'); ?></a></h1>
				<span class="message">This mobile version does not have the slideshow switch</span>
				<button class="slider-switch">Switch view</button>
			</header>
			<div id="overlay" class="overlay">
				<div class="info">
					<h2>Demo interactions</h2>
					<span class="info-drag">Drag Sliders</span>
					<span class="info-keys">Use Arrows</span>
					<span class="info-switch">Switch view</span>
					<button>Got it!</button>	
				</div>
			</div>
			<div id="slideshow" class="dragslider">
				<section class="img-dragger img-dragger-large dragdealer">
					<div class="handle">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )?>
						<div class="slide" data-content="content-<?php the_ID(); ?>">
							<div class="img-wrap"><img src="<?php echo $large_image_url[0] ?>" alt="<?php echo the_title_attribute( array( 'echo' => 0 ) ) ?>"/></div>
							<h2><?php the_title() ?></h2>
							<button class="content-switch">Read more</button>
						</div>
						<?php endwhile; endif; ?>
					</div>
				</section><!-- /img-dragger-->
				<!-- Content section -->
				<section class="pages">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="content" data-content="content-<?php the_ID(); ?>">
						<h2><?php the_title() ?> <span>Distilling design and other interesting methods</span></h2>
						<p><?php the_excerpt() ?></p>
						<p class="related">
							<a href="<?php echo get_permalink(); ?>">Read More</a>
						</p>
					</div>
					<?php endwhile; endif; ?>
				</section>
			</div>
		</div><!-- /container -->
	<?php get_footer(); ?>
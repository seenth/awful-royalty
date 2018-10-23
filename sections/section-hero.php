<?php
include('variables.php');

if ( get_sub_field('background_image') ) {
	$image = get_sub_field('background_image');
	$style = 'background-image:url('. $image['url'] .')';
	$position = get_sub_field('position');
}
?>

<section class="section section--hero<?php echo isset($classes) ? $classes : ''; ?>">
	<div class="layout layout--<?php echo $layout; ?><?php echo $bracket; ?>">
		<div class="hero-image <?php echo $position; ?>"<?php echo isset($style) ? 'style="'. $style .'"' : ''; ?>>
			<div class="hero-container <?php echo $position; ?>">
				<h1><?php echo get_the_title(); ?></h1>				
				<?php if ( get_sub_field('content') ): ?>
					<?php the_sub_field('content'); ?>
				<?php endif; ?>
			</div>
			<?php if ( get_sub_field('cta') ): $cta = get_sub_field('cta'); ?>
				<div class="hero-cta">
					<p><a href="<?php echo $cta['url']; ?>" target="<?php echo $cta['target']; ?>" class="button"><?php echo $cta['title']; ?></a></p>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<?php if (get_sub_field('post_nav')): ?>
		<div class="post-nav-container">
			<?php $next_post = get_next_post(); ?>
			<?php $prev_post = get_previous_post(); ?>
			<?php if (!empty( $next_post )): ?>
			<div class="prev-post-link nav-letters">
				<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
					<span class="nav-letter first">[</span><span class="nav-letter">p</span><span class="nav-letter">r</span><span class="nav-letter">e</span><span class="nav-letter">v</span><span class="nav-letter last">]</span>
				</a>
			</div>
			<?php endif; ?>
			<?php if (!empty( $prev_post )): ?>
			<div class="next-post-link nav-letters">
				<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
					<span class="nav-letter first">[</span><span class="nav-letter">n</span><span class="nav-letter">e</span><span class="nav-letter">x</span><span class="nav-letter">t</span><span class="nav-letter last">]</span>
				</a>
			</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</section>

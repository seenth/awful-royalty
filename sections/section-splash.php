<?php
include('variables.php');

if ( get_sub_field('background_image') ) {
	$image = get_sub_field('background_image');
	$style = 'background-image:url('. $image['url'] .')';
	$position = get_sub_field('position');
}
?>

<section class="section section--splash<?php echo isset($classes) ? $classes : ''; ?>">
	<div class="layout layout--<?php echo $layout; ?><?php echo $bracket; ?>">
		<div class="splash-container <?php echo $position; ?>"<?php echo isset($style) ? 'style="'. $style .'"' : ''; ?>>
			<div class="splash-content<?php echo $position; ?>">
				<?php if ( get_sub_field('title') ): ?>
					<h1><?php the_sub_field('title'); ?></h1>
				<?php endif; ?>
				<?php if ( get_sub_field('subtitle') ): ?>
					<h2><?php the_sub_field('subtitle'); ?></h2>
				<?php endif; ?>
				<div class="splash-text">
					<?php if ( get_sub_field('content') ): ?>
						<?php the_sub_field('content'); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

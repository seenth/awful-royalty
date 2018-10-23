<?php
include('variables.php');
if ( get_sub_field('image') ) {
	$image = get_sub_field('image');
	$position = get_sub_field('position');
}
?>

<section class="section section--image-content<?php echo isset($classes) ? $classes : ''; ?>">
	<div class="layout layout--<?php echo $layout; ?><?php echo $bracket; ?>">
		<div class="flex-container <?php echo $position; ?>">
			<?php if ( get_sub_field('image') ): ?>
			<div class="image-container">
				<div class="image-wrapper">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</div>
			</div>
			<?php endif; ?>
			<?php if ( get_sub_field('content') ): ?>
				<div class="content-container">
					<?php the_sub_field('content'); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

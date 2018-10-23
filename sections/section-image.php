<?php
include('variables.php');
$position = get_sub_field('position');
?>

<section class="section section--image<?php echo isset($classes) ? $classes : ''; ?>">
	<div class="layout layout--<?php echo $layout; ?><?php echo $bracket; ?>">
		<div class="image-repeater-container <?php echo $position; ?>">
			<?php if( have_rows('image') ): ?>
		    <?php while ( have_rows('image') ) : the_row(); ?>
					<?php
					$image = get_sub_field('image');
					if( !empty($image) ): ?>
					<div class="image-container-single">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					</div>
					<?php endif; ?>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php
include('variables.php');
if ( get_sub_field('column_count') ) {
	$count = get_sub_field('column_count');
	$style = 'column-count:'. $count;
}
?>

<section class="section<?php echo isset($classes) ? $classes : ''; ?><?php echo $bracket; ?>">
	<div class="layout layout--<?php echo $layout; ?>">
		<div class="column-content"<?php echo isset($style) ? 'style="'. $style .'"' : ''; ?>>
			<?php if ( get_sub_field('content') ): ?>
				<?php the_sub_field('content'); ?>
			<?php endif; ?>
		</div>
	</div>
</section>

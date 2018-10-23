<?php
include('variables.php');
?>

<section class="section section--title<?php echo isset($classes) ? $classes : ''; ?>">
	<div class="layout layout--<?php echo $layout; ?><?php echo $bracket; ?>">
		<?php if ( get_sub_field('page_title') ): ?>
			<h3>
				<?php the_sub_field('page_title'); ?>
			</h3>
		<?php endif; ?>
		<?php if ( get_sub_field('subtitle') ): ?>
			<h4>
				<?php the_sub_field('subtitle') ?>
			</h4>
		<?php endif; ?>
	</div>
</section>

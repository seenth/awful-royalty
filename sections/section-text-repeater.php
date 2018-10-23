<?php
include('variables.php');
?>

<section class="section section--text-repeater<?php echo isset($classes) ? $classes : ''; ?>">
	<div class="layout layout--<?php echo $layout; ?><?php echo $bracket; ?>">
    <div class="text-repeater-container">
      <?php if( have_rows('content') ): ?>
        <?php while ( have_rows('content') ) : the_row(); ?>
          <div class="text-repeater-content">
    				<?php the_sub_field('text_content'); ?>
          </div>
        <?php endwhile; ?>
  		<?php endif; ?>
    </div>
	</div>
</section>

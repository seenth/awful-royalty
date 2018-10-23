<?php
include('variables.php');
?>

<section class="section section--video<?php echo isset($classes) ? $classes : ''; ?>">
	<div class="layout layout--<?php echo $layout; ?><?php echo $bracket; ?>">
		<div class="embed-container">
			<?php if ( get_sub_field('page_video') ): ?>
				<?php $iframe = get_sub_field('page_video');
									// use preg_match to find iframe src
									preg_match('/src="(.+?)"/', $iframe, $matches);
									$src = $matches[1];
									// add extra params to iframe src
									$params = array(
										'controls' => 0,
										'hd' => 1,
										'autohide' => 1,
										'autoplay' => 1,
										'showinfo' => 0,
										'loop' => 1,
										'rel' => 0,
									);
									$new_src = add_query_arg($params, $src);
									$iframe = str_replace($src, $new_src, $iframe);// add extra attributes to iframe html
									$attributes = 'frameborder="0"';$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);// echo $iframe
									echo $iframe;
									?>
			<?php endif; ?>
		</div>
	</div>
</section>

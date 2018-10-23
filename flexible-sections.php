<?php

if( have_rows('sections') ):
	while( have_rows('sections') ): the_row();

		switch( get_row_layout() ) {
			case 'hero-home':
				get_template_part('sections/section', 'hero-home');
				break;
			case 'hero':
				get_template_part('sections/section', 'hero');
				break;
			case 'image':
				get_template_part('sections/section', 'image');
				break;
			case 'image_content':
				get_template_part('sections/section', 'image-content');
				break;
			case 'projects':
				get_template_part('sections/section', 'projects');
				break;
			case 'splash':
				get_template_part('sections/section', 'splash');
				break;
			case 'text_repeater':
				get_template_part('sections/section', 'text-repeater');
				break;
			case 'title':
				get_template_part('sections/section', 'title');
				break;
			case 'video':
				get_template_part('sections/section', 'video');
				break;
			case 'wysiwyg':
				get_template_part('sections/section', 'wysiwyg');
				break;
		}

	endwhile;
endif;

?>

<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

//
// Section options
//

$section_options = new FieldsBuilder('options');
$section_options
	->addTab('Options')
	->addRadio('layout',
		['instructions' => 'Determines the width of the content.'])
		->addChoice('','Default')
		->addChoice('normal','Normal')
		->addChoice('wide','Wide')
		->addChoice('full','Full')
		->addChoice('narrow','Narrow')
		->addChoice('grid','Grid')
	->addRadio('bracket',
		['instructions' => 'Add bracket to end of content.'])
		->addChoice('','No')
		->addChoice('bracket-left','Left')
		->addChoice('bracket-right','Right')
	->addText('classes',
		['placeholder' => 'section--featured']);

//
// Sections, ordered alphabetically
//

// Hero
$hero = new FieldsBuilder('hero');
$hero
	->addImage('background_image', ['wrapper' => ['width' => 50]])
	->addWysiwyg('content', ['wrapper' => ['width' => 50]])
	->addRadio('position', ['label'=>'Text Position', 'wrapper' => ['width' => 50]])
		->addChoice('left')
    ->addChoice('right')
	->addTrueFalse('post_nav', ['ui' => 1, 'wrapper' => ['width' => 50]]);

$image = new FieldsBuilder('image');
$image
	->addRadio('position')
		->addChoice('left')
		->addChoice('right')
	->addRepeater('image', ['layout'=>'row', 'wrapper' => ['width' => 50]])
		->addImage('image');

//Image + Text
$image_content = new FieldsBuilder('image_content');
$image_content
	->addRadio('position', ['label'=>'Image Position'])
		->addChoice('left')
		->addChoice('right')
	->addImage('image', ['wrapper' => ['width' => 50]])
	->addWysiwyg('content', ['wrapper' => ['width' => 50]]);

// Projects
$projects = new FieldsBuilder('projects');
$projects
	->addRepeater('projects')
		->addPostobject('projects_post');

// Splash
$splash = new FieldsBuilder('splash');
$splash
	->addText('title', ['wrapper' => ['width' => 50]])
	->addText('subtitle', ['wrapper' => ['width' => 50]])
	->addWysiwyg('content', ['wrapper' => ['width' => 50]])
	->addImage('background_image', ['wrapper' => ['width' => 50]]);

// WYSIWYG
$text_repeater = new FieldsBuilder('text_repeater');
$text_repeater
	->addRepeater('content')
		->addWysiwyg('text_content');

// Title
$title = new FieldsBuilder('title');
$title
	->addText('page_title')
	->addText('subtitle');

// Video
$video = new FieldsBuilder('video');
$video
	->addOembed('page_video');

// WYSIWYG
$wysiwyg = new FieldsBuilder('wysiwyg');
$wysiwyg
	->addWysiwyg('content')
	->addRadio('column_count')
		->addChoice('1','1')
    ->addChoice('2','2')
		->addChoice('3','3');

//
// Build out sections
//

$sections = new FieldsBuilder('sections');
$sections
	->addFlexibleContent('sections')
		->addLayout('hero')
			->addTab('Content')
			->addFields($hero)
			->addFields($section_options)
		->addLayout('image', ['label'=>'Image Repeater', 'layout'=>'row'])
			->addTab('Content')
			->addFields($image)
			->addFields($section_options)
		->addLayout('image_content', ['label'=>'Image + Text'])
			->addTab('Content')
			->addFields($image_content)
			->addFields($section_options)
		->addLayout('projects')
			->addTab('Content')
			->addFields($projects)
			->addFields($section_options)
		->addLayout('splash')
			->addTab('Content')
			->addFields($splash)
			->addFields($section_options)
		->addLayout('text_repeater')
			->addTab('Content')
			->addFields($text_repeater)
			->addFields($section_options)
		->addLayout('title')
			->addTab('Content')
			->addFields($title)
			->addFields($section_options)
		->addLayout('video', ['label'=>'Video'])
			->addTab('Content')
			->addFields($video)
			->addFields($section_options)
		->addLayout('wysiwyg', ['label'=>'WYSIWYG'])
			->addTab('Content')
			->addFields($wysiwyg)
			->addFields($section_options);

$page_options = new FieldsBuilder('page_options');
$page_options
	->addWysiwyg('teaser',[
		'instructions' => 'Appears in lists.',
		'media_upload' => 0
	]);

//
// Page content
//

$page = new FieldsBuilder('page');
$page
	->addTab('Page Content')
	->addFields($sections)
	->addTab('Page Options')
	->addFields($page_options)
	->setLocation('post_type', '==', 'page')
		->or('post_type', '==', 'post');

add_action('acf/init', function() use ($page) {
	acf_add_local_field_group($page->build());
});

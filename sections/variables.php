<?php

$layout = 'normal';

if ( get_sub_field('layout') != '' ) {
	$layout = get_sub_field('layout');
}

if ( get_sub_field('classes') != '' ) {
	$classes = ' '. get_sub_field('classes') .'';
}
if ( get_sub_field('bracket') != '' ) {
	$bracket = ' '. get_sub_field('bracket') .'';
}
?>

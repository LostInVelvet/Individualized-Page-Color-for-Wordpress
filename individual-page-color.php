<?php
	/*
	Plugin Name: Individual Page Color
	Description: This plugin will let you change the page background color on any page by using shortcode [bg_color color=#____]
	Version: 1.0
	Author: Tara Rowland
	*/

function set_bg_color( $atts ) {
	$atts = shortcode_atts(
		array(
			'color' => '000',
		), $atts, 'bg_color' );

        $bg_changer = "<style> html{ background-color: ";

        if( '#' != substr($atts['color'], 0, 1)){
	        $bg_changer = $bg_changer.'#';
        }
        $bg_changer = $bg_changer.$atts['color'].'} </style>';

        return $bg_changer;
}
add_shortcode( 'bg_color', 'set_bg_color' );
?>
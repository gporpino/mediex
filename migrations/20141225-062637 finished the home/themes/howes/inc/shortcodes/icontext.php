<?php
// [icontext icon="ok"]Welcome to site[/icontext]
if( !function_exists('thememount_sc_icontext') ){
function thememount_sc_icontext( $atts, $content=NULL ){
	extract( shortcode_atts( array(
		'icon' => '',
	), $atts ) );
	
	$return = '<span class="thememount-icontext"><i class="tmicon-'.$icon.'"></i> '.do_shortcode($content).'</span>';
	return $return;
}
}
add_shortcode( 'icontext', 'thememount_sc_icontext' );

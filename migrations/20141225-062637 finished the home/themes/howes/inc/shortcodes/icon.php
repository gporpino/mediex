<?php
// [icon type="ok" size="small" bgcolor="grey" align="center" roundborder="yes"]
if( !function_exists('thememount_sc_icon') ){
function thememount_sc_icon( $atts ) {
	extract( shortcode_atts( array(
		'type'        => 'ok',
		'size'        => '',
		'align'       => '',
		'roundborder' => '',
		'bgcolor'     => ''
	), $atts ) );
	
	/* Size */
	$preSize   = array('tiny','small','medium','large','extra-large');
	$extraClass = '';
	if( in_array($size, $preSize) ){
		$extraClass = 'icon-size-'.$size;
	}
	
	/* Align */
	$wrap1 = '';
	$wrap2 = '';
	if( $align == 'center' ){
		$wrap1 = '<div class="thememount-icon-wrapper-center">';
		$wrap2 = '</div>';
	} else if( in_array($align, array('left','right')) ){
		$extraClass .= ' icon-align-'.$align;
	}
	
	/* Background Color */
	$preColor   = array('grey', 'blue', 'turquoise' ,'green', 'orange', 'red', 'black', 'skincolor');
	if( trim($bgcolor) != '' && in_array($bgcolor, $preColor) ){
		$extraClass .= ' thememount-ibgcolor thememount-ibgcolor-'.$bgcolor;
	} else {
		/* Rounded */
		if( $roundborder == 'yes'){
			$extraClass .= ' thememount-icon-rounded';
		}
	}
	
	return $wrap1.'<i class="thememount-icon tmicon-'.$type.' '.$extraClass.'"></i>'.$wrap2;
}
}
add_shortcode( 'icon', 'thememount_sc_icon' );
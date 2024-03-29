<?php
// extract(shortcode_atts(array(
//     'color' => 'wpb_button',
//     'icon' => 'none',
//     'size' => '',
//     'target' => '',
//     'href' => '',
//     'title' => __('Text on the button', "js_composer"),
//     'call_text' => '',
//     'position' => 'cta_align_right',
//     'el_class' => ''
// ), $atts));
extract(shortcode_atts(array(
    'h2' => '',
    'h4' => '',
    'position' => '',
    'el_width' => '',
    'style' => '',
    'txt_align' => '',
    'accent_color' => '',
    'link' => '',
    'title' => __('Text on the button', "js_composer"),
    'color' => '',
    'icon' => '',
    'size' => '',
    'btn_style' => '',
    'el_class' => '',
    'css_animation' => '',

    'btniconposition' => '',
    'btnicon'         => '',
	'bigfont'         => '',
	'sepline'         => '',
), $atts));

$class = "vc_call_to_action wpb_content_element";
// $position = 'left';
// $width = '90';
// $style = '';
// $txt_align = 'right';
$link = ($link=='||') ? '' : $link;

$class .= ($position!='') ? ' vc_cta_btn_pos_'.$position : '';
$class .= ($el_width!='') ? ' vc_el_width_'.$el_width : '';
$class .= ($color!='') ? ' vc_cta_'.$color : '';
$class .= ($style!='') ? ' vc_cta_'.$style : '';
$class .= ($txt_align!='') ? ' vc_txt_align_'.$txt_align : '';
$class .= ($btniconposition!='') ? ' thememount_btn_position_'.$btniconposition : '';
$class .= ($bigfont!='') ? ' thememount_cta_bigfont_'.$bigfont : '';
$class .= ($sepline!='') ? ' thememount_cta_sepline_'.$sepline : '';


$inline_css = ($accent_color!='') ? ' style="'.vc_get_css_color('background-color', $accent_color).vc_get_css_color('border-color', $accent_color).'"' : '';

$class .= $this->getExtraClass($el_class);
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class, $this->settings['base'], $atts );
$css_class .= $this->getCSSAnimation($css_animation);
?>
<div<?php echo $inline_css; ?> class="<?php echo esc_attr(trim($css_class)); ?>">
    <?php if ($link!='' && $position!='bottom') echo do_shortcode('[vc_button2 link="'.$link.'" title="'.$title.'" color="'.$color.'" icon="'.$icon.'" size="'.$size.'" style="'.$btn_style.'" el_class="vc_cta_btn" btnicon="'.$btnicon.'" btniconposition="'.$btniconposition.'" ]'); ?>
<?php if ($h2!='' || $h4!=''): ?>
    <div class="hgroup">
        <?php if ($h2!=''): ?><h2 class="wpb_heading"><?php echo $h2; ?></h2><?php endif; ?>
        <?php if ($h4!=''): ?><h4 class="wpb_heading"><?php echo $h4; ?></h4><?php endif; ?>
    </div>
<?php endif; ?>
    <?php echo wpb_js_remove_wpautop($content, true); ?>
    <?php if ($link!='' && $position=='bottom') echo do_shortcode('[vc_button2 link="'.$link.'" title="'.$title.'" color="'.$color.'" icon="'.$icon.'" size="'.$size.'" style="'.$btn_style.'" el_class="vc_cta_btn" btnicon="'.$btnicon.'" btniconposition="'.$btniconposition.'"]'); ?>
</div>
<?php $this->endBlockComment('.vc_call_to_action') . "\n";
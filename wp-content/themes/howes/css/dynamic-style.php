<?php 

$root = '../../../..'; // Going to root directory
if( function_exists('get_home_path') ){
	$k_dyamic_internal = true;
	$root = get_home_path();
}

if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
} else {
	die('/* Error */');
}
/**********************************************/
/* Functions */
$path = dirname( dirname(__FILE__) );
require_once( $path.'/inc/tools.php' ); // Functions
/* ------------------------------------ */
/* Creating variable for theme options */
global $howes;
/* ------------------------------------ */

/*
 *  Generate dynamic style. Internal use only.
 */
if( isset($_GET['color']) && trim($_GET['color'])!='' ){
	$howes['skincolor'] = '#'.trim($_GET['color']);
}



if( !isset($k_dyamic_internal) ){ // Check if internal CSS or not
	header("Content-type: text/css"); // Setting header for CSS file
}


/* Output start
------------------------------------------------------------------------------*/ ?>
/*------------------------------------------------------------------
* dynamic-style.php index *
[Table of contents]

1.  Background color
2.  Topbar Background color
3.  Element Border color
4.  Textcolor
5.  Boxshadow
6.  Header / Footer background color
7.  Footer background color
8.  Logo Color
9.  Genral Elements
10. "Center Logo Between Menu" options

-------------------------------------------------------------------*/




/**
 * 1. Background color
 * ----------------------------------------------------------------------------
 */
 .wpb_column > .wpb_wrapper .thememount-servicebox.thememount-servicebox-centericon:hover .thememount-icon,
.thememount-heading-wrapper h1.thememount-heading-align-center:after,
.thememount-heading-wrapper h2.thememount-heading-align-center:after,
.thememount-heading-wrapper h3.thememount-heading-align-center:after,
.thememount-heading-wrapper h4.thememount-heading-align-center:after,
.thememount-heading-wrapper h5.thememount-heading-align-center:after,
.thememount-heading-wrapper h6.thememount-heading-align-center:after,
.thememount-heading-wrapper h1.thememount-heading-align-left:after,
.thememount-heading-wrapper h2.thememount-heading-align-left:after,
.thememount-heading-wrapper h3.thememount-heading-align-left:after,
.thememount-heading-wrapper h4.thememount-heading-align-left:after,
.thememount-heading-wrapper h5.thememount-heading-align-left:after,
.thememount-heading-wrapper h6.thememount-heading-align-left:after,
.thememount-heading-style-normal:after, 
.wpb_heading:after, 
.widget-title:after, 
.thememount-portfolio-text h1:after,
.thememount-blog-text h1:after, 
.thememount_cta_sepline_yes.vc_call_to_action h4.wpb_heading:after,
.thememount-btn-effect-colortoborder.thememount-btn-color-skincolor,
.thememount-row-bgtype-skin,
.thememount-btn-effect-colortogrey.thememount-btn-color-skincolor,
.thememount-btn-effect-colortodarkgrey.thememount-btn-color-skincolor, 
.thememount-wbar-bgcolor-skincolor,
.thememount-btn-effect-bordertocolor.thememount-btn-color-skincolor:hover,
.thememount-btn-effect-greytocolor.thememount-btn-color-skincolor:hover,
.thememount-btn-effect-darkgreytocolor.thememount-btn-color-skincolor:hover,
.portfolio-sortable-list ul li a.selected, 
.portfolio-sortable-list ul li a:hover,
.thememount-servicebox-righticon .thememount-icon,
.thememount-servicebox-lefticon .thememount-icon,
.tp-caption.themeline,
.vc_progress_bar .vc_single_bar .vc_bar.striped, 
.footersocialicon,
.thememount-post-left .entry-date,
body .owl-theme .owl-controls .owl-buttons div:hover,
.flex-direction-nav a:hover,
.tagcloud a:hover,
button, 
input[type="submit"], 
input[type="button"], 
input[type="reset"],
.thememount-row-bgcolor-grey .thememount-btn-effect-colortoborder.thememount-btn-color-white,
.thememount-servicebox-bordercentericon .thememount-icon,
.thememount-heading-wrapper .thememount-heading-align-right:after,
.thememount-heading-style-normal.thememount-heading-align-right:after,
.woocommerce .widget_price_filter .ui-slider .ui-slider-range, 
.woocommerce-page .widget_price_filter .ui-slider .ui-slider-range,
.woocommerce .widget_layered_nav_filters ul li a, 
.woocommerce-page .widget_layered_nav_filters ul li a,
.thememount-team-box .thememount-team-icons i:hover,
.vc_btn_skincolor,
.wpb_skincolor,
.thememount-pf-btn .wpb_button_a .wpb_button,
.thememount-blogbox-btn .wpb_button_a .wpb_button,
.tp-caption.skin_divider,
.thememount-testimonial-icon,
.thememount-testimonial-wrapper .flex-control-paging li a.flex-active,
.wpb_gallery_slides .flex-control-paging li a.flex-active,
.thememount-pagination .page-numbers.current,
.thememount-pagination a.page-numbers:hover,
.woocommerce ul.products li.product .add_to_cart_button, 
.woocommerce-page ul.products li.product .add_to_cart_button,
.woocommerce-page ul.products li.product .button.product_type_variable,
.woocommerce ul.products li.product .button.product_type_variable,
.vc_progress_bar .vc_single_bar.skincolor .vc_bar,
body.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, 
body.woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle,
.thememount-row-bgtype-colors.thememount-row-bgprecolor-dark .thememount-testimonial-wrapper .flex-control-paging li a.flex-active,
.thememount-row-bgtype-video.thememount-row-bgprecolor-dark .thememount-testimonial-wrapper .flex-control-paging li a.flex-active,
.thememount-row-bgprecolor-skin,
.thememount-entry-date,
.nav-menu .children,
ul.nav-menu > li > a:before,
div.nav-menu > ul > li > a:before,
.thememount-fbar-box-w,
.format-gallery .entry-content .page-links a:hover, 
.format-audio .entry-content .page-links a:hover, 
.format-status .entry-content .page-links a:hover, 
.format-video .entry-content .page-links a:hover, 
.format-chat .entry-content .page-links a:hover, 
.format-quote .entry-content .page-links a:hover, 
.page-links a:hover,
.widget_calendar  #today,
.woocommerce #content input.button, 
.woocommerce #respond input#submit, 
.woocommerce a.button, .woocommerce button.button, 
.woocommerce input.button, 
.woocommerce-page #content input.button, 
.woocommerce-page #respond input#submit, 
.woocommerce-page a.button, 
.woocommerce-page button.button, 
.woocommerce-page input.button,
.woocommerce-page ul.products li.product .product_type_grouped, 
.woocommerce ul.products li.product .product_type_grouped,
.woocommerce div.product form.cart .button, 
.woocommerce-page div.product form.cart .button, 
.woocommerce #content div.product form.cart .button, 
.woocommerce-page #content div.product form.cart .button,
.woocommerce a.button, 
.woocommerce-page a.button, 
.woocommerce button.button, .woocommerce-page button.button, 
.woocommerce input.button, .woocommerce-page input.button, 
.woocommerce #respond input#submit, 
.woocommerce-page #respond input#submit, 
.woocommerce #content input.button,
.woocommerce-page #content input.button
.woocommerce table.cart td.actions .button.alt, 
.woocommerce-page table.cart td.actions .button.alt, 
.woocommerce #content table.cart td.actions .button.alt, 
.woocommerce-page #content table.cart td.actions .button.alt,
.woocommerce-page #content input.button[name="update_cart"],
.woocommerce #content input.button[name="update_cart"],
.woocommerce-page #content input.button[name="apply_coupon"],
.woocommerce #content input.button[name="apply_coupon"],
.woocommerce #payment #place_order, 
.woocommerce-page #payment #place_order,
.woocommerce .widget_price_filter .price_slider_amount .button, 
.woocommerce-page .widget_price_filter .price_slider_amount .button,
.woocommerce #content table.cart a.remove, 
.woocommerce table.cart a.remove, 
.woocommerce-page #content table.cart a.remove, 
.woocommerce-page table.cart a.remove,
.woocommerce #content table.cart a.remove:hover, 
.woocommerce table.cart a.remove:hover, 
.woocommerce-page #content table.cart a.remove:hover, 
.woocommerce-page table.cart a.remove:hover,
.thememount-header-cart-link-wrapper span.thememount-cart-qty,
#totop:hover,
.thememount-team-term-list ul li a:hover,
.thememount-team-term-list ul li.thememount-active a,
.main-navigation .mega-menu-wrap ul.mega-menu > li.mega-menu-item > a:before,
.main-navigation .mega-menu-wrap ul.mega-menu > li.mega-current-menu-ancestor > a:before,
.widgettitle:after,
.thememount-row-fullwidth-true .item  .item-content,
.thememount-team-social-links,
.item .item-thumbnail .icons a:hover,
#bbpress-forums ul li.bbp-header,
#bbpress-forums button,
.bbp-submit-wrapper .button,
.widget .bbp-logged-in .button,
.item:hover .item-content .thememount-portfolio-likes,
.single-team-left .thememount-team-social-links a:hover,
.tribe-events-list .tribe-events-event-cost span,
.item-thumbnail .tribe-events-event-cost,
#tribe-bar-form .tribe-bar-submit input[type=submit],
.tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"], 
.tribe-events-calendar td.tribe-events-present div[id*="tribe-events-daynum-"]>a, 
#tribe_events_filters_wrapper input[type=submit], 
.tribe-events-button, 
#tribe-events .tribe-events-button, .tribe-events-button.tribe-inactive, 
#tribe-events .tribe-events-button:hover, 
.tribe-events-button:hover, 
.tribe-events-button.tribe-active:hover,
.single-tribe_events .tribe-events-schedule .tribe-events-cost,
.tribe-events-page-template .datepicker .datepicker-days table tr td:hover{
	background-color: <?php echo $howes['skincolor']; ?>;
}

/* This is Titlebar Backgroundcolor */
.thememount-titlebar-wrapper .thememount-titlebar-inner-wrapper{
	background-color:  rgba( <?php echo hex2rgb($howes['titlebar_bg_color']); ?> , 0.75);
}

/* This is Tranparent Backgroundcolor */
.k_flying_searchform_wrapper #flying_searchform:before,
.thememount-row-bgprecolor-skin:after,
.wpb_skincolor:hover{
	background: rgba( <?php echo hex2rgb($howes['skincolor']); ?> , 0.85);
}
body #shaon-pricing-table .priceTitle span,
body #shaon-pricing-table .featureTitle span,
.error404 a.back-button,
body.woocommerce nav.woocommerce-pagination ul li span.current, 
body.woocommerce #content nav.woocommerce-pagination ul li span.current, 
body.woocommerce-page nav.woocommerce-pagination ul li span.current, 
body.woocommerce-page #content nav.woocommerce-pagination ul li span.current,
.woocommerce ul.products li.product .onsale, 
.woocommerce-page ul.products li.product .onsale,
.woocommerce span.onsale, 
.woocommerce-page span.onsale,
.paging-navigation .meta-nav{
	background: <?php echo $howes['skincolor']; ?>;   
}
/* Rev-slider */
.vc_btn_skincolor.vc_btn_outlined:hover, .vc_btn_skincolor.vc_btn_square_outlined:hover,
.tp-bullets .bullet.selected, 
.tp-leftarrow.default:hover,
.tp-rightarrow.default:hover,
.tp-button.skin,
.tp-caption.mediumskincolorbg{
     background-color:  <?php echo $howes['skincolor']; ?> !important;
}

/* Logo Max-Height */
.headercontent .headerlogo img{
     max-height: <?php echo $howes['logo-max-height']; ?>px;
}

/* Pricing Table */
a.ptp-button:hover,
.ptp-highlight a.ptp-button,
.ptp-highlight div.ptp-price {
	background-color:  <?php echo $howes['skincolor']; ?> !important;
}
.ptp-highlight div.ptp-plan {
	background-color: rgba( <?php echo hex2rgb($howes['skincolor']); ?> , 0.8) !important;
}


/**
 * 2. Topbar Background color
 * ----------------------------------------------------------------------------
 */
header .thememount-topbar{
	background-color: <?php echo $howes['topbarbgcolor']; ?>;
}

/**
 * 3. Element Border color
 * ----------------------------------------------------------------------------
 */
.thememount-fbar-btn,
#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal > li .mega-sub-menu,
ul.nav-menu li > ul, 
ul.nav-menu ul li > ul,
div.nav-menu > ul li > ul,
div.nav-menu > ul ul li > ul{
	border-top-color: <?php echo $howes['skincolor']; ?>;
}
.thememount-content-team-search-box .submit_field button:hover{
	border-color: <?php echo $howes['skincolor']; ?>;
    color: <?php echo $howes['skincolor']; ?>;
}
.thememount-team-term-list ul li a:hover,
.thememount-team-term-list ul li.thememount-active a {	
    border-color: <?php echo $howes['skincolor']; ?>;
}
/* This is Genaral css */
.portfolio-sortable-list ul li a.selected, 
.portfolio-sortable-list ul li a:hover, 
.tagcloud a:hover,
.thememount-row-bgcolor-grey .thememount-btn-effect-colortoborder.thememount-btn-color-white:hover,
#content #bbpress-forums ul.bbp-forums, 
#content #bbpress-forums ul.bbp-topics,
.widget .bbp-logged-in .button:hover,
.df-layout-grand .toggle2 .wpb_toggle_title_active, .df-layout-grand #ui-datepicker-div .ui-datepicker-today, .tribe-events-page-template .datepicker table tr td.active.active, .tribe-events-page-template .datepicker table tr td span.active.active, .ui-timepicker-div .ui-slider-handle, .widget_tag_cloud .tagcloud a:hover, .df-layout-grand .ui-datepicker-calendar tbody tr td:hover, .ui-datepicker-calendar .dp-highlight-begin, .ui-datepicker-calendar .dp-highlight, .ui-datepicker-calendar .dp-highlight-end{
	border: 1px solid <?php echo $howes['skincolor']; ?>;
}
.thememount-pagination .page-numbers.current, .thememount-pagination .page-numbers:hover {
    border-right: 1px solid <?php echo $howes['skincolor']; ?>;
}
.thememount-carousel-controls-inner a:hover,
.thememount-row-bgprecolor-dark .vc_btn_skincolor.vc_btn_square:hover,
.entry-content .vc_btn_skincolor:hover, .vc_btn_skincolor:hover,
blockquote,
.vc_btn_skincolor.vc_btn_outlined, .vc_btn_skincolor.vc_btn_square_outlined,
.vc_btn_skincolor.vc_btn_outlined:hover, 
.vc_btn_skincolor.vc_btn_square_outlined:hover,
.footer.footer-text-color-dark .tagcloud a:hover,
.tribe-events-list .tribe-events-event-cost span,
.item-thumbnail .tribe-events-event-cost,
#tribe-bar-form .tribe-bar-submit input[type=submit]:hover{
	border-color: <?php echo $howes['skincolor']; ?>;
}

/**
 * 4. Textcolor
 * ----------------------------------------------------------------------------
 */
.thememount-row-textcolor-skin p{
	color:rgba( <?php echo hex2rgb($howes['skincolor']); ?> , 0.7);
}
a:hover,
.comment-content a,
.skincolor, .site-title span, 
.wpb_accordion .wpb_accordion_wrapper .ui-state-active .ui-icon:before,
.comment-content a:hover,
.thememount-btn-effect-bordertocolor.thememount-btn-color-skincolor span,
.thememount-btn-effect-colortoborder.thememount-btn-color-skincolor,
.thememount-btn-effect-colortoborder.thememount-btn-color-skincolor:hover span,
.widget a:hover,
.thememount-servicebox-lefticonspacing .thememount-icon,
.thememount-carousel-controls-inner a:hover i,
.thememount-row-bgtype-colors.thememount-row-bgprecolor-skin .thememount-testimonial-icon i,
.thememount-row-bgtype-video.thememount-row-bgprecolor-skin .thememount-testimonial-icon i,
.thememount-testimonial-title,
.thememount-testimonial-title a,
.thememount-meta-details a:hover,
.thememount-post-right .entry-title a:hover,
input[type="submit"]:hover,
input[type="button"]:hover, 
input[type="reset"]:hover,
.nav-links a[rel="prev"]:hover, 
.nav-links a[rel="next"]:hover,
.colored,
.thememount-row-bgcolor-grey .thememount-btn-effect-colortoborder.thememount-btn-color-white:hover span,
.thememount-heading-sepicon i,
.thememount_footer_menu ul li a:hover,
.copyright .thememount_footer_text a:hover,
.vc_btn.vc_btn_round.vc_btn_skincolor:hover,
.woocommerce div.product form.cart .button:hover, 
.woocommerce-page div.product form.cart .button:hover, 
.woocommerce #content div.product form.cart .button:hover, 
.woocommerce-page #content div.product form.cart .button:hover,
.woocommerce a.button:hover, 
.woocommerce-page a.button:hover, 
.woocommerce button.button, 
.woocommerce-page button.button:hover, 
.woocommerce input.button, 
.woocommerce-page input.button:hover, 
.woocommerce #respond input#submit:hover, 
.woocommerce-page #respond input#submit:hover, 
.woocommerce #content input.button:hover, 
.woocommerce-page #content input.button:hover,  
.woocommerce table.cart td.actions .button.alt:hover, 
.woocommerce-page table.cart td.actions .button.alt:hover, 
.woocommerce #content table.cart td.actions .button.alt:hover, 
.woocommerce-page #content table.cart td.actions .button.alt:hover,  
.woocommerce-page #content input.button[name="update_cart"]:hover,
.woocommerce #content input.button[name="update_cart"]:hover,  
.woocommerce-page #content input.button[name="apply_coupon"]:hover, 
.woocommerce #content input.button[name="apply_coupon"]:hover,  
.woocommerce #payment #place_order:hover, 
.woocommerce-page #payment #place_order:hover,  
.woocommerce .widget_price_filter .price_slider_amount .button:hover, 
.woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
.woocommerce ul.products li.product .amount, 
.woocommerce-page ul.products li.product .amount,
.woocommerce ul.products li.product .add_to_cart_button:hover, 
.woocommerce-page ul.products li.product .add_to_cart_button:hover, 
.woocommerce-page ul.products li.product .button.product_type_variable:hover, 
.woocommerce ul.products li.product .button.product_type_variable:hover,
.woocommerce .star-rating span:before, 
.woocommerce-page .star-rating span:before,
.wpb_tour.wpb_content_element .wpb_tabs_nav li.ui-tabs-active a, 
.wpb_tabs.wpb_content_element .wpb_tabs_nav li.ui-tabs-active a,
.woocommerce div.product span.price, 
.woocommerce-page div.product span.price, 
.woocommerce #content div.product span.price, 
.woocommerce-page #content div.product span.price, 
.woocommerce div.product p.price,
.woocommerce-page div.product p.price, 
.woocommerce #content div.product p.price, 
.woocommerce-page #content div.product p.price,
body.error404 .page-content h1,
body.error404 .page-content i:before,
ul.thememount_vc_contact_wrapper li:before,
.thememount-titlebar-wrapper .breadcrumb-wrapper a:hover,
.thememount-portfolio-likes-wrapper .like-active,
.thememount-team-box:hover .thememount-team-title a,
ul.nav-menu > li.current-menu-item > a, 
div.nav-menu > ul > li.current_page_ancestor > a,
div.nav-menu > ul > li.current_page_item > a,
ul.nav-menu > li:hover > a,
ul.nav-menu > li:hover > a, 
ul.nav-menu > li a:hover, 
div.nav-menu > ul > li.current_page_item > a:hover, 
div.nav-menu > ul > li:hover > a,
ul.nav-menu li ul, 
div.nav-menu > ul .children,
ul.nav-menu > li.current-menu-ancestor > a,
a.thememount-portfolio-likes,
.portfolio-wrapper .item:hover .item-content h4 a,
.thememount-servicebox.thememount-servicebox-centericon .thememount-icon,
.thememount-servicebox.thememount-servicebox-righticonspacing .thememount-icon,
.inside .thememount-fid-wrapper i,
ul.nav-menu li li a:hover, 
ul.nav-menu li li:hover > a, 
ul.nav-menu li li.current-menu-item > a,  
ul.nav-menu li li.current-menu-ancestor > a,
div.nav-menu > ul li li a:hover, 
div.nav-menu > ul li li:hover > a, 
div.nav-menu > ul li li.current-menu-item > a,
div.nav-menu > ul li li.current-menu-ancestor > a,
div.nav-menu > ul li li.current_page_item > a,
#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-current-menu-parent > a,
#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a:hover,
#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu li:hover > a,
#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu li.current-menu-item a,
#navbar #site-navigation .mega-menu-wrap .mega-menu-flyout .mega-sub-menu li.mega-current-menu-item > a,
#navbar #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-current-menu-parent:hover > a,
.post-item:hover .item-content h4 a,
.thememount-team-cat-links a,
.item-content h4 a:hover,
.thememount-sb-main-link a,
.thememount-post-readmore a,
.thememount-fbar-box .submit_field button:hover,
.widget_calendar tbody a,
.widget_calendar a,
.site-main ul li:before,
ul.special li:before,
ol.special li:before,
.thememount-blogbox-btn .wpb_button_a .wpb_button:hover,
.thememount-pf-btn .wpb_button_a .wpb_button:hover, 
.thememount-blogbox-btn .wpb_button_a .wpb_button:hover,
.entry-content .vc_btn_skincolor:hover, 
.vc_btn_skincolor:hover,
body.search-no-results .page-content .thememount-big-icon i:before,
.thememount-row-textcolor-skin h1, 
.thememount-row-textcolor-skin h2, 
.thememount-row-textcolor-skin h3, 
.thememount-row-textcolor-skin h4, 
.thememount-row-textcolor-skin h5, 
.thememount-row-textcolor-skin h6, 
.thememount-row-textcolor-skin span,
.large-skincolor-bold,
.comment-reply-link:hover,
.comment-meta a:hover,
.widget_calendar #today a:hover,
.thememount-team-social-links a:hover,
.thememount-tst-contarea-text:before,
#bbpress-forums button:hover,
#content #bbpress-forums ul.topic:hover a.bbp-topic-permalink,
#content #bbpress-forums ul.forum:hover a.bbp-forum-title,
.bbp-submit-wrapper .button:hover,
.widget .bbp-logged-in .button:hover,
.thememount-fbar-bg-skin .tagcloud a:hover,
.thememount-fbar-bg-dark .tagcloud a:hover,
.single-team-left .thememount-team-social-links a,
.footer.footer-text-color-dark .widget ul > li a:hover,
.site-footer .footer-text-color-dark .widget a:hover,
.header-text-color-white .thememount-tb-content a:hover,
body .headerblock .thememount-fbar-box-w.thememount-fbar-text-white .widget a:hover,
.footer.footer-text-color-white .widget ul > li a:hover, 
.site-footer .footer-text-color-white .widget a:hover,
#tribe-bar-form .tribe-bar-submit input[type=submit]:hover{
	color: <?php echo $howes['skincolor']; ?>;
}
.vc_btn_skincolor.vc_btn_outlined, .vc_btn_skincolor.vc_btn_square_outlined,
.wpb_call_to_action .wpb_button_a .wpb_button.wpb_skincolor:hover,
.wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header a:hover, 
.wpb_accordion .wpb_accordion_wrapper .ui-state-active a,
.main-navigation .mega-menu-wrap ul.mega-menu > li.mega-menu-item.mega-current-menu-ancestor:hover > a,
.main-navigation .mega-menu-wrap ul.mega-menu > li.mega-menu-item.mega-current_page_item:hover > a,
.main-navigation .mega-menu-wrap ul.mega-menu > li.mega-current-menu-ancestor > a,
.main-navigation .mega-menu-wrap ul.mega-menu > li.mega-current-menu-item > a,
.header-text-color-white .main-navigation .mega-menu-wrap ul.mega-menu > li.mega-menu-item.mega-current-menu-item:hover > a,
.header-text-color-white .main-navigation .mega-menu-wrap ul.mega-menu > li.mega-menu-item.mega-current-menu-item > a,
.header-text-color-white #navbar #site-navigation .mega-menu-wrap .mega-menu-flyout .mega-sub-menu li.mega-current-menu-item > a,
.header-text-color-white .main-navigation .mega-menu-wrap ul.mega-menu > li.mega-menu-item.mega-current-menu-ancestor > a,
.tp-button.skin.skin-hover:hover{
	color: <?php echo $howes['skincolor']; ?> !important;
}

/**
 * 5. Boxshadow
 * ----------------------------------------------------------------------------
 */
.thememount-btn-effect-colortoborder.thememount-btn-color-skincolor:hover,
.thememount-btn-effect-bordertocolor.thememount-btn-color-skincolor,
button:hover, 
input[type="submit"]:hover, 
input[type="button"]:hover, 
input[type="reset"]:hover,
.vc_btn.vc_btn_round.vc_btn_skincolor:hover,
.wpb_call_to_action .wpb_button_a .wpb_button.wpb_skincolor:hover,
.thememount-pf-btn .wpb_button_a .wpb_button:hover,
.thememount-blogbox-btn .wpb_button_a .wpb_button:hover,
.woocommerce ul.products li.product .add_to_cart_button:hover, 
.woocommerce-page ul.products li.product .add_to_cart_button:hover, 
.woocommerce-page ul.products li.product .button.product_type_variable:hover, 
.woocommerce ul.products li.product .button.product_type_variable:hover,
.woocommerce a.button, 
.woocommerce-page a.button, 
.woocommerce button.button, 
.woocommerce-page button.button, 
.woocommerce input.button, 
.woocommerce-page input.button, 
.woocommerce #respond input#submit, 
.woocommerce-page #respond input#submit, 
.woocommerce #content input.button, 
.woocommerce-page #content input.button,  
.woocommerce table.cart td.actions .button.alt, 
.woocommerce-page table.cart td.actions .button.alt, 
.woocommerce #content table.cart td.actions .button.alt, 
.woocommerce-page #content table.cart td.actions .button.alt,  
.woocommerce-page #content input.button[name="update_cart"], 
.woocommerce #content input.button[name="update_cart"],  
.woocommerce-page #content input.button[name="apply_coupon"], 
.woocommerce #content input.button[name="apply_coupon"],  
.woocommerce #payment #place_order, 
.woocommerce-page #payment #place_order,  
.woocommerce .widget_price_filter .price_slider_amount .button, 
.woocommerce-page .widget_price_filter .price_slider_amount .button,
.woocommerce div.product form.cart .button, 
.woocommerce-page div.product form.cart .button, 
.woocommerce #content div.product form.cart .button, 
.woocommerce-page #content div.product form.cart .button{
	box-shadow: 0 0 0 1px <?php echo $howes['skincolor']; ?> inset;	
}
/* This is Boxshadow */
.tp-button.skin:hover{
	box-shadow: 0 0 0 1px <?php echo $howes['skincolor']; ?> inset !important;	
}

.vc_btn_skincolor.vc_btn_3d {
	background-color:  rgba( <?php echo hex2rgb($howes['skincolor']); ?> , 0.8);
    -webkit-box-shadow: 0 5px 0 rgba( <?php echo hex2rgb($howes['skincolor']); ?> , 1);
    box-shadow: 0 5px 0 rgba( <?php echo hex2rgb($howes['skincolor']); ?> , 1);
}
.vc_btn_skincolor.vc_btn_3d:hover{
	background-color:  rgba( <?php echo hex2rgb($howes['skincolor']); ?> , 0.9);
}
.thememount-fbar-bg-skin.thememount-fbar-box-w:after{
	background-color:  rgba( <?php echo hex2rgb($howes['skincolor']); ?> , 0.54);
}
body.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, 
body.woocommerce-page .widget_price_filter .ui-slider .ui-slider-handle{
	background: rgba( <?php echo hex2rgb($howes['skincolor']); ?> , 0.9);
}
body .minimal .p1 h4{
	background: <?php echo $howes['skincolor']; ?>;
    box-shadow: 0 1px 1px rgba( <?php echo hex2rgb($howes['skincolor']); ?> , 0.7) inset;
}
body .minimal .highlight h3{
	background: <?php echo adjustBrightness($howes['skincolor'], -20); ?>;
}

body .pagination span.current,
body.woocommerce nav.woocommerce-pagination ul li span, 
body.woocommerce #content nav.woocommerce-pagination ul li span, 
body.woocommerce-page nav.woocommerce-pagination ul li span, 
body.woocommerce-page #content nav.woocommerce-pagination ul li span{
	border: 1px solid <?php echo $howes['skincolor']; ?>;
}
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce-page nav.woocommerce-pagination ul li a:hover, 
.woocommerce #content nav.woocommerce-pagination ul li a:hover,
.woocommerce-page #content nav.woocommerce-pagination ul li a:hover  {
 	background-color: <?php echo $howes['skincolor']; ?>;
    border-color: <?php echo $howes['skincolor']; ?>;
}
.woocommerce-page ul.products li.product .product_type_grouped:hover, 
.woocommerce ul.products li.product .product_type_grouped:hover,
.woocommerce div.product form.cart .button:hover, 
.woocommerce-page div.product form.cart .button:hover, 
.woocommerce #content div.product form.cart .button:hover, 
.woocommerce-page #content div.product form.cart .button:hover,
.woocommerce a.button:hover, 
.woocommerce-page a.button:hover, 
.woocommerce button.button, .woocommerce-page button.button:hover, 
.woocommerce input.button, .woocommerce-page input.button:hover, 
.woocommerce #respond input#submit:hover, 
.woocommerce-page #respond input#submit:hover, 
.woocommerce #content input.button:hover,
.woocommerce-page #content input.button:hover,
.woocommerce table.cart td.actions .button.alt:hover, 
.woocommerce-page table.cart td.actions .button.alt:hover, 
.woocommerce #content table.cart td.actions .button.alt:hover, 
.woocommerce-page #content table.cart td.actions .button.alt:hover,
.woocommerce-page #content input.button[name="update_cart"]:hover,
.woocommerce #content input.button[name="update_cart"]:hover,
.woocommerce-page #content input.button[name="apply_coupon"]:hover,
.woocommerce #content input.button[name="apply_coupon"]:hover,
.woocommerce #payment #place_order:hover, 
.woocommerce-page #payment #place_order:hover, 
.product-remove a,
.woocommerce .widget_price_filter .price_slider_amount .button:hover, 
.woocommerce-page .widget_price_filter .price_slider_amount .button:hover{
	box-shadow: 0 0 0 1px  <?php echo $howes['skincolor']; ?> inset;	    
}

/**
 * 6. Header / Footer background color
 * ----------------------------------------------------------------------------
 */
header .headerblock .header-inner, #stickable-header-sticky-wrapper {
	background-color: <?php echo $howes['headerbgcolor']; ?>;
}

/**
 * 7. Footer background color
 * ----------------------------------------------------------------------------
 */
footer.site-footer > div.site-info{
	background-color: <?php echo $howes['footertext_bgcolor']; ?>;
}


/**
 * 8. Logo Color
 * ----------------------------------------------------------------------------
 */

h1.site-title{
	color: <?php echo $howes['logo_font']['color']; ?>;
}

/**
 * 9. Genral Elements
 * ----------------------------------------------------------------------------
 */


/* Site Pre-loader image */
<?php if( isset($howes['loaderimage_custom']['url']) && $howes['loaderimage_custom']['url']!='' ): ?>
.pageoverlay{
	background-image:url('<?php echo $howes['loaderimage_custom']['url']; ?>');
}
<?php elseif( $howes['loaderimg']!='' ): ?>
.pageoverlay{
	background-image:url('../images/loader<?php echo $howes['loaderimg']; ?>.gif');
}
<?php endif; ?>




/**
 * "Center Logo Between Menu" options
 * ----------------------------------------------------------------------------
 */
<?php
if( isset($howes['center-logo-width']) && $howes['center-logo-width']!='' ){
?>
.thememount-header-style-2 #stickable-header ul.nav-menu > li.logo-after-this, 
.thememount-header-style-2 #navbar #site-navigation .mega-menu-wrap .mega-menu > li.mega-logo-after-this{
	margin-right: <?php echo $howes['center-logo-width']; ?>px;
   }
.thememount-header-style-2 h1.site-title { width: <?php echo $howes['center-logo-width']; ?>px;; margin: 0 auto; }
<?php
}
?>


<?php
if( isset($howes['first-menu-margin']) && $howes['first-menu-margin']!='' ){
?>
.thememount-header-style-2 #stickable-header ul.nav-menu > li:first-child, 
.thememount-header-style-2 #stickable-header div.nav-menu > ul > li:first-child,
.thememount-header-style-2  #navbar #site-navigation .mega-menu-wrap .mega-menu > li:first-child{margin-left: <?php echo $howes['first-menu-margin']; ?>px;}
<?php
}
?>






/* ********************* Responsive Menu Code Start *************************** */
<?php
/*
 *  Generate dynamic style for responsive menu. The code with breakpoint.
 */
require_once( $path.'/css/dynamic-menu-style.php' ); // Functions
?>
/* ********************** Responsive Menu Code END **************************** */




/******************************************************/
/******************* Custom Code **********************/

<?php echo $howes['custom_css_code']; ?>

/******************************************************/

<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Howes
 * @since Howes 1.0
 */
global $howes;
$stickyHeaderClass = ($howes['stickyheader']=='y') ? 'masthead-header-stickyOnScroll' : '' ; // Check if sticky header enabled

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- <div id="pageoverlay"></div> -->
<div class="main-holder animsition">
<div id="page" class="hfeed site">
<header id="masthead" class="site-header  header-text-color-<?php echo $howes['header_text_color']; ?>" role="banner">
  <div class="headerblock">
    <?php thememount_floatingbar(); ?>
    <?php thememount_topbar(); ?>
    <div id="stickable-header" class="header-inner <?php echo sanitize_html_class($stickyHeaderClass); ?>">
      <div class="container">
        <div class="headercontent clearfix">
          <div class="headerlogo thememount-logotype-<?php echo $howes['logotype']; ?>">
            <h1 class="site-title"> <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
              <?php if( $howes['logotype'] == 'image' ){ ?>
              <?php /* ?>
							<?php if( $thememount_retina_logo=='on' ){ ?>
								<img class="thememount-logo-img retina" src="<?php echo $howes['logoimg_retina']["url"]; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="<?php echo round(($howes['logoimg']["width"])/2); ?>" height="<?php echo round(($howes['logoimg']["height"])/2); ?>">
							<?php } else { ?>
								<img class="thememount-logo-img standard" src="<?php echo $howes['logoimg']["url"]; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="<?php echo $howes['logoimg']["width"]; ?>" height="<?php echo $howes['logoimg']["height"]; ?>">
							<?php }; ?>
							<?php */ ?>
              <img class="thememount-logo-img standardlogo" src="<?php echo $howes['logoimg']["url"]; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="<?php echo $howes['logoimg']["width"]; ?>" height="<?php echo $howes['logoimg']["height"]; ?>">
              <?php } else { ?>
              <?php if( trim($howes['logotext'])!='' ){ echo $howes['logotext']; } else { bloginfo( 'name' ); }?>
              <?php } ?>
              </a> </h1>
            <h2 class="site-description">
              <?php bloginfo( 'description' ); ?>
            </h2>
          </div>
		  
		  <?php
		  /*
		   * Search is now optional. You can show/hide search button from "Theme Options" directly.
		   */
		  $header_search = ( !isset($howes['header_search']) ) ? '1' : $howes['header_search'] ;
		  $navbarClass   = ( $header_search=='1' ) ? ' class="k_searchbutton"' : '' ;
		  ?>
		  
          <div id="navbar"<?php echo $navbarClass; ?>>
            <nav id="site-navigation" class="navigation main-navigation" role="navigation">
            <div class="header-controls">
				
				<?php if( $header_search=='1'): ?>
                <div class="search_box"> <a href="#"><i class="tmicon-fa-search"></i></a>
                  <div class="k_flying_searchform_wrapper">
                    <form method="get" id="flying_searchform" action="<?php echo home_url(); ?>" >
                      <div class="w-search-form-h">
                        <div class="w-search-form-row">
                          <div class="w-search-label">
                            <label for="searchval">
                              <?php _e("Just type and press 'enter'"); ?>
                            </label>
                          </div>
                          <div class="w-search-input">
                            <input type="text" class="field searchform-s" name="s" id="searchval" placeholder="<?php _e('WRITE SEARCH WORD...', 'howes'); ?>" value="<?php echo get_search_query() ?>">
                          </div>
                          <a class="w-search-close" href="javascript:void(0)" title="<?php _e('Close search', 'howes'); ?>"><i class="tmicon-fa-times"></i></a> </div>
                      </div>
                    </form>
                  </div>
                </div>
				<?php endif; ?>
				
				
                <?php if( function_exists('is_woocommerce') ){ ?>
                <?php global $woocommerce; ?>
                <div class="thememount-header-cart-link-wrapper"> <a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" class="thememount-header-cart-link"><i class="tmicon-fa-shopping-cart"></i> <span class="thememount-cart-qty">
                  <span class="cart-contents"><!-- <?php echo $woocommerce->cart->cart_contents_count ?> --></span>
                  </span> </a> </div>
                <?php } ?>
              </div>
              <h3 class="menu-toggle">
                <?php _e( '<span>Toggle menu</span><i class="tmicon-fa-navicon"></i>', 'howes' ); ?>
              </h3>
              <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'howes' ); ?>">
              <?php _e( 'Skip to content', 'howes' ); ?>
              </a>
              <?php
					   //if ( has_nav_menu( 'primary' ) ){
						//wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' , 'walker' => new thememount_custom_menus_walker ) );
					   //} else {
						wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container_class' => 'menu-main-menu-container nav-menu-wrapper' ) );
					   //}
      			 ?>
              <?php /*?> <?php get_search_form(); ?><?php */?>
              
            </nav>
            <!-- #site-navigation --> 
          </div>
          <!-- #navbar --> 
        </div>
        <!-- .row --> 
      </div>
    </div>
  </div>
  <?php thememount_header_titlebar(); ?>
  <?php thememount_header_slider(); ?>
</header>
<!-- #masthead -->

<div id="main" class="site-main">

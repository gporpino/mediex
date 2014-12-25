<?php
/**
 * The sidebar containing the footer widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Howes
 * @since Howes 1.0
 */
?>

<div id="secondary" class="sidebar-container" role="complementary">
		
		<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
		<div class="widget-area col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
		</div><!-- .widget-area -->
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
		<div class="widget-area col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
		</div><!-- .widget-area -->
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
		<div class="widget-area col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
		</div><!-- .widget-area -->
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
		<div class="widget-area col-xs-12 col-sm-6 col-md-3 col-lg-3">
			<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
		</div><!-- .widget-area -->
		<?php endif; ?>
		
</div><!-- #secondary -->

<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Jewellery Lite
 */

get_header(); ?>

<main id="maincontent" role="main" class="content-vw">
	<div class="container">
    	<h1><?php printf( '<strong>%s</strong> %s', esc_html__( '404','jewellery-lite' ), esc_html__( 'Not Found', 'jewellery-lite' ) ) ?></h1>
		<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn&hellip', 'jewellery-lite' ); ?></p>
		<p class="text-404"><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'jewellery-lite' ); ?></p>
		<div class="more-btn">
	        <a href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e( 'Go Back', 'jewellery-lite' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Go Back','jewellery-lite' );?></span></a>
	    </div>
		<div class="clearfix"></div>
	</div>
</main>

<?php get_footer(); ?>
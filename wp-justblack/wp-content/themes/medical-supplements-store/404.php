<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Medical Supplements Store
 */
get_header(); ?>

<div id="content-aa">
	<div class="container space-top">
        <div class="page-content">		
			<h1><?php esc_html_e( '404 Not Found', 'medical-supplements-store' ); ?></h1>
			<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn&hellip;', 'medical-supplements-store' ); ?></p>
			<p class="text-404"><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'medical-supplements-store' ); ?></p>
			<div class="read-moresec">
           		<a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Return to Home Page', 'medical-supplements-store' ); ?></a>
				</div>
			<div class="clearfix"></div>
        </div>
	</div>
</div>
<?php get_footer(); ?>
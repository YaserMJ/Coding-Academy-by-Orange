<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-aa">
 *
 * @package Medical Supplements Store
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'medical-supplements-store' ) ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> class="main-bodybox">
	<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','medical-supplements-store'); ?></a></div>
	<div class="topbar">
	  	<div class="topbox">
	  		<div class="container">
	  			<div class="row">
			      	<div class="col-lg-3 col-md-3">
				      	<?php if( get_theme_mod( 'medical_supplements_store_world','' ) != '') { ?>
				       		<i class="fas fa-globe"></i><span><?php echo esc_html( get_theme_mod('medical_supplements_store_world','') ); ?></span>
				      	<?php } ?>
			      	</div>
			     	<div class="col-lg-3 col-md-3">
			      		<?php if( get_theme_mod( 'medical_supplements_store_free_shipping','' ) != '') { ?>
			        		<i class="fas fa-truck"></i><span><?php echo esc_html( get_theme_mod('medical_supplements_store_free_shipping','' )); ?></span>
			      		<?php } ?>
			      	</div>
			      	<div class="col-lg-6 col-md-6">
			      		<div class="social">			        
				      		<?php if( get_theme_mod( 'medical_supplements_store_facebook_url') != '') { ?>
				        		<a href="<?php echo esc_url( get_theme_mod( 'medical_supplements_store_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f"></i></a>
				      		<?php } ?>
				      		<?php if( get_theme_mod( 'medical_supplements_store_twitter_url') != '') { ?>
				        		<a href="<?php echo esc_url( get_theme_mod( 'medical_supplements_store_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
				      		<?php } ?>		      		
				      		<?php if( get_theme_mod( 'medical_supplements_store_insta_url') != '') { ?>
				        		<a href="<?php echo esc_url( get_theme_mod( 'medical_supplements_store_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
				      		<?php } ?>
				      		<?php if( get_theme_mod( 'medical_supplements_store_linkdin_url') != '') { ?>
				        		<a href="<?php echo esc_url( get_theme_mod( 'medical_supplements_store_linkdin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
				      		<?php } ?>
				      		<?php if( get_theme_mod( 'medical_supplements_store_youtube_url') != '') { ?>
					        	<a href="<?php echo esc_url( get_theme_mod( 'medical_supplements_store_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i></a>
					        <?php } ?>
				      	</div>
			      	</div>
		      	</div>
		    </div>
	    </div>
	  	<div class="site_header">
		  	<div class="container">
		  		<div class="row">
				    <div class="col-lg-6 col-md-6">
				    	<div class="logo">
					      	<?php if( has_custom_logo() ){ medical_supplements_store_the_custom_logo();
					         	}else{ ?>
					        	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					        <?php $description = get_bloginfo( 'description', 'display' );
					        	if ( $description || is_customize_preview() ) : ?> 
					          <p class="site-description"><?php echo esc_html($description); ?></p>       
					      	<?php endif; }?>
					    </div>
				    </div>
				    <div class="col-lg-6 col-md-6 searchbg">
						<div class="search_form">
							<?php get_search_form(); ?>				 
						</div>
					</div>
				</div>
		    </div>
			<div id="header">
				<div class="container">
					<div class="menubox nav">
					    <div class="mainmenu">
					      <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
					    </div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
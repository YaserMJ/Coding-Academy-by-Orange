<?php
/**
 * The template for displaying home page.
 *
 * Template Name: Custom Home Page
 *
 * @package Medical Supplements Store
 */
get_header(); ?>

<?php do_action( 'medical_supplements_store_before_slider' ); ?>

<?php if( get_theme_mod('medical_supplements_store_slider_arrows') != ''){ ?>
	<section id="slider">
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
		    <?php $pages = array();
		      	for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'medical_supplements_store_slidersettings_page' . $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $pages[] = $mod;
			        }
		      	}
		      	if( !empty($pages) ) :
		        $args = array(
		          	'post_type' => 'page',
		          	'post__in' => $pages,
		          	'orderby' => 'post__in'
		        );
		        $query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          $i = 1;
		    ?>     
		    <div class="carousel-inner" role="listbox">
		      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
		        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
		          	<img src="<?php the_post_thumbnail_url('full'); ?>"/>
		          	<div class="carousel-caption">
			            <div class="inner_carousel">
			              	<h2><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title();?></a></h2>	
			            </div>
		          	</div>
		        </div>
		      	<?php $i++; endwhile; 
		      	wp_reset_postdata();?>
		    </div>
		    <?php else : ?>
		    <div class="no-postfound"></div>
		      <?php endif;
		    endif;?>
		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
		    </a>
	  	</div>  
	  	<div class="clearfix"></div>
	</section> 
<?php }?>
<?php do_action( 'medical_supplements_store_after_slider' ); ?>

<?php if( get_theme_mod('medical_supplements_store_delivery') != ''){ ?>
	<div id="custom-page-services">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="row">
				      	<?php if( get_theme_mod( 'medical_supplements_store_delivery','' ) != '') { ?>
					      	<div class="col-lg-3 col-md-3">
					      		<i class="fas fa-truck"></i>
					      	</div>
					      	<div class="col-lg-9 col-md-9">
					      		<h6><?php echo esc_html( get_theme_mod('medical_supplements_store_delivery','') ); ?></h6>
					      		<p><?php echo esc_html( get_theme_mod('medical_supplements_store_delivery_line','') ); ?></p>
					      	</div>
				      	<?php } ?>
			      	</div>
			  	</div>
			 	<div class="col-lg-3 col-md-3">
			 		<div class="row">
				  		<?php if( get_theme_mod( 'medical_supplements_store_return','' ) != '') { ?>
				  			<div class="col-lg-3 col-md-3">
					      		<i class="fas fa-share"></i>
					      	</div>
					      	<div class="col-lg-9 col-md-9">
					      		<h6><?php echo esc_html( get_theme_mod('medical_supplements_store_return','')); ?></h6>
					      		<p><?php echo esc_html( get_theme_mod('medical_supplements_store_return_line','')); ?></p>
					      	</div>
				  		<?php } ?>
				  	</div>
			    </div>
			    <div class="col-lg-3 col-md-3">
			    	<div class="row">
				    	<?php if( get_theme_mod( 'medical_supplements_store_satisfy','' ) != '') { ?>
					    	<div class="col-lg-3 col-md-3">
						      	<i class="fas fa-thumbs-up"></i>
					      	</div>
					      	<div class="col-lg-9 col-md-9">
					      		<h6><?php echo esc_html( get_theme_mod('medical_supplements_store_satisfy','')); ?></h6>
					      		<p><?php echo esc_html( get_theme_mod('medical_supplements_store_satisfy_line','')); ?></p>
					      	</div>
				  		<?php } ?>
				  	</div>
			    </div>
			    <div class="col-lg-3 col-md-3">
			    	<div class="row">
				  		<?php if( get_theme_mod( 'medical_supplements_store_points','' ) != '') { ?>
				  			<div class="col-lg-3 col-md-3">
						      	<i class="fas fa-star"></i>
					      	</div>
					      	<div class="col-lg-9 col-md-9">
					      		<h6><?php echo esc_html( get_theme_mod('medical_supplements_store_points','')); ?></h6>
					      		<p><?php echo esc_html( get_theme_mod('medical_supplements_store_points_line','')); ?></p>
					      	</div>
				    	<?php } ?>
				    </div>
			    </div>
			</div>
		</div>
	</div>	
<?php }?>

<?php do_action( 'medical_supplements_store_after_service' ); ?>

<?php if( get_theme_mod('medical_supplements_store_sec1_title') != ''){ ?>
	<section id="our-products">
		<div class="container">
	        <?php if( get_theme_mod('medical_supplements_store_sec1_title') != ''){ ?>     
	            <h3><?php echo esc_html(get_theme_mod('medical_supplements_store_sec1_title','')); ?></h3>
	        <?php }?>
			<?php $pages = array();
			$mod = intval( get_theme_mod( 'medical_supplements_store_product_page'));
			if ( 'page-none-selected' != $mod ) {
			  $pages[] = $mod;
			}
			if( !empty($pages) ) :
			  $args = array(
			    'post_type' => 'page',
			    'post__in' => $pages,
			    'orderby' => 'post__in'
			  );
			  $query = new WP_Query( $args );
			  if ( $query->have_posts() ) :
			    $count = 0;
					while ( $query->have_posts() ) : $query->the_post(); ?>
					    <div class="box-image">
					        <p><?php the_content(); ?></p>
					        <div class="clearfix"></div>
					    </div>
					<?php $count++; endwhile; ?>
			  <?php else : ?>
			      <div class="no-postfound"></div>
			  <?php endif;
			endif;
			wp_reset_postdata(); ?>
		    <div class="clearfix"></div>		
		</div>
	</section>
<?php }?>

<?php do_action( 'medical_supplements_store_after_product' ); ?>

<div class="container">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>
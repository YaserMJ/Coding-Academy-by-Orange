<?php
//about theme info
add_action( 'admin_menu', 'medical_supplements_store_gettingstarted' );
function medical_supplements_store_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'medical-supplements-store'), esc_html__('Get Started', 'medical-supplements-store'), 'edit_theme_options', 'medical_supplements_store_guide', 'medical_supplements_store_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function medical_supplements_store_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/dashboard/getstart.css');
   wp_enqueue_script('tabs', get_template_directory_uri() . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'medical_supplements_store_admin_theme_style');

//guidline for about theme
function medical_supplements_store_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'medical-supplements-store' );
?>

<div class="wrapper-info">  
    <div class="tab-sec">
		<div class="tab">
			<div class="logo">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/logo.png" alt="" />
			</div>
			<button class="tablinks home" onclick="openCity(event, 'tc_index')"><?php esc_html_e( 'Free Theme Information', 'medical-supplements-store' ); ?></button>
		  	<button class="tablinks" onclick="openCity(event, 'tc_pro')"><?php esc_html_e( 'Premium Theme Information', 'medical-supplements-store' ); ?></button>
		  	<button class="tablinks" onclick="openCity(event, 'tc_create')"><?php esc_html_e( 'Theme Support', 'medical-supplements-store' ); ?></button>				
		</div>

		<div  id="tc_index" class="tabcontent">
			<h2><?php esc_html_e( 'Welcome to Medical Theme', 'medical-supplements-store' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
			<hr>
			<div class="info-link">
				<a href="<?php echo esc_url( MEDICAL_SUPPLEMENTS_STORE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'medical-supplements-store' ); ?></a>
				<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'medical-supplements-store'); ?></a>
				<a class="get-pro" href="<?php echo esc_url( MEDICAL_SUPPLEMENTS_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'medical-supplements-store'); ?></a>
			</div>
			<div class="col-tc-6">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/screenshot.png" alt="" />
			</div>
			<div class="col-tc-6">
				<P><?php esc_html_e( ' Medical Supplement store is a WordPress theme for medicine, HealthCentre online Supplement store. It is a suitable multipurpose WordPress theme for medical personnels, health centres, Medicals, clinics, pharmacies etc. It is built on Bootstrap 4 with a well built and structured layout. Its a highly responsive theme with a professional layout and design that is in sync with the meta WordPress versions. You can easily set up a good looking store website, or anything that you wish. It is cross-browser and woocommerce compatible and is user & SEO friendly. We do offer a long list of features with theme exclusive functionalities. Our customer support is best in the business; we will satisfy all your needs and requirements. Your website will work insanely fast, with a gorgeous well-structured layout. The theme has been made with the medicine industry in the head and what would appeal to the customers. Your website traffic will improve and the users will stay in for a longer time because of better user experience. A faster, well-built functional website will only improve your business performance. ', 'medical-supplements-store' ); ?></P>
			</div>
    	</div>

		<div id="tc_pro" class="tabcontent">
			<h3><?php esc_html_e( 'Medical Theme Information', 'medical-supplements-store' ); ?></h3>
			<hr>
			<div class="pro-image">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/resize1.png" alt="" />
			</div>
			<div class="info-link-pro">
				<p><a href="<?php echo esc_url( MEDICAL_SUPPLEMENTS_STORE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'medical-supplements-store' ); ?></a></p>
				<p><a href="<?php echo esc_url( MEDICAL_SUPPLEMENTS_STORE_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'medical-supplements-store' ); ?></a></p>
				<p><a href="<?php echo esc_url( MEDICAL_SUPPLEMENTS_STORE_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'medical-supplements-store' ); ?></a></p>
			</div>
			<div class="col-pro-5">
				<h4><?php esc_html_e( 'Medical Pro Theme', 'medical-supplements-store' ); ?></h4>
				<P><?php esc_html_e( 'Do you sell medical supplements? Are you interested in flourishing your business online? We our here to help you! Our Medical Supplements Store WordPress Theme is an ideal solution for you to sell pills, medicines, nutrition products, health & beauty products, etc. It is useful for doctors, nutritionists, surgeons, dieticians, and medical personnel to build their online supplements store, health blog, pharmacy, healthcentre consultancy, drug store, medical center, etc. The theme has a beautiful design with ample of customization and personalization options to create a competitive and stunning website. Our theme has advanced features and functionalities that cater to the ever-growing needs of a medical supplements business. The theme is 100% mobile-friendly so that your website is accessible from any device. Its an SEO friendly theme that brings your website to top ranks in search engines. It makes a user-friendly website encouraging the visitors to make a comeback to your site as they get an amazing user experience. Various call to action buttons (CTA) aid the users to explore your medical supplements store. Additionally, this Nutrition WordPress theme is clean, interactive, professional, multipurpose, and social media friendly. So, start selling to a wide market with this Medical Supplements Store WordPress Theme now! ','medical-supplements-store' ); ?></P>		
			</div>
			<div class="col-pro-6">				
				<h4><?php esc_html_e( 'Product Description', 'medical-supplements-store' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Theme Options using Customizer API', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Responsive design', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Favicon, Logo, title and tagline customization', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Advanced Color options', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( '100+ Font Family Options', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Background Image Option', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Simple and Mega Menu Option', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Enable-Disable options on All sections', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Home Page setting for different sections', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Advance Slider with multiple effects and control options', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Pagination option', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Custom CSS option', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Translations Ready', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Parallax Image-Background Section', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Customizable Home Page', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Full-Width Template', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Footer Widgets & Editor Style', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Woo Commerce Compatible', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Multiple Inner Page Templates', 'medical-supplements-store' ); ?></li>
					<li><?php esc_html_e( 'Advance Social Media Feature', 'medical-supplements-store' ); ?></li>
				</ul>				
			</div>
		</div>	

		<div id="tc_create" class="tabcontent">
			<h3><?php esc_html_e( 'Support', 'medical-supplements-store' ); ?></h3>
			<hr>
			<div class="tab-cont">
		  		<h4><?php esc_html_e( 'Need Support?', 'medical-supplements-store' ); ?></h4>				
				<div class="info-link-support">
					<P><?php esc_html_e( 'Our team is obliged to help you in every way possible whenever you face any type of difficulties and doubts.', 'medical-supplements-store' ); ?></P>
					<a href="<?php echo esc_url( MEDICAL_SUPPLEMENTS_STORE_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support Forum', 'medical-supplements-store' ); ?></a>
				</div>
			</div>
			<div class="tab-cont">	
				<h4><?php esc_html_e('Reviews', 'medical-supplements-store'); ?></h4>				
				<div class="info-link-support">
					<P><?php esc_html_e( 'It is commendable to have such a theme inculcated with amazing features and robust functionalities. I feel grateful to recommend this theme to one and all.', 'medical-supplements-store' ); ?></P>
					<a href="<?php echo esc_url( MEDICAL_SUPPLEMENTS_STORE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'medical-supplements-store'); ?></a>
				</div>
			</div>
			<div class="tab-cont">
				<h4><?php esc_html_e('About Child Theme', 'medical-supplements-store'); ?></h4>				
				<div class="info-link-support">
					<P><?php esc_html_e( 'To customize theme files, you can do variations in child theme rather than in the main theme file.', 'medical-supplements-store' ); ?></P>
					<a href="<?php echo esc_url( MEDICAL_SUPPLEMENTS_STORE_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('Child Theme', 'medical-supplements-store'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<?php
/**
 * Medical Supplements Store Theme Customizer
 *
 * @package Medical Supplements Store
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function medical_supplements_store_customize_register( $wp_customize ) {
	
	/* Custom panel type - used for multiple levels of panels */
	if ( class_exists( 'WP_Customize_Panel' ) ) {

		/**
		 * Class Medical_Supplements_Store_WP_Customize_Panel
		 */
		class Medical_Supplements_Store_WP_Customize_Panel extends WP_Customize_Panel {

			/**
			 * Panel
			 *
			 * @var $panel string Panel
			 */
			public $panel;

			/**
			 * Panel type
			 *
			 * @var $type string Panel type.
			 */
			public $type = 'medical_supplements_store_panel';

			/**
			 * Form the json
			 */
			public function json() {

				$array                   = wp_array_slice_assoc(
					(array) $this, array(
						'id',
						'description',
						'priority',
						'type',
						'panel',
					)
				);
				$array['title']          = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
				$array['content']        = $this->get_content();
				$array['active']         = $this->active();
				$array['instanceNumber'] = $this->instance_number;

				return $array;

			}

		}

	}

	$wp_customize->register_panel_type( 'Medical_Supplements_Store_WP_Customize_Panel' );

	/**
	 * Upsells
	 */
	load_template( trailingslashit( get_template_directory() ) . 'inc/class-customizer-theme-info-control.php' );

	$wp_customize->add_section(
		'medical_supplements_store_theme_info_main_section', array(
			'title'    => __( 'View PRO version', 'medical-supplements-store' ),
			'priority' => 1,
		)
	);
	$wp_customize->add_setting(
		'medical_supplements_store_theme_info_main_control', array(
			'sanitize_callback' => 'esc_html',
		)
	);

	$wp_customize->add_control(
		new Medical_Supplements_Store_Theme_Info(
			$wp_customize, 'medical_supplements_store_theme_info_main_control', array(
				'section'     => 'medical_supplements_store_theme_info_main_section',
				'priority'    => 100,
				'options'     => array(
					esc_html__( 'Enable-Disable options on every section', 'medical-supplements-store' ),
					esc_html__( 'Background Color & Image Option', 'medical-supplements-store' ),
					esc_html__( '100+ Font Family Options', 'medical-supplements-store' ),
					esc_html__( 'Advanced Color options', 'medical-supplements-store' ),
					esc_html__( 'Translation ready', 'medical-supplements-store' ),
					esc_html__( 'Gallery, Banner, Post Type Plugin Functionality', 'medical-supplements-store' ),
					esc_html__( 'Integrated Google map', 'medical-supplements-store' ),
					esc_html__( '1 Year Free Support', 'medical-supplements-store' ),
				),
				'button_url'  => esc_url( 'https://www.themescaliber.com/themes/premium-medical-supplements-wordpress-theme' ),
				'button_text' => esc_html__( 'View PRO version', 'medical-supplements-store' ),
			)
		)
	);

	$font_array = array(
        '' =>'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' =>'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' =>'Architects Daughter',
        'Arimo' => 'Arimo', 
        'Arsenal' =>'Arsenal',
        'Arvo' =>'Arvo',
        'Alegreya' =>'Alegreya',
        'Alfa Slab One' =>'Alfa Slab One',
        'Averia Serif Libre' =>'Averia Serif Libre', 
        'Bangers' =>'Bangers', 
        'Boogaloo' =>'Boogaloo', 
        'Bad Script' =>'Bad Script',
        'Bitter' =>'Bitter', 
        'Bree Serif' =>'Bree Serif', 
        'BenchNine' =>'BenchNine',
        'Cabin' =>'Cabin',
        'Cardo' =>'Cardo', 
        'Courgette' =>'Courgette', 
        'Cherry Swash' =>'Cherry Swash',
        'Cormorant Garamond' =>'Cormorant Garamond', 
        'Crimson Text' =>'Crimson Text',
        'Cuprum' =>'Cuprum', 
        'Cookie' =>'Cookie',
        'Chewy' =>'Chewy',
        'Days One' =>'Days One',
        'Dosis' =>'Dosis',
        'Droid Sans' =>'Droid Sans', 
        'Economica' =>'Economica', 
        'Fredoka One' =>'Fredoka One',
        'Fjalla One' =>'Fjalla One',
        'Francois One' =>'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' =>'Gloria Hallelujah',
        'Great Vibes' =>'Great Vibes', 
        'Handlee' =>'Handlee', 
        'Hammersmith One' =>'Hammersmith One',
        'Inconsolata' =>'Inconsolata',
        'Indie Flower' =>'Indie Flower', 
        'IM Fell English SC' =>'IM Fell English SC',
        'Julius Sans One' =>'Julius Sans One',
        'Josefin Slab' =>'Josefin Slab',
        'Josefin Sans' =>'Josefin Sans',
        'Kanit' =>'Kanit',
        'Lobster' =>'Lobster',
        'Lato' => 'Lato',
        'Lora' =>'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather',
        'Monda' =>'Monda',
        'Montserrat' =>'Montserrat',
        'Muli' =>'Muli',
        'Marck Script' =>'Marck Script',
        'Noto Serif' =>'Noto Serif',
        'Open Sans' =>'Open Sans',
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>'Overpass Mono',
        'Oxygen' =>'Oxygen',
        'Orbitron' =>'Orbitron',
        'Patua One' =>'Patua One',
        'Pacifico' =>'Pacifico',
        'Padauk' =>'Padauk',
        'Playball' =>'Playball',
        'Playfair Display' =>'Playfair Display',
        'PT Sans' =>'PT Sans',
        'Philosopher' =>'Philosopher',
        'Permanent Marker' =>'Permanent Marker',
        'Poiret One' =>'Poiret One',
        'Quicksand' =>'Quicksand',
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' =>'Raleway',
        'Rubik' =>'Rubik',
        'Rokkitt' =>'Rokkitt',
        'Russo One' => 'Russo One', 
        'Righteous' =>'Righteous', 
        'Slabo' =>'Slabo', 
        'Source Sans Pro' =>'Source Sans Pro',
        'Shadows Into Light Two' =>'Shadows Into Light Two',
        'Shadows Into Light' =>  'Shadows Into Light',
        'Sacramento' =>'Sacramento',
        'Shrikhand' =>'Shrikhand',
        'Tangerine' => 'Tangerine',
        'Ubuntu' =>'Ubuntu',
        'VT323' =>'VT323',
        'Varela Round' =>'Varela Round',
        'Vampiro One' =>'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' =>'Volkhov',
        'Kavoon' =>'Kavoon',
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );

	//add home page setting pannel
	$wp_customize->add_panel( 'medical_supplements_store_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'medical-supplements-store' ),
	    'description' => __( 'Description of what this panel does.', 'medical-supplements-store' )
	) );

	//Color / Font Pallete
	$wp_customize->add_section( 'medical_supplements_store_typography', array(
    	'title'      => __( 'Color / Font Pallete', 'medical-supplements-store' ),
		'priority'   => 30,
		'panel' => 'medical_supplements_store_panel_id'
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_setting( 'medical_supplements_store_theme_color', array(
	    'default' => '#b60000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'medical_supplements_store_theme_color', array(
  		'label' => 'Theme Color Option',
	    'section' => 'medical_supplements_store_typography',
	    'settings' => 'medical_supplements_store_theme_color',
  	)));
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'medical_supplements_store_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'medical_supplements_store_paragraph_color', array(
		'label' => __('Paragraph Color', 'medical-supplements-store'),
		'section' => 'medical_supplements_store_typography',
		'settings' => 'medical_supplements_store_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('medical_supplements_store_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'medical_supplements_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'medical_supplements_store_paragraph_font_family', array(
	    'section'  => 'medical_supplements_store_typography',
	    'label'    => __( 'Paragraph Fonts','medical-supplements-store'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('medical_supplements_store_paragraph_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('medical_supplements_store_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_typography',
		'setting'	=> 'medical_supplements_store_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'medical_supplements_store_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'medical_supplements_store_atag_color', array(
		'label' => __('"a" Tag Color', 'medical-supplements-store'),
		'section' => 'medical_supplements_store_typography',
		'settings' => 'medical_supplements_store_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('medical_supplements_store_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'medical_supplements_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'medical_supplements_store_atag_font_family', array(
	    'section'  => 'medical_supplements_store_typography',
	    'label'    => __( '"a" Tag Fonts','medical-supplements-store'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'medical_supplements_store_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'medical_supplements_store_li_color', array(
		'label' => __('"li" Tag Color', 'medical-supplements-store'),
		'section' => 'medical_supplements_store_typography',
		'settings' => 'medical_supplements_store_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('medical_supplements_store_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'medical_supplements_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'medical_supplements_store_li_font_family', array(
	    'section'  => 'medical_supplements_store_typography',
	    'label'    => __( '"li" Tag Fonts','medical-supplements-store'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'medical_supplements_store_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'medical_supplements_store_h1_color', array(
		'label' => __('H1 Color', 'medical-supplements-store'),
		'section' => 'medical_supplements_store_typography',
		'settings' => 'medical_supplements_store_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('medical_supplements_store_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'medical_supplements_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'medical_supplements_store_h1_font_family', array(
	    'section'  => 'medical_supplements_store_typography',
	    'label'    => __( 'H1 Fonts','medical-supplements-store'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('medical_supplements_store_h1_font_size',array(
		'default'	=> '50px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('medical_supplements_store_h1_font_size',array(
		'label'	=> __('H1 Font Size','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_typography',
		'setting'	=> 'medical_supplements_store_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'medical_supplements_store_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'medical_supplements_store_h2_color', array(
		'label' => __('h2 Color', 'medical-supplements-store'),
		'section' => 'medical_supplements_store_typography',
		'settings' => 'medical_supplements_store_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('medical_supplements_store_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'medical_supplements_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'medical_supplements_store_h2_font_family', array(
	    'section'  => 'medical_supplements_store_typography',
	    'label'    => __( 'h2 Fonts','medical-supplements-store'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('medical_supplements_store_h2_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('medical_supplements_store_h2_font_size',array(
		'label'	=> __('h2 Font Size','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_typography',
		'setting'	=> 'medical_supplements_store_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'medical_supplements_store_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'medical_supplements_store_h3_color', array(
		'label' => __('h3 Color', 'medical-supplements-store'),
		'section' => 'medical_supplements_store_typography',
		'settings' => 'medical_supplements_store_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('medical_supplements_store_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'medical_supplements_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'medical_supplements_store_h3_font_family', array(
	    'section'  => 'medical_supplements_store_typography',
	    'label'    => __( 'h3 Fonts','medical-supplements-store'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('medical_supplements_store_h3_font_size',array(
		'default'	=> '36px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('medical_supplements_store_h3_font_size',array(
		'label'	=> __('h3 Font Size','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_typography',
		'setting'	=> 'medical_supplements_store_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'medical_supplements_store_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'medical_supplements_store_h4_color', array(
		'label' => __('h4 Color', 'medical-supplements-store'),
		'section' => 'medical_supplements_store_typography',
		'settings' => 'medical_supplements_store_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('medical_supplements_store_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'medical_supplements_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'medical_supplements_store_h4_font_family', array(
	    'section'  => 'medical_supplements_store_typography',
	    'label'    => __( 'h4 Fonts','medical-supplements-store'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('medical_supplements_store_h4_font_size',array(
		'default'	=> '30px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('medical_supplements_store_h4_font_size',array(
		'label'	=> __('h4 Font Size','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_typography',
		'setting'	=> 'medical_supplements_store_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'medical_supplements_store_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'medical_supplements_store_h5_color', array(
		'label' => __('h5 Color', 'medical-supplements-store'),
		'section' => 'medical_supplements_store_typography',
		'settings' => 'medical_supplements_store_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('medical_supplements_store_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'medical_supplements_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'medical_supplements_store_h5_font_family', array(
	    'section'  => 'medical_supplements_store_typography',
	    'label'    => __( 'h5 Fonts','medical-supplements-store'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('medical_supplements_store_h5_font_size',array(
		'default'	=> '25px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('medical_supplements_store_h5_font_size',array(
		'label'	=> __('h5 Font Size','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_typography',
		'setting'	=> 'medical_supplements_store_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'medical_supplements_store_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'medical_supplements_store_h6_color', array(
		'label' => __('h6 Color', 'medical-supplements-store'),
		'section' => 'medical_supplements_store_typography',
		'settings' => 'medical_supplements_store_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('medical_supplements_store_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'medical_supplements_store_sanitize_choices'
	));
	$wp_customize->add_control(
	    'medical_supplements_store_h6_font_family', array(
	    'section'  => 'medical_supplements_store_typography',
	    'label'    => __( 'h6 Fonts','medical-supplements-store'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('medical_supplements_store_h6_font_size',array(
		'default'	=> '18px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('medical_supplements_store_h6_font_size',array(
		'label'	=> __('h6 Font Size','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_typography',
		'setting'	=> 'medical_supplements_store_h6_font_size',
		'type'	=> 'text'
	));

	//Layouts
	$wp_customize->add_section( 'medical_supplements_store_left_right', array(
    	'title'      => __( 'Theme Layout Settings', 'medical-supplements-store' ),
		'priority'   => 30,
		'panel' => 'medical_supplements_store_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('medical_supplements_store_theme_options',array(
	        'default' => __( 'Right Sidebar', 'medical-supplements-store' ),
	        'sanitize_callback' => 'medical_supplements_store_sanitize_choices'
	) );

	$wp_customize->add_control('medical_supplements_store_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Do you want this section', 'medical-supplements-store' ),
	        'section' => 'medical_supplements_store_left_right',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','medical-supplements-store'),
	            'Right Sidebar' => __('Right Sidebar','medical-supplements-store'),
	            'One Column' => __('One Column','medical-supplements-store'),
	            'Three Columns' => __('Three Columns','medical-supplements-store'),
	            'Four Columns' => __('Four Columns','medical-supplements-store'),
	            'Grid Layout' => __('Grid Layout','medical-supplements-store')
	        ),
	    )
    );

    //topbar
	$wp_customize->add_section('medical_supplements_store_topbar',array(
		'title'	=> __('Top Header','medical-supplements-store'),
		'description'	=> __('Add Header Content here','medical-supplements-store'),
		'priority'	=> null,
		'panel' => 'medical_supplements_store_panel_id',
	));

    $wp_customize->add_setting('medical_supplements_store_world',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('medical_supplements_store_world',array(
		'label'	=> __('Text','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_topbar',
		'setting'	=> 'medical_supplements_store_world',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('medical_supplements_store_free_shipping',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('medical_supplements_store_free_shipping',array(
		'label'	=> __('Text','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_topbar',
		'setting'	=> 'medical_supplements_store_free_shipping',
		'type'	=> 'text'
	));

	//Social Icons(topbar)
	$wp_customize->add_section('medical_supplements_store_topbar_header',array(
		'title'	=> __('Social Icon Section','medical-supplements-store'),
		'description'	=> __('Add Header Content here','medical-supplements-store'),
		'priority'	=> null,
		'panel' => 'medical_supplements_store_panel_id',
	));

	$wp_customize->add_setting('medical_supplements_store_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('medical_supplements_store_facebook_url',array(
		'label'	=> __('Add Facebook link','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_topbar_header',
		'setting'	=> 'medical_supplements_store_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('medical_supplements_store_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('medical_supplements_store_twitter_url',array(
		'label'	=> __('Add Twitter link','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_topbar_header',
		'setting'	=> 'medical_supplements_store_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('medical_supplements_store_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('medical_supplements_store_insta_url',array(
		'label'	=> __('Add Instagram link','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_topbar_header',
		'setting'	=> 'medical_supplements_store_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('medical_supplements_store_linkdin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('medical_supplements_store_linkdin_url',array(
		'label'	=> __('Add Linkdin link','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_topbar_header',
		'setting'	=> 'medical_supplements_store_linkdin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('medical_supplements_store_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('medical_supplements_store_youtube_url',array(
		'label'	=> __('Add Youtube link','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_topbar_header',
		'setting'	=> 'medical_supplements_store_youtube_url',
		'type'		=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'medical_supplements_store_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'medical-supplements-store' ),
		'priority'   => 30,
		'panel' => 'medical_supplements_store_panel_id'
	) );

	$wp_customize->add_setting('medical_supplements_store_slider_arrows',array(
      	'default' => 'false',
      	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('medical_supplements_store_slider_arrows',array(
	    'type' => 'checkbox',
	    'label' => __('Show / Hide slider','medical-supplements-store'),
	    'section' => 'medical_supplements_store_slidersettings',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'medical_supplements_store_slidersettings_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'medical_supplements_store_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'medical_supplements_store_slidersettings_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'medical-supplements-store' ),
			'section'  => 'medical_supplements_store_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	// Service Section
	$wp_customize->add_section('medical_supplements_store_services',array(
		'title'	=> __('Services Section','medical-supplements-store'),
		'description'	=> __('Add services Content here','medical-supplements-store'),
		'priority'	=> null,
		'panel' => 'medical_supplements_store_panel_id',
	));

    $wp_customize->add_setting('medical_supplements_store_delivery',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('medical_supplements_store_delivery',array(
		'label'	=> __('Free Delivery','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_services',
		'setting'	=> 'medical_supplements_store_delivery',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('medical_supplements_store_delivery_line',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('medical_supplements_store_delivery_line',array(
		'label'	=> __('Delivery Text','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_services',
		'setting'	=> 'medical_supplements_store_delivery_line',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('medical_supplements_store_return',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('medical_supplements_store_return',array(
		'label'	=> __('Return','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_services',
		'setting'	=> 'medical_supplements_store_return',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('medical_supplements_store_return_line',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('medical_supplements_store_return_line',array(
		'label'	=> __('Return Text','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_services',
		'setting'	=> 'medical_supplements_store_return_line',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('medical_supplements_store_satisfy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('medical_supplements_store_satisfy',array(
		'label'	=> __('Satisfaction','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_services',
		'setting'	=> 'medical_supplements_store_satisfy',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('medical_supplements_store_satisfy_line',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('medical_supplements_store_satisfy_line',array(
		'label'	=> __('Satisfaction Text','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_services',
		'setting'	=> 'medical_supplements_store_satisfy_line',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('medical_supplements_store_points',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('medical_supplements_store_points',array(
		'label'	=> __('Loyalty','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_services',
		'setting'	=> 'medical_supplements_store_points',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('medical_supplements_store_points_line',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('medical_supplements_store_points_line',array(
		'label'	=> __('Loyalty Text','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_services',
		'setting'	=> 'medical_supplements_store_points_line',
		'type'	=> 'text'
	));

	//Our Product
	$wp_customize->add_section('medical_supplements_store_product',array(
		'title'	=> __('Best Sellers','medical-supplements-store'),
		'description'=> __('This section will appear below the slider.','medical-supplements-store'),
		'panel' => 'medical_supplements_store_panel_id',
	));

	$wp_customize->add_setting('medical_supplements_store_sec1_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('medical_supplements_store_sec1_title',array(
		'label'	=> __('Section Title','medical-supplements-store'),
		'section'=> 'medical_supplements_store_product',
		'setting'=> 'medical_supplements_store_sec1_title',
		'type'=> 'text'
	));	

	$wp_customize->add_setting( 'medical_supplements_store_product_page', array(
		'default'           => '',
		'sanitize_callback' => 'medical_supplements_store_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'medical_supplements_store_product_page', array(
		'label'    => __( 'Select Product Page', 'medical-supplements-store' ),
		'section'  => 'medical_supplements_store_product',
		'type'     => 'dropdown-pages'
	));

	//Footer
	$wp_customize->add_section('medical_supplements_store_footer_section',array(
		'title'	=> __('Copyright','medical-supplements-store'),
		'description'	=> '',
		'priority'	=> null,
		'panel' => 'medical_supplements_store_panel_id',
	));
	
	$wp_customize->add_setting('medical_supplements_store_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'wp_kses_post',
	));
	
	$wp_customize->add_control('medical_supplements_store_footer_copy',array(
		'label'	=> __('Copyright Text','medical-supplements-store'),
		'section'	=> 'medical_supplements_store_footer_section',
		'type'		=> 'textarea'
	));
	/** home page setions end here**/	
}
add_action( 'customize_register', 'medical_supplements_store_customize_register' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Medical_Supplements_Store_Customizer_Upsell {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object $manager Customizer manager.
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . 'inc/supplement-customize-theme-info-main.php' );
		load_template( trailingslashit( get_template_directory() ) . 'inc/supplement-customize-upsell-section.php' );

		// Register custom section types.
		$manager->register_section_type( 'Medical_Supplements_Store_Customizer_Theme_Info_Main' );

		// Main Documentation Link In Customizer Root.
		$manager->add_section(
			new Medical_Supplements_Store_Customizer_Theme_Info_Main(
				$manager, 'medical-supplements-store-theme-info', array(
					'theme_info_title' => __( 'Medical Supplement', 'medical-supplements-store' ),
					'label_url'        => esc_url( 'https://themescaliber.com/demo/doc/free-medical-supplements/' ),
					'label_text'       => __( 'Documentation', 'medical-supplements-store' ),
				)
			)
		);

		// Frontpage Sections Upsell.
		$manager->add_section(
			new Medical_Supplements_Store_Customizer_Upsell_Section(
				$manager, 'medical-supplements-store-upsell-frontpage-sections', array(
					'panel'       => 'medical_supplements_store_panel_id',
					'priority'    => 500,
					'options'     => array(
						esc_html__( 'Workout Section', 'medical-supplements-store' ),
						esc_html__( 'New Arrivals section', 'medical-supplements-store' ),
						esc_html__( 'Gym Timming section', 'medical-supplements-store' ),
						esc_html__( 'Video Section', 'medical-supplements-store' ),
						esc_html__( 'Blog section', 'medical-supplements-store' ),
						esc_html__( 'Testimonials section', 'medical-supplements-store' ),
						esc_html__( 'Instagram Feed section', 'medical-supplements-store' ),
					),
					'button_url'  => esc_url( 'https://www.themescaliber.com/themes/premium-medical-supplements-wordpress-theme' ),
					'button_text' => esc_html__( 'View PRO version', 'medical-supplements-store' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'medical-supplements-store-upsell-js', trailingslashit( get_template_directory_uri() ) . 'inc/js/supplement-customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'medical-supplements-store-theme-info-style', trailingslashit( get_template_directory_uri() ) . 'inc/css/supplement-style.css' );
	}
}

Medical_Supplements_Store_Customizer_Upsell::get_instance();
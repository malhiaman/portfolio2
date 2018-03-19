<?php
/**
 * Gridsby Pro Theme Customizer
 *
 * @package gridsby
 */
 
function gridsby_theme_customizer( $wp_customize ) {
	
	//allows donations
    class gridsby_Info extends WP_Customize_Control {  
     
        public $label = '';
        public function render_content() { 
        ?>

        <?php
        }
    }	
	
	// Pro
    $wp_customize->add_section( 
        'gridsby_theme_info',
        array(
            'title' => esc_html__('Gridsby Pro', 'gridsby'),
            'priority' => 5, 
            'description' => __('Check out our <a href="http://modernthemes.net/documentation/gridsby-pro-documentation/" target="_blank">Gridsby documentation</a> to learn how to use gridsby and for tutorials on the necessary theme functions. Visit <a href="http://modernthemes.net/pro-theme-support/" target="_blank">this link</a> for support. Use the password given to you when you purchased Gridsby Pro to access the support forum.', 'gridsby' ), 
        )
    );  
	 
    //help
    $wp_customize->add_setting('gridsby_help', array(
			'sanitize_callback' => 'gridsby_no_sanitize',
            'type' => 'info_control',
            'capability' => 'edit_theme_options',
    ));
	
    $wp_customize->add_control( new gridsby_Info( $wp_customize, 'gridsby_help', array(
        'section' => 'gridsby_theme_info', 
        'settings' => 'gridsby_help', 
        'priority' => 10
    ))); 
	
	// nav 
	$wp_customize->add_section( 'gridsby_nav', array(
	'title' => esc_html__( 'Navigation', 'gridsby' ),
	'priority' => '13', 
	));
	
	//Navigation/Menu Options
	$wp_customize->add_setting( 'gridsby_menu_method', array(
		'default'	        => 'option1', 
		'sanitize_callback' => 'gridsby_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_menu_method', array(
		'description'    => esc_html__( 'Choose between a Toggle Button Menu or a static menu at the top of your page.', 'gridsby' ),
		'section'       => 'gridsby_nav', 
		'settings' => 'gridsby_menu_method',
		'type'     => 'radio',
		'choices'  => array(
			'option1' => esc_html__( 'Menu with Toggle Button', 'gridsby' ),
			'option2' => esc_html__( 'Static Top Menu', 'gridsby' ),
			), 
		'input_attrs' => array(
            'style' => 'margin-top: 15px; padding: 15px;',
        ),
	)));
	
	
	$wp_customize->add_setting( 'gridsby_side_nav_bg_color', array(
        'default'     => '#222222', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_side_nav_bg_color', array(
        'label'	   => esc_html__( 'Side Navigation Background', 'gridsby' ), 
        'section'       => 'gridsby_nav',
        'settings' => 'gridsby_side_nav_bg_color',
		'priority' => 25
    )));  
	
	$wp_customize->add_setting( 'gridsby_side_nav_color', array(
        'default'     => '#cccccc', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_side_nav_color', array(
        'label'	   => esc_html__( 'Side Navigation Link', 'gridsby' ), 
        'section'       => 'gridsby_nav',
        'settings' => 'gridsby_side_nav_color',
		'priority' => 30
    ))); 
	
	$wp_customize->add_setting( 'gridsby_side_nav_hover_color', array(
        'default'     => '#b0544f', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_side_nav_hover_color', array(
        'label'	   => esc_html__( 'Side Navigation Link Hover', 'gridsby' ), 
        'section'       => 'gridsby_nav',
        'settings' => 'gridsby_side_nav_hover_color',
		'priority' => 35
    ))); 
	
	$wp_customize->add_setting( 'gridsby_side_nav_hover_bg_color', array(
        'default'     => '#222222', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_side_nav_hover_bg_color', array(
        'label'	   => esc_html__( 'Side Navigation Link Hover Background', 'gridsby' ), 
        'section'       => 'gridsby_nav',
        'settings' => 'gridsby_side_nav_hover_bg_color',
		'priority' => 40
    ))); 
	
	$wp_customize->add_setting( 'gridsby_side_nav_dropdown_color', array(
        'default'     => '#999999', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_side_nav_dropdown_color', array(
        'label'	   => esc_html__( 'Side Navigation Dropdown Link', 'gridsby' ), 
        'section'       => 'gridsby_nav',
        'settings' => 'gridsby_side_nav_dropdown_color',
		'priority' => 45 
    ))); 
	
	
	
	$wp_customize->add_setting( 'gridsby_close_menu_text', array(
        'default'     => '#ededed', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_close_menu_text', array(
        'label'	   => esc_html__( 'Close Menu Text', 'gridsby' ), 
        'section'       => 'gridsby_nav',
        'settings' => 'gridsby_close_menu_text',
		'priority' => 50
    ))); 
	
	$wp_customize->add_setting( 'gridsby_close_menu_bg', array(
        'default'     => '#000000', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_close_menu_bg', array(
        'label'	   => esc_html__( 'Close Menu Background', 'gridsby' ), 
        'section'       => 'gridsby_nav',
        'settings' => 'gridsby_close_menu_bg',
		'priority' => 55
    )));
	
	
	
	$wp_customize->add_setting( 'gridsby_static_nav_color', array(
        'default'     => '#404040', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_static_nav_color', array(
        'label'	   => esc_html__( 'Static Navigation Link', 'gridsby' ), 
        'section'       => 'gridsby_nav',
        'settings' => 'gridsby_static_nav_color',
		'priority' => 80
    ))); 
	
	$wp_customize->add_setting( 'gridsby_static_nav_hover_color', array(
        'default'     => '#b0544f', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_static_nav_hover_color', array(
        'label'	   => esc_html__( 'Static Navigation Link Hover', 'gridsby' ), 
        'section'       => 'gridsby_nav',
        'settings' => 'gridsby_static_nav_hover_color',
		'priority' => 85
    ))); 
	
	$wp_customize->add_setting( 'gridsby_static_nav_hover_bg_color', array(
        'default'     => '#404040', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_static_nav_hover_bg_color', array(
        'label'	   => esc_html__( 'Static Navigation Link Hover Background', 'gridsby' ), 
        'section'       => 'gridsby_nav',
        'settings' => 'gridsby_static_nav_hover_bg_color',
		'priority' => 90
    ))); 
	
	$wp_customize->add_setting( 'gridsby_static_nav_dropdown_link_color', array(
        'default'     => '#cccccc', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_static_nav_dropdown_link_color', array(
        'label'	   => esc_html__( 'Static Navigation Dropdown Link', 'gridsby' ), 
        'section'       => 'gridsby_nav',
        'settings' => 'gridsby_static_nav_dropdown_link_color',
		'priority' => 93
    ))); 
	
	$wp_customize->add_setting( 'gridsby_static_nav_dropdown_bg', array(
        'default'     => '#222222',   
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_static_nav_dropdown_bg', array(
        'label'	   => esc_html__( 'Static Navigation Dropdown Background', 'gridsby' ), 
        'section'       => 'gridsby_nav',
        'settings' => 'gridsby_static_nav_dropdown_bg', 
		'priority' => 95 
    ))); 
	
	
	// Fonts  
    $wp_customize->add_section(
        'gridsby_typography',
        array(
            'title' => esc_html__('Google Fonts', 'gridsby' ),  
            'priority' => 39,
        )
    );
	
    $font_choices = 
        array(
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Oswald:400,700' => 'Oswald',
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
			'Raleway:400,700' => 'Raleway',
            'Droid Sans:400,700' => 'Droid Sans',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',  
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
			'Lobster:400' => 'Lobster',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Mandali:400' => 'Mandali',
			'Vesper Libre:400,700' => 'Vesper Libre',
			'NTR:400' => 'NTR',
			'Dhurjati:400' => 'Dhurjati',
			'Faster One:400' => 'Faster One',
			'Mallanna:400' => 'Mallanna',
			'Averia Libre:400,300,700,400italic,700italic' => 'Averia Libre',
			'Galindo:400' => 'Galindo',
			'Titan One:400' => 'Titan One',
			'Abel:400' => 'Abel',
			'Nunito:400,300,700' => 'Nunito',
			'Poiret One:400' => 'Poiret One',
			'Signika:400,300,600,700' => 'Signika',
			'Muli:400,400italic,300italic,300' => 'Muli',
			'Play:400,700' => 'Play',
			'Bree Serif:400' => 'Bree Serif',
			'Archivo Narrow:400,400italic,700,700italic' => 'Archivo Narrow',
			'Cuprum:400,400italic,700,700italic' => 'Cuprum',
			'Noto Serif:400,400italic,700,700italic' => 'Noto Serif',
			'Pacifico:400' => 'Pacifico',
			'Alegreya:400,400italic,700italic,700,900,900italic' => 'Alegreya',
			'Asap:400,400italic,700,700italic' => 'Asap',
			'Maven Pro:400,500,700' => 'Maven Pro',
			'Dancing Script:400,700' => 'Dancing Script',
			'Karla:400,700,400italic,700italic' => 'Karla',
			'Merriweather Sans:400,300,700,400italic,700italic' => 'Merriweather Sans',
			'Exo:400,300,400italic,700,700italic' => 'Exo',
			'Varela Round:400' => 'Varela Round',
			'Cabin Condensed:400,600,700' => 'Cabin Condensed',
			'PT Sans Caption:400,700' => 'PT Sans Caption',
			'Cinzel:400,700' => 'Cinzel',
			'News Cycle:400,700' => 'News Cycle',
			'Inconsolata:400,700' => 'Inconsolata',
			'Architects Daughter:400' => 'Architects Daughter',
			'Quicksand:400,700,300' => 'Quicksand',
			'Titillium Web:400,300,400italic,700,700italic' => 'Titillium Web',
			'Quicksand:400,700,300' => 'Quicksand',
			'Monda:400,700' => 'Monda',
			'Didact Gothic:400' => 'Didact Gothic',
			'Coming Soon:400' => 'Coming Soon',
			'Ropa Sans:400,400italic' => 'Ropa Sans',
			'Tinos:400,400italic,700,700italic' => 'Tinos',
			'Glegoo:400,700' => 'Glegoo',
			'Pontano Sans:400' => 'Pontano Sans',
			'Fredoka One:400' => 'Fredoka One',
			'Lobster Two:400,400italic,700,700italic' => 'Lobster Two',
			'Quattrocento Sans:400,700,400italic,700italic' => 'Quattrocento Sans',
			'Covered By Your Grace:400' => 'Covered By Your Grace',
			'Changa One:400,400italic' => 'Changa One',
			'Marvel:400,400italic,700,700italic' => 'Marvel',
			'BenchNine:400,700,300' => 'BenchNine',
			'Orbitron:400,700,500' => 'Orbitron',
			'Crimson Text:400,400italic,600,700,700italic' => 'Crimson Text',
			'Bangers:400' => 'Bangers',
			'Courgette:400' => 'Courgette',
			'Questrial:400' => 'Questrial',
			
    );
	
	//body 
    $wp_customize->add_setting(
        'gridsby_body_size',
        array(
            'sanitize_callback' => 'absint', 
            'default'           => '16', 
        )       
    );
    $wp_customize->add_control( 'gridsby_body_size', array(  
        'type'        => 'number', 
        'priority'    => 10,
        'section'     => 'gridsby_typography',
        'label'       => esc_html__('Body Font Size', 'gridsby'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 28,
            'step'  => 1
        ),
  	)); 
    
    $wp_customize->add_setting(
        'headings_fonts',
        array(
            'sanitize_callback' => 'gridsby_sanitize_fonts',
    ));
    
    $wp_customize->add_control(
        'headings_fonts',
        array(
            'type' => 'select',
			'priority'    => 20,
            'description' => esc_html__('Select your desired font for the headings. Open Sans is the default Heading font.', 'gridsby'),
            'section' => 'gridsby_typography',
            'choices' => $font_choices
    ));
    
    $wp_customize->add_setting(
        'body_fonts',
        array(
            'sanitize_callback' => 'gridsby_sanitize_fonts',
    ));
    
    $wp_customize->add_control(
        'body_fonts',
        array(
            'type' => 'select',
			'priority'    => 30,
            'description' => esc_html__( 'Select your desired font for the body. Open Sans is the default Body font.', 'gridsby' ), 
            'section' => 'gridsby_typography',  
            'choices' => $font_choices 
    ));

	// Colors
	$wp_customize->add_setting( 'gridsby_page_title_bg', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_page_title_bg', array(
        'label'	   => esc_html__( 'Page Title Background', 'gridsby' ),
        'section'  => 'colors',
        'settings' => 'gridsby_page_title_bg',
		'priority' => 10
    )));
	
	$wp_customize->add_setting( 'gridsby_text_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'gridsby' ),
        'section'  => 'colors',
        'settings' => 'gridsby_text_color',
		'priority' => 11
    ))); 
	
    $wp_customize->add_setting( 'gridsby_link_color', array( 
        'default'     => '#404040',   
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_link_color', array(
        'label'	   => esc_html__( 'Link Color', 'gridsby' ), 
        'section'  => 'colors',
        'settings' => 'gridsby_link_color',
		'priority' => 30 
    )));
	
	$wp_customize->add_setting( 'gridsby_hover_color', array(
        'default'     => '#B0544F',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_hover_color', array(
        'label'	   => esc_html__( 'Hover Color', 'gridsby' ),
        'section'  => 'colors',
        'settings' => 'gridsby_hover_color',
		'priority' => 40
    )));
	
	$wp_customize->add_setting( 'gridsby_site_title_color', array(
        'default'     => '#404040',  
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_site_title_color', array(
        'label'	   => esc_html__( 'Site Title Color', 'gridsby' ),  
        'section'  => 'colors',
        'settings' => 'gridsby_site_title_color', 
		'priority' => 50 
    )));
	
	$wp_customize->add_setting( 'gridsby_custom_color', array( 
        'default'     => '#000000', 
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_custom_color', array(
        'label'	   => esc_html__('Theme Color', 'gridsby' ),
        'section'  => 'colors',
        'settings' => 'gridsby_custom_color', 
		'priority' => 20
    ))); 
	
	$wp_customize->add_setting( 'gridsby_blockquote', array(
        'default'     => '#999999',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_blockquote', array(
        'label'	   => esc_html__( 'Blockquote Text', 'gridsby' ),
        'section'  => 'colors',
        'settings' => 'gridsby_blockquote', 
		'priority' => 55
    )));
	
	$wp_customize->add_setting( 'gridsby_blockquote_border', array(
        'default'     => '#666666', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_blockquote_border', array(
        'label'	   => esc_html__( 'Blockquote Accent Color', 'gridsby' ), 
        'section'  => 'colors',
        'settings' => 'gridsby_blockquote_border', 
		'priority' => 60
    )));
	
	$wp_customize->add_setting( 'gridsby_pag_nav_bg', array(
        'default'     => '#FFFFFF', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_pag_nav_bg', array(
        'label'	   => esc_html__( 'Page Navigation Background Color', 'gridsby' ),  
        'section'  => 'colors',
        'settings' => 'gridsby_pag_nav_bg', 
		'priority' => 65
    )));
	
	$wp_customize->add_setting( 'gridsby_pag_nav', array(
        'default'     => '#222222', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_pag_nav', array(
        'label'	   => esc_html__( 'Page Navigation Link Color', 'gridsby' ), 
        'section'  => 'colors',
        'settings' => 'gridsby_pag_nav', 
		'priority' => 70
    )));
	
	$wp_customize->add_setting( 'gridsby_pag_nav_border', array(
        'default'     => '#e6e7e8', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_pag_nav_border', array(
        'label'	   => esc_html__( 'Page Navigation Border Color', 'gridsby' ), 
        'section'  => 'colors',
        'settings' => 'gridsby_pag_nav_border',
		'priority' => 75
    ))); 
	
	
	
	//Animations
	$wp_customize->add_section( 'gridsby_animations' , array(   
	    'title'       => esc_html__( 'Animations', 'gridsby' ),
	    'priority'    => 40,  
	    'description' => esc_html__(  'We can make things fly across the screen.', 'gridsby' ),
	));
	
    $wp_customize->add_setting(
        'gridsby_animate',
        array(
            'sanitize_callback' => 'gridsby_sanitize_checkbox',
            'default' => 0,
    ));
	
    $wp_customize->add_control( 
        'gridsby_animate',
        array(
            'type' => 'checkbox',
            'label' => esc_html__('Check this box if you want to disable the animations.', 'gridsby'),
            'section' => 'gridsby_animations',  
            'priority' => 1,           
    ));

    // Logo upload
    $wp_customize->add_section( 'gridsby_logo_section' , array(  
	    'title'       => esc_html__( 'Logo and Icons', 'gridsby' ),
	    'priority'    => 25,
	    'description' => esc_html__( 'Upload a logo to replace the default site name and description in the header. Also, upload your site favicon and Apple Icons.', 'gridsby' ),
	));

	$wp_customize->add_setting( 'gridsby_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gridsby_logo', array(
		'label'    => esc_html__( 'Logo', 'gridsby' ),
		'section'  => 'gridsby_logo_section', 
		'settings' => 'gridsby_logo',
		'priority' => 1,
	))); 
	
	// Logo Width 
    $wp_customize->add_setting(
        'logo_size',
        array(
            'sanitize_callback' => 'absint',
			'default' => '145'
    ));
	
    $wp_customize->add_control( 'logo_size', array(  
        'type'        => 'number',
        'priority'    => 2, 
        'section'     => 'gridsby_logo_section',
        'label'    => esc_html__( 'Change the width of the Logo in PX.', 'gridsby' ),
		'description'    => esc_html__( 'Only enter numeric value', 'gridsby' ),
	));
	
	//Favicon Upload
	$wp_customize->add_setting(
		'site_favicon',
		array(
			'default' => (get_stylesheet_directory_uri() . '/img/favicon.png'),
			'sanitize_callback' => 'esc_url_raw', 
	));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'site_favicon',
            array(
               'label'          => esc_html__( 'Upload your favicon (16x16 pixels)', 'gridsby' ),
			   'type' 			=> 'image',
               'section'        => 'gridsby_logo_section',
               'settings'       => 'site_favicon',
               'priority' => 2,
    )));
	
    //Apple touch icon 144
    $wp_customize->add_setting(
        'apple_touch_144',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_144',
            array(
               'label'          => esc_html__( 'Upload your Apple Touch Icon (144x144 pixels)', 'gridsby' ),
               'type'           => 'image',
               'section'        => 'gridsby_logo_section',
               'settings'       => 'apple_touch_144',
               'priority'       => 11,
    )));
	
    //Apple touch icon 114
    $wp_customize->add_setting(
        'apple_touch_114',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw', 
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_114',
            array(
               'label'          => esc_html__( 'Upload your Apple Touch Icon (114x114 pixels)', 'gridsby' ),
               'type'           => 'image',
               'section'        => 'gridsby_logo_section',
               'settings'       => 'apple_touch_114',
               'priority'       => 12,
    )));
	
    //Apple touch icon 72
    $wp_customize->add_setting(
        'apple_touch_72',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_72',
            array(
               'label'          => esc_html__( 'Upload your Apple Touch Icon (72x72 pixels)', 'gridsby' ),
               'type'           => 'image',
               'section'        => 'gridsby_logo_section',
               'settings'       => 'apple_touch_72',
               'priority'       => 13,
    )));
	
    //Apple touch icon 57
    $wp_customize->add_setting(
        'apple_touch_57',
        array(
            'default-image' => '',
			'sanitize_callback' => 'esc_url_raw',
    ));
	
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_touch_57',
            array(
               'label'          => esc_html__( 'Upload your Apple Touch Icon (57x57 pixels)', 'gridsby' ), 
               'type'           => 'image',
               'section'        => 'gridsby_logo_section',
               'settings'       => 'apple_touch_57',
               'priority'       => 14,
    )));
	
	// Home Social Panel
	$wp_customize->add_panel( 'social_panel', array(
    'priority'       => 26, 
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Social Media Section', 'gridsby' ),
    'description'    => esc_html__( 'Edit your home page social media icons', 'gridsby' ), 
	));
	
	// Social Section 
	$wp_customize->add_section( 'gridsby_settings', array(
    	'title'          => esc_html__( 'Social Media Icons', 'gridsby' ),
        'priority'       => 38,
		'panel' => 'social_panel',  
    ) );
	
	$wp_customize->add_setting(
        'gridsby_social_new_window', 
        array(
            'sanitize_callback' => 'gridsby_sanitize_checkbox',
            'default' => 0,
    ));
	
    $wp_customize->add_control( 
        'gridsby_social_new_window',
        array(
            'type' => 'checkbox',
            'label' => esc_html__('Open links in new window?', 'gridsby'),
            'section'  => 'gridsby_settings',
            'priority' => 3,       
    ));
	
	// Header Social Section 
	$wp_customize->add_setting('active_social',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control( 
    'active_social', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Header Social Section', 'gridsby' ),  
        'section' => 'gridsby_settings',  
		'priority'   => 4
    )); 
	
	// Footer Social Section 
	$wp_customize->add_setting('active_footer_social',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control( 
    'active_footer_social', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Footer Social Section', 'gridsby' ), 
        'section' => 'gridsby_settings',
		'priority'   => 5
    )); 
	
	// Social Icon Colors
	$wp_customize->add_setting( 'gridsby_social_color', array( 
        'default'     => '#404040', 
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_social_color', array(
        'label'	   => esc_html__( 'Social Icon Color', 'gridsby' ),
        'section'  => 'gridsby_settings',
        'settings' => 'gridsby_social_color', 
		'priority' => 6
    )));
	
	$wp_customize->add_setting( 'gridsby_social_color_hover', array( 
        'default'     => '#B0544F', 
		'sanitize_callback' => 'sanitize_hex_color',  
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridsby_social_color_hover', array(
        'label'	   => esc_html__( 'Social Icon Hover Color', 'gridsby' ), 
        'section'  => 'gridsby_settings',
        'settings' => 'gridsby_social_color_hover', 
		'priority' => 7
    )));
	
	
	
	// Facebook
	$wp_customize->add_setting( 'gridsby_fb',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_fb', array(
		'label'    => esc_html__( 'Facebook URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_fb',
		'priority'   => 30
	))); 
	
	// Twitter
	$wp_customize->add_setting( 'gridsby_twitter',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_twitter', array(
		'label'    => esc_html__( 'Twitter URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_twitter',
		'priority'   => 40
	))); 
	
	// LinkedIn
	$wp_customize->add_setting( 'gridsby_linked',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_linked', array(
		'label'    => esc_html__( 'LinkedIn URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_linked',
		'priority'   => 50
	)));
	
	// Google Plus
	$wp_customize->add_setting( 'gridsby_google',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_google', array(
		'label'    => esc_html__( 'Google Plus URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_google',
		'priority'   => 60
	)));
	
	// Instagram
	$wp_customize->add_setting( 'gridsby_instagram',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_instagram', array(
		'label'    => esc_html__( 'Instagram URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_instagram',
		'priority'   => 70
	)));
	
	// Vine
	$wp_customize->add_setting( 'gridsby_vine',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_vine', array(
		'label'    => esc_html__( 'Vine URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_vine', 
		'priority'   => 75 
	)));
	
	// Snapchat
	$wp_customize->add_setting( 'gridsby_snapchat',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_snapchat', array(
		'label'    => esc_html__( 'Snapchat URL:', 'gridsby' ),
		'section'  => 'gridsby_settings',  
		'settings' => 'gridsby_snapchat',
		'priority'   => 78
	))); 
	
	// Flickr
	$wp_customize->add_setting( 'gridsby_flickr',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_flickr', array(
		'label'    => esc_html__( 'Flickr URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_flickr',
		'priority'   => 80
	)));
	
	// Pinterest
	$wp_customize->add_setting( 'gridsby_pinterest',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_pinterest', array(
		'label'    => esc_html__( 'Pinterest URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_pinterest',
		'priority'   => 90
	)));
	
	// Youtube
	$wp_customize->add_setting( 'gridsby_youtube',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_youtube', array(
		'label'    => esc_html__( 'YouTube URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_youtube',  
		'priority'   => 100
	)));
	
	// Vimeo
	$wp_customize->add_setting( 'gridsby_vimeo',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_vimeo', array(
		'label'    => esc_html__( 'Vimeo URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_vimeo',
		'priority'   => 110
	)));
	
	// Tumblr
	$wp_customize->add_setting( 'gridsby_tumblr',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_tumblr', array(
		'label'    => esc_html__( 'Tumblr URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_tumblr', 
		'priority'   => 120
	)));
	
	// Dribbble
	$wp_customize->add_setting( 'gridsby_dribbble',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_dribbble', array(
		'label'    => esc_html__( 'Dribbble URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_dribbble',
		'priority'   => 130
	)));
	
	// behance
	$wp_customize->add_setting( 'gridsby_behance',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_behance', array(
		'label'    => esc_html__( 'Behance URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_behance',
		'priority'   => 132
	)));
	
	// 500px
	$wp_customize->add_setting( 'gridsby_500px',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_500px', array(
		'label'    => esc_html__( '500px URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_500px',
		'priority'   => 134
	)));
	
	// VK
	$wp_customize->add_setting( 'gridsby_vk',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_vk', array(
		'label'    => esc_html__( 'VK URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_vk',
		'priority'   => 135
	)));
	
	// yelp
	$wp_customize->add_setting( 'gridsby_yelp',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_yelp', array(
		'label'    => esc_html__( 'Yelp URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_yelp',
		'priority'   => 140
	)));
	
	// xing
	$wp_customize->add_setting( 'gridsby_xing',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_xing', array(
		'label'    => esc_html__( 'Xing URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_xing',
		'priority'   => 145
	)));
	
	// skype
	$wp_customize->add_setting( 'gridsby_skype',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_skype', array(
		'label'    => esc_html__( 'Skype URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_skype',
		'priority'   => 150
	)));
	
	// deviantart
	$wp_customize->add_setting( 'gridsby_deviant',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_deviant', array(
		'label'    => esc_html__( 'DeviantArt URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_deviant',
		'priority'   => 155
	)));
	
	// reddit
	$wp_customize->add_setting( 'gridsby_reddit',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_reddit', array(
		'label'    => esc_html__( 'Reddit URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_reddit',
		'priority'   => 160
	)));
	
	// github
	$wp_customize->add_setting( 'gridsby_github',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_github', array(
		'label'    => esc_html__( 'Github URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_github',
		'priority'   => 165
	)));
	
	// codepen
	$wp_customize->add_setting( 'gridsby_codepen',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_codepen', array(
		'label'    => esc_html__( 'Codepen URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_codepen',
		'priority'   => 165
	)));
	
	// spotify
	$wp_customize->add_setting( 'gridsby_spotify',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_spotify', array(
		'label'    => esc_html__( 'Spotify URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_spotify',
		'priority'   => 170
	)));
	
	// soundcloud
	$wp_customize->add_setting( 'gridsby_soundcloud',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_soundcloud', array(
		'label'    => esc_html__( 'SoundCloud URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_soundcloud',
		'priority'   => 175
	)));
	
	// lastfm
	$wp_customize->add_setting( 'gridsby_lastfm',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_lastfm', array(
		'label'    => esc_html__( 'lastFM URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_lastfm',
		'priority'   => 180
	)));
	
	// stumbleupon
	$wp_customize->add_setting( 'gridsby_stumble',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_stumble', array(
		'label'    => esc_html__( 'StumbleUpon URL:', 'gridsby' ),
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_stumble',
		'priority'   => 185
	)));
	
	// Weibo
	$wp_customize->add_setting( 'gridsby_weibo', 
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_weibo', array(
		'label'    => esc_html__( 'Weibo URL:', 'gridsby' ), 
		'section'  => 'gridsby_settings',  
		'settings' => 'gridsby_weibo', 
		'priority'   => 188
	))); 
	
	// Houzz
	$wp_customize->add_setting( 'gridsby_houzz', 
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_houzz', array(
		'label'    => esc_html__( 'Houzz URL:', 'gridsby' ), 
		'section'  => 'gridsby_settings',  
		'settings' => 'gridsby_houzz', 
		'priority'   => 189
	))); 
	
	// Phone Number
	$wp_customize->add_setting( 'gridsby_phone_number_icon',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_phone_number_icon', array(
		'label'    => esc_html__( 'Phone Number:', 'gridsby' ),
		'section'  => 'gridsby_settings',
		'settings' => 'gridsby_phone_number_icon',
		'priority'   => 190
	)));
	
	// Email
	$wp_customize->add_setting( 'gridsby_email_icon', 
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text', 
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_email_icon', array(
		'label'    => esc_html__( 'Email:', 'gridsby' ),
		'section'  => 'gridsby_settings',
		'settings' => 'gridsby_email_icon',
		'priority'   => 195
	))); 
	
	// RSS
	$wp_customize->add_setting( 'gridsby_rss',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text',  
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_rss', array(
		'label'    => esc_html__( 'RSS URL:', 'gridsby' ), 
		'section'  => 'gridsby_settings', 
		'settings' => 'gridsby_rss',
		'priority'   => 200
	))); 
	
	
	//Gallery Panel
	$wp_customize->add_panel( 'gridsby_gallery_panel', array(
    'priority'       => 28, 
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Gallery', 'gridsby' ), 
    'description'    => esc_html__( 'Edit your gallery options', 'gridsby' ),
	));
	
	//Selling
	$wp_customize->add_section( 'gridsby_selling_section', array(
		'title'          => esc_html__( 'Photo Post Method', 'gridsby' ), 
		'priority'       => 28,
		'description' => esc_html__( 'Will you be selling your photos? If so use Easy Digital Downloads.', 'gridsby' ),
		'panel'			 => 'gridsby_gallery_panel', 
	)); 
	
	//How your posts will display
	$wp_customize->add_setting( 'gridsby_photo_post_method', array(
		'default'	        => 'option1', 
		'sanitize_callback' => 'gridsby_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_photo_post_method', array(
		'description'    => esc_html__( 'What are you using to post pictures to your galleries? If you plan on selling, you should use Easy Digital Downloads. Just use Posts and select Image as the Post Format for a regular photo posts.', 'gridsby' ),
		'section'  => 'gridsby_selling_section', 
		'settings' => 'gridsby_photo_post_method',
		'type'     => 'radio', 
		'choices'  => array(
			'option1' => esc_html__( 'Easy Digital Downloads', 'gridsby' ),
			'option2' => esc_html__( 'Posts (with Image as Post Format)', 'gridsby' ),
			),
	)));

	//do you like a traditional permalink?
	$wp_customize->add_setting( 'gridsby_post_link_method', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'gridsby_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_post_link_method', array(
		'description'    => esc_html__( 'If you do not want the default animated lightbox effect, you can change to link directly to the post.', 'gridsby' ),
		'section'  => 'gridsby_selling_section', 
		'settings' => 'gridsby_post_link_method',
		'type'     => 'radio', 
		'choices'  => array(
			'option1' => esc_html__( 'Animated Lightbox', 'gridsby' ),
			'option2' => esc_html__( 'Direct Link to Single Post', 'gridsby' ),
			),
	)));
	
	// Disable Featured Images
	$wp_customize->add_setting( 'gridsby_no_featured',  
	array(
		 'sanitize_callback' => 'gridsby_sanitize_checkbox', 
         'default' => 0, 
	)); 
	
    $wp_customize->add_control(  
        'gridsby_no_featured',
        array( 
            'type' => 'checkbox',
            'label' => esc_html__( 'Remove Featured Image in Single Post', 'gridsby' ),
			'description' => esc_html__( 'Checking this box will remove featured images in the direct link to single post.', 'gridsby' ),
            'section' => 'gridsby_selling_section',
            'priority' => 10,           
    ));
	
	// Home Panel
	$wp_customize->add_panel( 'home_panel', array(
    'priority'       => 30,  
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Home Section', 'gridsby' ),
    'description'    => esc_html__( 'Edit your home page settings', 'gridsby' ),
	));
	
	// Home Section
	$wp_customize->add_section( 'gridsby_home_section', array(
		'title'          => esc_html__( 'Home Page', 'gridsby' ), 
		'priority'       => 10,
		'description' => esc_html__( 'Customize your Gridsby home page.', 'gridsby' ),
		'panel' => 'home_panel', 
	)); 
	
	// hide section
	$wp_customize->add_setting('active_home_gallery',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_checkbox',
	));
	
	$wp_customize->add_control( 
    'active_home_gallery', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Gallery Section', 'gridsby' ),  
        'section' => 'gridsby_home_section', 
		'priority'   => 10
    ));
	
	// hide section
	$wp_customize->add_setting('active_home_blog',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_checkbox',
	));
	
	$wp_customize->add_control( 
    'active_home_blog', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Blog Section', 'gridsby' ), 
        'section' => 'gridsby_home_section',  
		'priority'   => 20
    ));
	
	// Button Page Drop Downs 
	$wp_customize->add_setting('gallery_button_url', array( 
		'capability' => 'edit_theme_options', 
        'sanitize_callback' => 'gridsby_sanitize_int' 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gallery_button_url', array( 
    	'label' => esc_html__( 'Gallery Button URL', 'gridsby' ), 
    	'section' => 'gridsby_home_section',  
		'type' => 'dropdown-pages',
    	'settings' => 'gallery_button_url', 
		'priority'   => 40 
	))); 
	
	//Number of Pictures
    $wp_customize->add_setting(
        'photos_length',
        array(
            'sanitize_callback' => 'absint',
			'default' => '20',
    ));
	
    $wp_customize->add_control( 'photos_length', array(  
        'type'        => 'number',
        'priority'    => 25, 
        'section'     => 'gridsby_home_section',
        'label'       => esc_html__('Number of Photos', 'gridsby'),
        'description' => esc_html__('Choose your the number of photos to display on the home page gallery. Default is set to 20. If you want to display all, set the number to 0. ( Tip: The more photos you allow, the slower your page will load. )', 'gridsby'),  
        'input_attrs' => array( 
            'min'   => -1, 
            'max'   => 200,
            
        ),
	));
	
	//Excluded Terms
	$wp_customize->add_setting( 'gridsby_post_nav_terms',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text',
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_post_nav_terms', array(
		'label'    => esc_html__( 'Excluded Categories', 'gridsby' ),
		'description'    => esc_html__( 'If you would like to exclude certain categories from the home page, enter in the category numbers in the field below. Separate each number with a comma. For example: 15, 17, 18', 'gridsby' ),
		'section'     => 'gridsby_home_section',
		'settings' => 'gridsby_post_nav_terms',
		'priority'   => 27
	))); 
	
	// Button Text
	$wp_customize->add_setting( 'gridsby_view_all_text', 
	array(
		'sanitize_callback' => 'gridsby_sanitize_text',	 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_view_all_text', array(
    'label' => esc_html__( 'View More Button Text', 'gridsby' ),  
    'section' => 'gridsby_home_section',
    'settings' => 'gridsby_view_all_text',  
	'priority'   => 30
	)));
	
	// Button Text
	$wp_customize->add_setting( 'gridsby_blog_text', 
	array(
		'sanitize_callback' => 'gridsby_sanitize_text',	 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_blog_text', array(
    	'label' => esc_html__( 'Blog Title', 'gridsby' ),  
    	'section' => 'gridsby_home_section', 
    	'settings' => 'gridsby_blog_text',  
		'priority'   => 40 
	)));
	
	// Blog Button Text
	$wp_customize->add_setting( 'gridsby_blog_button_text', 
	array(
		'sanitize_callback' => 'gridsby_sanitize_text',	 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_blog_button_text', array(
    	'label' => esc_html__( 'Blog Button Text', 'gridsby' ),
		'description' => esc_html__( 'Populate the Blog Button Text field in order to activate your home page blog archive button.' , 'gridsby' ),   
    	'section' => 'gridsby_home_section', 
    	'settings' => 'gridsby_blog_button_text',
		'priority'   => 50  
	))); 
	
	// Home Widget Section
	$wp_customize->add_section( 'gridsby_widget_section', array(
		'title'          => esc_html__( 'Home Widget Section', 'gridsby' ),
		'priority'       => 10,
		'description' => esc_html__( 'Customize the home widget area. The main body of the widget area can be edited under the Widgets section.', 'gridsby' ),
		'panel' => 'home_panel',  
	));
	
	// hide section
	$wp_customize->add_setting('active_home_widget',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_checkbox',
	));
	
	$wp_customize->add_control( 
    'active_home_widget', 
    array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Widget Section', 'gridsby' ),  
        'section' => 'gridsby_widget_section', 
		'priority'   => 10
    ));
	
	// Number of Widget Columns 
	$wp_customize->add_setting( 'gridsby_widget_columns', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'gridsby_sanitize_widget_content', 
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_widget_columns', array(
		'label'    => esc_html__( 'Number of Widget Columns', 'gridsby' ),
		'description'    => esc_html__( 'Select the number of widget columns to use. 1 Column will take up the entire widget area, while 4 columns will give space to use 4 widgets for content.', 'gridsby' ),
		'section'  => 'gridsby_widget_section', 
		'settings' => 'gridsby_widget_columns',
		'type'     => 'radio',
		'priority'   => 20,  
		'choices'  => array(
			'option1' => esc_html__( '1 Column', 'gridsby' ),
			'option2' => esc_html__( '2 Columns', 'gridsby' ), 
			'option3' => esc_html__( '3 Columns', 'gridsby' ),
			'option4' => esc_html__( '4 Columns', 'gridsby' ),
			),
	))); 
	
	//New Widget Background Image
	$wp_customize->add_setting( 'gridsby_new_widget_background',
		array(
			'sanitize_callback' => 'esc_url_raw',
	));
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gridsby_new_widget_background', array( 
		'label'	=> esc_html__( 'Widget Background Image', 'gridsby' ),
		'section'	=> 'gridsby_widget_section',
		'settings' => 'gridsby_new_widget_background',
		'priority'	=> 30
	)));
	
	// Widget Text
	$wp_customize->add_setting('gridsby_widget_button_text', array(
		'sanitize_callback' => 'gridsby_sanitize_text' 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_widget_button_text', array(
		'label' => esc_html__( 'Widget Button Text', 'gridsby' ),
		'section' => 'gridsby_widget_section',
		'settings' => 'gridsby_widget_button_text',
		'priority' => 40
	)));
	
	//Page Drop Downs
	$wp_customize->add_setting( 'gridsby_widget_button_url', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'absint' 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_widget_button_url', array(
		'label' => esc_html__( 'Widget Button URL', 'gridsby' ),
		'section' => 'gridsby_widget_section',
		'type' => 'dropdown-pages',
		'settings' => 'gridsby_widget_button_url',
		'priority' => 50
	)));
	
	// Page URL
	$wp_customize->add_setting( 'gridsby_page_url_text',
	    array(
	        'sanitize_callback' => 'gridsby_sanitize_text',
	));  

	$wp_customize->add_control( 'gridsby_page_url_text', array(
		'type'     => 'url',
		'label'    => esc_html__( 'External URL Option', 'gridsby' ),
		'description' => esc_html__( 'If you use an external URL, leave the Widget Button Link above empty. Must include http:// before any URL.', 'gridsby' ),
		'section'  => 'gridsby_widget_section',  
		'settings' => 'gridsby_page_url_text',
		'priority'   => 60 
	));
	
	// Add Photo Posts
	$wp_customize->add_section( 'gridsby_photo_posts' , array(
    	'title' => esc_html__( 'Photo Post Options', 'gridsby' ),
    	'priority' => 29, 
    	'description' => esc_html__( 'Customize your photo posts options', 'gridsby' ),
		'panel'			 => 'gridsby_gallery_panel',  
	) ); 
	
	// Which option
	$wp_customize->add_setting( 'gridsby_post_time_method', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'gridsby_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_post_time_method', array(
		'label' => esc_html__( 'Photo Post Order', 'gridsby' ), 
		'description'    => esc_html__( 'Select to display your posts in ascending or descending order.', 'gridsby' ),
		'section'  => 'gridsby_photo_posts',
		'settings' => 'gridsby_post_time_method',
		'type'     => 'radio', 
		'priority'   => 27, 
		'choices'  => array(
			'option1' => esc_html__( 'Ascending', 'gridsby' ),
			'option2' => esc_html__( 'Descending', 'gridsby' ), 
			),
	))); 
	
	// Hover content settings
	$wp_customize->add_setting( 'gridsby_hover_content', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'gridsby_sanitize_hover_content', 
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_hover_content', array(
		'label' => esc_html__( 'Photo Post Hover', 'gridsby' ), 
		'description'    => esc_html__( 'Choose your hover content for photos.', 'gridsby' ),
		'section'  => 'gridsby_photo_posts',
		'settings' => 'gridsby_hover_content', 
		'type'     => 'radio', 
		'priority'   => 30, 
		'choices'  => array(
			'option1' => esc_html__( 'Icon', 'gridsby' ),
			'option2' => esc_html__( 'Post Title', 'gridsby' ), 
			'option3' => esc_html__( 'Hover Text (enter text below)', 'gridsby' ),
			'option4' => esc_html__( 'None', 'gridsby' ), 
			'option5' => esc_html__( 'Post Excerpt', 'gridsby' ),
			),
	)));
	
	// Hover content icon
	$wp_customize->add_setting( 'gridsby_hover_content_icon' , 
	array( 
		'sanitize_callback' => 'gridsby_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_hover_content_icon', array(
    	'label' => esc_html__( 'Hover Icon', 'gridsby' ), 
		'description'    => __( 'After choosing Icon for Photo Post Hover above, you can choose which icon to display from <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_blank">http://fortawesome.github.io/Font-Awesome/cheatsheet/</a>. Copy and paste the icon name including the fa prefix ( ex. fa-camera ). The default icon is fa-plus.', 'gridsby' ), 
    	'section' => 'gridsby_photo_posts', 
    	'settings' => 'gridsby_hover_content_icon',  
		'priority'   => 32 
	)));
	
	// Hover content text
	$wp_customize->add_setting( 'gridsby_hover_content_text' , 
	array( 
		'sanitize_callback' => 'gridsby_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_hover_content_text', array(
    	'label' => esc_html__( 'Hover Text', 'gridsby' ), 
		'description'    => esc_html__( 'After choosing Hover Text for Photo Post Hover above, enter your text here', 'gridsby' ),
    	'section' => 'gridsby_photo_posts',
    	'settings' => 'gridsby_hover_content_text',  
		'priority'   => 34
	)));
	
	
	//Excerpt or content
	$wp_customize->add_setting( 'gridsby_lightbox_content', array(
		'default'	        => 'option1',  
		'sanitize_callback' => 'gridsby_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_lightbox_content', array(
		'label'    => esc_html__( 'Animated Lightbox Content', 'gridsby' ),
		'description'    => esc_html__( 'Display either either full content or excerpt in the animated lightbox content.', 'gridsby' ),
		'section' => 'gridsby_photo_posts',
		'settings' => 'gridsby_lightbox_content',
		'priority'   => 35,
		'type'     => 'radio', 
		'choices'  => array(
			'option1' => esc_html__( 'Full Content', 'gridsby' ),
			'option2' => esc_html__( 'Excerpt', 'gridsby' ), 
			),
	)));
	
	// Read More Text
	$wp_customize->add_setting( 'gridsby_read_more_lb', 
	array(
		'default' => esc_html__( '...Read More', 'gridsby' ),
		'sanitize_callback' => 'gridsby_sanitize_text',	 
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_read_more_lb', array(
    	'label' => esc_html__( 'Read More Text', 'gridsby' ),  
		'description' => esc_html__( 'If you use the excerpt option for Animated Lightbox Content, then customize your Read More text here.', 'gridsby' ), 
    	'section' => 'gridsby_photo_posts',
    	'settings' => 'gridsby_read_more_lb', 
		'priority'   => 38 
	)));
	
	// More Info Text
	$wp_customize->add_setting( 'gridsby_more_info', 
	array(
		'default' => esc_html__( 'More Info', 'gridsby' ),
		'sanitize_callback' => 'gridsby_sanitize_text',	 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_more_info', array(
    	'label' => esc_html__( 'More Info Text', 'gridsby' ),  
		'description' => esc_html__( 'This text will be used in place of the More Info text on your photo posts.', 'gridsby' ), 
    	'section' => 'gridsby_photo_posts',
   		'settings' => 'gridsby_more_info',
		'priority'   => 40
	)));  
	
	
	      
	// Add Footer Section
	$wp_customize->add_section( 'footer-custom' , array(
    	'title' => esc_html__( 'Footer', 'gridsby' ),
    	'priority' => 32,
    	'description' => esc_html__( 'Customize your footer area', 'gridsby' )
	) );

	// Footer Phone 
	$wp_customize->add_setting( 'gridsby_footer_phone' , 
	array( 
		'sanitize_callback' => 'gridsby_sanitize_text', 
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_footer_phone', array(
    'label' => esc_html__( 'Footer Phone Number', 'gridsby' ),
    'section' => 'footer-custom',
    'settings' => 'gridsby_footer_phone',  
	'priority'   => 3
	) ) ); 
	
	// Footer Contact
	$wp_customize->add_setting( 'gridsby_footer_contact' , 
	array(
		'sanitize_callback' => 'gridsby_sanitize_text', 
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_footer_contact', array(
    'label' => esc_html__( 'Footer Email', 'gridsby' ), 
    'section' => 'footer-custom',
    'settings' => 'gridsby_footer_contact',
	'priority'   => 5
	) ) );
	
	// Footer Byline Text 
	$wp_customize->add_setting( 'gridsby_footerid',  
	array( 
		'sanitize_callback' => 'gridsby_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_footerid', array(
    'label' => esc_html__( 'Footer Byline Text', 'gridsby' ),
    'section' => 'footer-custom',
    'settings' => 'gridsby_footerid',
	'priority'   => 6 
) ) );

	// Choose excerpt or full content on blog
    $wp_customize->add_section( 'gridsby_layout_section' , array( 
	    'title'       => esc_html__( 'Blog', 'gridsby' ),
	    'priority'    => 38, 
	    'description' => 'Change how gridsby displays posts', 
	));
	
	//Single Post Layout
	$wp_customize->add_setting( 'gridsby_single_post_full', array(
		'default'	        => 'option1', 
		'sanitize_callback' => 'gridsby_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_single_post_full', array(
		'label'    => esc_html__( 'Single Post Layout', 'gridsby' ),
		'description'    => esc_html__( 'Change your Single Post layout to Full-width.', 'gridsby' ),
		'section'  => 'gridsby_layout_section',
		'settings' => 'gridsby_single_post_full',
		'priority'   => 20,
		'type'     => 'radio', 
		'choices'  => array(
			'option1' => esc_html__( 'Default Layout', 'gridsby' ),
			'option2' => esc_html__( 'Full-width Layout', 'gridsby' ),
			),
	)));
	
	//Archive Layout
	$wp_customize->add_setting( 'gridsby_archive_post_full', array(
		'default'	        => 'option1', 
		'sanitize_callback' => 'gridsby_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_archive_post_full', array(
		'label'    => esc_html__( 'Blog Archive Layout', 'gridsby' ),
		'description'    => esc_html__( 'Change your Blog Archive layout to Full-width.', 'gridsby' ),
		'section'  => 'gridsby_layout_section',
		'settings' => 'gridsby_archive_post_full', 
		'priority'   => 30,
		'type'     => 'radio', 
		'choices'  => array(
			'option1' => esc_html__( 'Default Layout', 'gridsby' ),
			'option2' => esc_html__( 'Full-width Layout', 'gridsby' ),
			),
	)));
	
	//Post Content
	$wp_customize->add_setting( 'gridsby_post_content', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'gridsby_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_post_content', array(
		'label'    => esc_html__( 'Post content', 'gridsby' ),
		'section'  => 'gridsby_layout_section',
		'settings' => 'gridsby_post_content',
		'priority'   => 40,
		'type'     => 'radio',
		'choices'  => array(
			'option1' => 'Excerpts',
			'option2' => 'Full content',
			),
	)));
	
	//Excerpt
    $wp_customize->add_setting(
        'exc_length',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '30',
    ));
	
    $wp_customize->add_control( 'exc_length', array( 
        'type'        => 'number',
        'priority'    => 2, 
        'section'     => 'gridsby_layout_section',
        'label'       => esc_html__('Excerpt length', 'gridsby'),
        'description' => esc_html__('Choose your excerpt length here. Default: 30 words', 'gridsby'),
		'priority'   => 50,
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 200,
            'step'  => 5
        ), 
	));
	
	// Read More Text 
	$wp_customize->add_setting( 'gridsby_read_more',  
	array(
		'default' => esc_html__( 'Read More', 'gridsby' ), 
		'sanitize_callback' => 'gridsby_sanitize_text',
	)); 
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_read_more', array(
    'label' => esc_html__( 'Read More Text', 'gridsby' ),
    'section'     => 'gridsby_layout_section',
    'settings' => 'gridsby_read_more',
	'priority'   => 60
	)));
	
	
	// Pagination Setting 
	$wp_customize->add_section( 'gridsby_pagination_section', array( 
		'title'          => esc_html__( 'Gallery Page Pagination', 'gridsby' ),
		'priority'       => 35,
	));
	
	$wp_customize->add_setting( 'gridsby_pagination_option', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'gridsby_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_pagination_option', array(
		'label' => esc_html__( 'Pagination', 'gridsby' ), 
		'description'    => esc_html__( 'Set a pagination option for gallery or fullwidth gallery pages.', 'gridsby' ),
		'section'  => 'gridsby_pagination_section',
		'settings' => 'gridsby_pagination_option',
		'type'     => 'radio',  
		'priority'   => 10,
		'choices'  => array(
			'option1' => esc_html__( 'All Photos', 'gridsby' ),
			'option2' => esc_html__( 'Pagination', 'gridsby' ), 
			),
	)));
	
	//Number of Pictures
    $wp_customize->add_setting(
        'gridsby_pagi_photos_length',
        array(
            'sanitize_callback' => 'absint',
			'default' => '15', 
    ));
	
    $wp_customize->add_control( 'gridsby_pagi_photos_length', array(  
        'type'        => 'number',
        'priority'    => 20,
        'section'  => 'gridsby_pagination_section', 
        'label'       => esc_html__('Number of Pagination Images', 'gridsby'),
        'description' => esc_html__('Choose the number of photos to display with the pagination option in the gallery pages. Default is set to 15.', 'gridsby'),  
        'input_attrs' => array(
            'min'   => -1, 
            'max'   => 100,
            
        ), 
	)); 
	
	 
	//Category Gallery
	$wp_customize->add_section( 'gridsby_category_section', array(
		'title'          => esc_html__( 'Category Pages', 'gridsby' ), 
		'priority'       => 35,
		'description' => esc_html__( 'Select the layout of your category pages.', 'gridsby' ),
	)); 
	
	//How your posts will display
	$wp_customize->add_setting( 'gridsby_category_layout', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'gridsby_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_category_layout', array(
		'label'	   =>  esc_html__( 'Category Gallery Layout', 'gridsby' ),
		'description' 	   =>  esc_html__( '(Note: only for image gallery layouts)', 'gridsby' ),
		'section'  => 'gridsby_category_section', 
		'settings' => 'gridsby_category_layout',
		'type'     => 'radio', 
		'priority'    => 10, 
		'choices'  => array(
			'option1' => esc_html__( 'Full-width Gallery', 'gridsby' ),
			'option2' => esc_html__( 'Gallery with Sidebar', 'gridsby' ),
			),
	)));
	
	//Display the Title?
	$wp_customize->add_setting( 'gridsby_category_title', array(
		'default'	        => 'option1',
		'sanitize_callback' => 'gridsby_sanitize_index_content',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'gridsby_category_title', array(
		'label'	   =>  esc_html__('Title Display', 'gridsby' ),
		'section'  => 'gridsby_category_section',
		'settings' => 'gridsby_category_title',
		'priority'    => 20, 
		'type'     => 'radio', 
		'choices'  => array(
			'option1' => esc_html__( 'Show Category Title', 'gridsby' ),
			'option2' => esc_html__( 'Hide Category Title', 'gridsby' ), 
			),
	)));
	
	//Number of Pictures
    $wp_customize->add_setting(
        'gridsby_category_num_posts',
        array(
            'sanitize_callback' => 'absint',
    ));
	
    $wp_customize->add_control( 'gridsby_category_num_posts', array(  
        'type'        => 'number',
        'priority'    => 30,
        'section'     => 'gridsby_category_section', 
        'label'       => esc_html__('Number of Posts', 'gridsby'),
        'description' => esc_html__('Choose the number of posts to display on your category pages (0 shows all)', 'gridsby'),  
        'input_attrs' => array(
            'min'   => -1, 
            'max'   => 200,
            
        ),
	));
  
	// Set site name and description to be previewed in real-time
	$wp_customize->get_setting('blogname')->transport='postMessage';
	$wp_customize->get_setting('blogdescription')->transport='postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// Move sections up 
	$wp_customize->get_section('static_front_page')->priority = 10;


}
add_action('customize_register', 'gridsby_theme_customizer');


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gridsby_customize_preview_js() {
	wp_enqueue_script( 'gridsby_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'gridsby_customize_preview_js' );

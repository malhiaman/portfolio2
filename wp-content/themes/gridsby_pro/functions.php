<?php
/**
 * gridsby functions and definitions
 *
 * @package gridsby
 */


/**
 * register the theme update
 */ 
require 'theme-updates/theme-update-checker.php';
$MyThemeUpdateChecker = new ThemeUpdateChecker(
'gridsby_pro', //Theme slug. Usually the same as the name of its directory.
'http://modernthemes.net/updates/?action=get_metadata&slug=gridsby_pro' //Metadata URL.
);


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'gridsby_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gridsby_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on gridsby, use a find and replace
	 * to change 'gridsby' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'gridsby', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'gridsby-gallery-thumb', 450 );
	add_image_size( 'gridsby-gallery-full', 600 );  

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'gridsby' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gridsby_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'image' ) );
	
}
endif; // gridsby_setup
add_action( 'after_setup_theme', 'gridsby_setup' );


/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function gridsby_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'gridsby' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title"><span class="title">',
		'after_title'   => '</span></h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Photo Sidebar', 'gridsby' ),
		'id'            => 'photo-sidebar',
		'description'   => __( 'This widget area will display on each Photo download page.', 'gridsby' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title"><span class="title">',
		'after_title'   => '</span></h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home Widget', 'gridsby' ),
		'id'            => 'home-widget',
		'description'   => __( 'The widget area for your home page.', 'gridsby' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',  
		'before_title'  => '<h2>',
		'after_title'   => '</h2>', 
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'gridsby' ),
		'id'            => 'footer-widget-1',
		'description'   => __( 'The widget area for your footer area.', 'gridsby' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',  
		'before_title'  => '<h1 class="widget-title"><span class="title">',
		'after_title'   => '</span></h1>', 
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'gridsby' ),
		'id'            => 'footer-widget-2',
		'description'   => __( 'The widget area for your footer area.', 'gridsby' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',  
		'before_title'  => '<h1 class="widget-title"><span class="title">',
		'after_title'   => '</span></h1>', 
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'gridsby' ),
		'id'            => 'footer-widget-3',
		'description'   => __( 'The widget area for your footer area.', 'gridsby' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',  
		'before_title'  => '<h1 class="widget-title"><span class="title">',
		'after_title'   => '</span></h1>', 
	) );
	
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 1', 'gridsby' ),
		'id'            => 'add-sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title"><span class="title">',
		'after_title'   => '</span></h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 2', 'gridsby' ),
		'id'            => 'add-sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title"><span class="title">',
		'after_title'   => '</span></h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 3', 'gridsby' ),
		'id'            => 'add-sidebar-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title"><span class="title">',
		'after_title'   => '</span></h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 4', 'gridsby' ),
		'id'            => 'add-sidebar-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title"><span class="title">',
		'after_title'   => '</span></h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Addtional Sidebar 5', 'gridsby' ),
		'id'            => 'add-sidebar-5',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title"><span class="title">',
		'after_title'   => '</span></h1>',
	) ); 
	
	//Register the sidebar widgets   
	register_widget( 'gridsby_Video_Widget' ); 
	register_widget( 'gridsby_Contact_Info' );
	/**
 	* Implement the gridsby recent posts sidebar
	*/
	//register_widget( 'gridsby_Recent_Posts' );
	
}
add_action( 'widgets_init', 'gridsby_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gridsby_scripts() {
	wp_enqueue_style( 'gridsby-style', get_stylesheet_uri() );
	
	$headings_font = esc_html(get_theme_mod('headings_fonts'));
	$body_font = esc_html(get_theme_mod('body_fonts')); 
	
	if( $headings_font ) {
		wp_enqueue_style( 'gridsby-headings-fonts', '//fonts.googleapis.com/css?family='. $headings_font );	
	} else {
		wp_enqueue_style( 'gridsby-open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700');  
	}	
	if( $body_font ) {
		wp_enqueue_style( 'gridsby-body-fonts', '//fonts.googleapis.com/css?family='. $body_font );	
	} else {
		wp_enqueue_style( 'gridsby-open-body', '//fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700');
	} 
	
	wp_enqueue_style( 'gridsby-font-awesome', get_template_directory_uri() . '/fonts/font-awesome.min.css' );
	wp_enqueue_style( 'gridsby-grid-css', get_template_directory_uri() . '/css/grid.css' ); 
	wp_enqueue_style( 'gridsby-menu-css', get_template_directory_uri() . '/css/jPushMenu.css' );
	
	if ( get_theme_mod('gridsby_no_featured') != 0 ) {
	wp_enqueue_style( 'gridsby-no-featured-css', get_stylesheet_directory_uri() . '/css/no-featured.css', array() );
	}
	
	if ( get_theme_mod('gridsby_animate') != 1 ) {
	wp_enqueue_script( 'gridsby-wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), true ); 
	wp_enqueue_style( 'gridsby-animate-css', get_stylesheet_directory_uri() . '/css/animate.css', array() );
	wp_enqueue_script( 'gridsby-wow-init', get_template_directory_uri() .  '/js/wow-init.js', array( 'jquery' ), true );
	}
	
	wp_enqueue_script( 'gridsby-pushMenu', get_template_directory_uri() . '/js/jPushMenu.js', array('jquery'), false, true );
	wp_enqueue_script( 'gridsby-side-menu', get_template_directory_uri() . '/js/gridsby-push-menu.js', array('jquery'), false, true );
	
	if ( is_page_template( 'page-home-slider.php' ) ) {
	wp_enqueue_style( 'gridsby-slick', get_template_directory_uri() . '/css/slick.css' );
	wp_enqueue_script( 'gridsby-slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), false, true ); 
	wp_enqueue_script( 'gridsby-slick-script', get_template_directory_uri() . '/js/slick.script.js', array(), false, true );
	}
	
	wp_enqueue_script( 'gridsby-images-loaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), false, false );
	wp_enqueue_script( 'gridsby-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'gridsby-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'gridsby-modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array(), false, false );
	wp_enqueue_script( 'gridsby-classie', get_template_directory_uri() . '/js/classie.js', array(), false, true );
	wp_enqueue_script( 'gridsby-helper', get_template_directory_uri() . '/js/helper.js', array(), false, true );
	wp_enqueue_script( 'gridsby-hover-effects', get_template_directory_uri() . '/js/gridsby-hover-effects.js', array('jquery'), false, true );
	
	if ( is_page_template( 'page-home.php' ) || is_page_template( 'page-gallery.php' ) || is_page_template( 'page-full-gallery.php' ) || is_tax( 'download_category' ) ) 	{
	wp_enqueue_script( 'gridsby-masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), false, true );
	wp_enqueue_script( 'gridsby-grid3d', get_template_directory_uri() . '/js/grid3d.js', array(), false, true ); 
	wp_enqueue_script( 'gridsby-gridsby-gallery', get_template_directory_uri() . '/js/gridsby-gallery.js', array(), false, true );
	} 

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { 
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gridsby_scripts' );


/**
 * files for those category galleries
 */
function gridsby_gallery_script_includes( $template ) { 
	 
	    // Check if the taxonomy query contains only image formats
	    if ( is_category() || is_tag() ) {
	        $gallery_view = true;
	        global $wp_query;
	        if ( $wp_query->have_posts() ) :
	            while ( $wp_query->have_posts() ) : $wp_query->the_post();
	                $format = get_post_format();
	                if ( ( $format != 'image' ) ) {
	                     $gallery_view = false;
	                }
	            endwhile;
	        endif;
	        if ( $gallery_view ) {
	            // gallery files
	           	wp_enqueue_script( 'gridsby-grid3d', get_template_directory_uri() . '/js/grid3d.js', array(), false, true );
				wp_enqueue_script( 'gridsby-masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), false, true );
				wp_enqueue_script( 'gridsby-gridsby-gallery', get_template_directory_uri() . '/js/gridsby-gallery.js', array(), false, true );
	        }
	    }
	 
	    return $template;
	}
add_filter( 'template_include', 'gridsby_gallery_script_includes' ); 



/**
 * Load html5shiv
 */
function gridsby_html5shiv() {
    echo '<!--[if lt IE 9]>' . "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/js/html5shiv.js' ) . '"></script>' . "\n";
    echo '<![endif]-->' . "\n";
}
add_action( 'wp_head', 'gridsby_html5shiv' );  

/**
 * Change the excerpt length
 */
function gridsby_excerpt_length( $length ) {
	
	$excerpt = get_theme_mod('exc_length', '30');
	return $excerpt; 

}

add_filter( 'excerpt_length', 'gridsby_excerpt_length', 999 ); 


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Include additional custom admin panel features. 
 */
require get_template_directory() . '/panel/functions-admin.php';
require get_template_directory() . '/panel/gridsby-admin_page.php'; 

/**
 * register your custom widgets
 */ 
require get_template_directory() . "/widgets/contact-info.php"; 
require get_template_directory() . "/widgets/video-widget.php";

/**
* Favicon
*/
require get_template_directory() . '/inc/gridsby-favicon.php'; 


/**
 * Implement the gridsby recent posts sidebar
*/
//require get_template_directory() . "/widgets/recent-posts.php";

/**
 * Google Fonts  
 */
require get_template_directory() . '/inc/gfonts.php'; 

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/gridsby-sidebar-columns.php'; 
require get_template_directory() . '/inc/gridsby-styles.php';
require get_template_directory() . '/inc/gridsby-sanitize.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Activate for a child theme.  Always use a child theme to make edits.
 */
require_once( trailingslashit( get_template_directory() ) . '/inc/use-child-theme.php' ); 

/**
 * enable comments for easy digital downloads
 */
function custom_enable_comments( $supports ) {
	return array_merge( $supports, array( 'comments' ) );
}
add_filter( 'edd_download_supports', 'custom_enable_comments' ); 


/**
 * Slider Post Type. 
 */
function slider_post_type() {

	$labels = array(
		'name'                => _x( 'Slides', 'Post Type General Name', 'gridsby' ),
		'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'gridsby' ),
		'menu_name'           => __( 'Slides', 'gridsby' ),
		'parent_item_colon'   => __( 'Parent Item:', 'gridsby' ),
		'all_items'           => __( 'All Slides', 'gridsby' ),
		'view_item'           => __( 'View Slides', 'gridsby' ),
		'add_new_item'        => __( 'Add New Slide', 'gridsby' ),
		'add_new'             => __( 'Add New', 'gridsby' ),
		'edit_item'           => __( 'Edit Slide', 'gridsby' ),
		'update_item'         => __( 'Update Slide', 'gridsby' ),
		'search_items'        => __( 'Search Slides', 'gridsby' ),
		'not_found'           => __( 'Not found', 'gridsby' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'gridsby' ),
	);
	$args = array(
		'label'               => __( 'slides', 'gridsby' ),
		'description'         => __( 'Add a slide to your schedule.', 'gridsby' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'taxonomies'          => array( 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'slider', $args );

}

// Hook into the 'init' action
add_action( 'init', 'slider_post_type', 0 );	


function slider_metaboxes( $meta_boxes ) {
    $prefix = '_slide_'; // Prefix for all fields
    $meta_boxes['slider_metabox'] = array(
        'id' => 'slider_metabox',
        'title' => __( 'Slide URL', 'gridsby' ), 
        'pages' => array('slider'), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
				'name' => __( 'Enter URL', 'gridsby' ),
				'id'   => $prefix . 'url',
				'type' => 'text_url',
			),
        ),
    );

    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'slider_metaboxes' );


/**
 * Initialize custom meta 
 */
add_action( 'init', 'gridsby_be_initialize_cmb_meta_boxes', 9999 );
function gridsby_be_initialize_cmb_meta_boxes() {
    if ( !class_exists( 'cmb_Meta_Box' ) ) {
        require_once( 'meta/init.php' );
    }
}

/**
 * get out of that loop
 */
function gridsby_exclude_post_formats_from_blog( $query ) {

	if( $query->is_main_query() && $query->is_home() ) {
		$tax_query = array( array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' => array( 'post-format-image' ),
			'operator' => 'NOT IN',
		) );
		$query->set( 'tax_query', $tax_query ); 
	}

}
add_action( 'pre_get_posts', 'gridsby_exclude_post_formats_from_blog' );


/**
 * category galleries for all
 */
function gridsby_gallery_template_chooser( $template ) {
	 
	    // Check if the taxonomy query contains only image formats
	    if ( is_category() || is_tag() ) {
	        $gallery_view = true;
	        global $wp_query;
	        if ( $wp_query->have_posts() ) :
	            while ( $wp_query->have_posts() ) : $wp_query->the_post();
	                $format = get_post_format();
	                if ( ( $format != 'image' ) ) {
	                     $gallery_view = false;
	                }
	            endwhile;
	        endif;
	        if ( $gallery_view ) {
	            // In this case, I'm using an archive-gallery template I've created
	            $template = get_query_template( 'archive-image' ); 
	        }
	    }
	 
	    return $template;
	}
add_filter( 'template_include', 'gridsby_gallery_template_chooser' );


	
/**
 * how many posts, my friend? 
 */
function gridsby_posts_cat_gallery( $query ) {
	
		$galnumber = intval( get_theme_mod( 'gridsby_category_num_posts' ));

		if ( ! $galnumber )

		$galnumber = -1; 
	
	    
			if ( $query->is_category() || is_tax( 'download_category' ) ) {
        		$query->set( 'posts_per_page', intval( $galnumber ) ); 
    		}
	      
	}
add_filter( 'pre_get_posts', 'gridsby_posts_cat_gallery' );



// Replaces the excerpt "more" text by a link 
function gridsby_new_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '">' . esc_html( get_theme_mod( 'gridsby_read_more_lb', __( '...Read More', 'gridsby' ) )) . '</a>';   
}
add_filter('excerpt_more', 'gridsby_new_excerpt_more'); 


/**
 * numbered pagination
 */ 
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'></a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'></a>"; 
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\"></a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'></a>"; 
         echo "</div>\n";
     }
}

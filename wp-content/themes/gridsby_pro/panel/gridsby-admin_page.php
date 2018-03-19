<?php

function gridsbypro_admin_page_styles() {
    wp_enqueue_style( 'gridsbypro-font-awesome-admin', get_template_directory_uri() . '/fonts/font-awesome.css' ); 
	wp_enqueue_style( 'gridsbypro-style-admin', get_template_directory_uri() . '/panel/css/theme-admin-style.css' );
}
add_action( 'admin_enqueue_scripts', 'gridsbypro_admin_page_styles' ); 

     
add_action('admin_menu', 'gridsby_setup_menu');
     
    function gridsby_setup_menu(){
            add_theme_page( esc_html__( 'About Gridsby Pro', 'gridsby' ), esc_html__( 'About Gridsby Pro', 'gridsby' ), 'edit_theme_options', 'gridsby-setup', 'gridsby_init' );
    } 
     
 	function gridsby_init(){
	 	echo '<div class="grid grid-pad"><div class="col-1-1"><h1 style="text-align: center;">'; 
		printf( esc_html__('Thank you for using Gridsby Pro!', 'gridsby' )); 
        echo "</h1></div></div>";
		  
		 
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 40px; margin-bottom: 30px;" ><div class="col-1-3"><h2>'; 
		printf( esc_html__('Support', 'gridsby' )); 
        echo "</h2>"; 
		
		echo '<p>';
		printf( esc_html__('Visit the link below for support. Use the password given to you when you purchased Gridsby Pro to access the support form.', 'gridsby' )); 
		echo "</p>";
		
		echo '<a href="https://modernthemes.net/support-forums/" target="_blank"><button>';  
		printf( esc_html__('Get Support', 'gridsby' ));  
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf( esc_html__('Documentation', 'gridsby' )); 
        echo "</h2>";  
		
		
		echo '<p>';
		printf( esc_html__('Check out our Gridsby documentation to learn how to use gridsby and for tutorials on the necessary theme functions. Click the link below.', 'gridsby' )); 
		echo "</p>";
		
		echo '<a href="https://modernthemes.net/documentation/gridsby-pro-documentation/" target="_blank"><button>'; 
		printf( esc_html__('Read Docs', 'gridsby' ));
		echo "</button></a></div>";
		
		echo '<div class="col-1-3"><h2>'; 
		printf( esc_html__('About ModernThemes', 'gridsby' )); 
        echo "</h2>";  
		
		echo '<p>';
		printf( esc_html__('Want more WordPress themes or support and customization? We can probably help you out at www.modernthemes.net.', 'gridsby' ));
		echo "</p>"; 
		
		echo '<a href="https://modernthemes.net/" target="_blank"><button>'; 
		printf( esc_html__('About Us', 'gridsby' ));
		echo "</button></a></div></div>";
		
		
		echo '<div class="grid grid-pad senswp"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
		printf( esc_html__('Premium Membership. Premium Experience.', 'gridsby' )); 
		echo '</h1></div>';
		
        echo '<div class="col-1-4"><i class="fa fa-cogs"></i><h4>'; 
		printf( esc_html__('Plugin Compatibility', 'gridsby' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Use our new free plugins with this theme to add functionality for things like projects, clients, team members and more. Compatible with all premium themes!', 'gridsby' ));
		echo '</p></div>';
		
		echo '<div class="col-1-4"><i class="fa fa-desktop"></i><h4>'; 
        printf( esc_html__('Agency Designed Themes', 'gridsby' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('Look as good as can be with our new premium themes. Each one is agency designed with modern styles and professional layouts.', 'gridsby' ));
		echo '</p></div>'; 
		
        echo '<div class="col-1-4"><i class="fa fa-users"></i><h4>';
        printf( esc_html__('Membership Options', 'gridsby' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__('We have options to fit every budget. Choose between a single theme, or access to all current and future themes for a year, or forever!', 'gridsby' ));
		echo '</p></div>'; 
		
		echo '<div class="col-1-4"><i class="fa fa-calendar"></i><h4>'; 
		printf( esc_html__( 'Access to New Themes', 'gridsby' ));
		echo '</h4>';
		
        echo '<p>';
		printf( esc_html__( 'New themes added monthly! When you purchase a premium membership you get access to all premium themes, with new themes added monthly.', 'gridsby' ));   
		echo '</p></div>';
		
		
		echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="https://modernthemes.net/premium-wordpress-themes/" target="_blank"><button class="pro">'; 
		printf( esc_html__( 'Get Premium Membership', 'gridsby' ));  
		echo '</button></a></div></div>';
		
		
		echo '<div class="grid grid-pad"><div class="col-1-1"><h2 style="text-align: center;">'; 
		printf( esc_html__( 'Changelog' , 'gridsby' ) ); 
        echo "</h2>";
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.5.5 - Deprecated: Removed social share buttons as the method no longer worked with current browsers', 'gridsby' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.5.2 - Update: added a method to exclude categories from Home Page gallery. Go to Theme Customizer => Home Section => Home Page to exclude categories with the category number.', 'gridsby' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.5.1 - Update: added the Houzz social icon', 'gridsby' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.5.0 - Fix: minor CSS edits', 'gridsby' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.4.9 - Fix: number input bug in theme customizer', 'gridsby' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.4.8 - Fix: bug fixes for image links in Gallery pages', 'gridsby' )); 
		echo '</p>';
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.4.7 - Fix: added CSS for the third-level of the Static Top Menu', 'gridsby' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">';  
		printf( esc_html__('1.4.6 - Update: Tested with WordPress 4.5, Updating Font Awesome icons to 4.6, Added Snapchat and Weibo social icon options', 'gridsby' ));
		echo '</p>'; 
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.4.5 - Update: Added an option for pagination in Gallery and Fullwidth Gallery pages. Go to Appearance => Gallery Page Pagination to set bottom pagination for gallery pages.' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.4.3 - Update: Option added in theme customizer to change the hover icon for images. Go to Appearance => Customize => Gallery => Photo Post Options and add the Font Awesome icon name.' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.4.2 - Update: adds one-click option to add Child Theme. Go to Appearance => Editor and activate child theme from notification.' , 'gridsby' ) ); 
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.4.1 - Fix: minor bug fixes to home widget area' , 'gridsby' ) ); 
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.4.0 - Update: comment number added to blog' , 'gridsby' ) ); 
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.3.9 - Update: added many new social icon options to theme customizer' , 'gridsby' ) ); 
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.3.7 - Fix: corrected content/excerpt option for gallery pages' , 'gridsby' ) ); 
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.3.6 - added new social icon options' , 'gridsby' ) ); 
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.3.5 - minor bug fixes and improvements' , 'gridsby' ) ); 
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.3.4 - added option for Animated Lightbox content excerpts. Go to Appearance => Customizer => Gallery => Photo Post Options and select either Full Content or Excerpts for Animated Lightbox Content. If you chose excerpts, there is also a field for your "Read More" text below.' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.3.2 - added option for Home Page Blog Button. Go to Appearance => Customizer => Home Page and add Blog Button text to activate the home page Blog Button.' , 'gridsby' ) ); 
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.3.1 - condensed Customizer options into Home Page and Gallery panels' , 'gridsby' ) ); 
        echo "</p>"; 
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.3.0 - new Font Awesome 4.5 icons added' , 'gridsby' ) ); 
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.2.14 - new theme update method added' , 'gridsby' ) ); 
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.2.13 - minor bug fixes' , 'gridsby' ) ); 
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.2.12 - minor bug fixes' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__( '1.2.11 - added VK to social media section' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.2.10 - added excerpt hover to image category galleries' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.2.9 - added option to open social media link in new window. Go to Social Media Icons and click Open in New Window. Also added option add a phone number or email to social media icons.' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.2.8 - added Navigation section that was deleted when WordPress switched to 4.3. Removed color options from Menu Locations' , 'gridsby' ) );
        echo "</p>"; 
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.2.7 - updated Image post format templates to include meta information' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.2.6 - update to the excerpt hover option' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.2.5 - minor bug fixes' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.2.4 - added Google Fonts' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.2.3 - minor bug fixes' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.2.2 - added option to change Single Post and Blog Archive layouts to full-width. Go to Appearance => Customize => Blog to change settings.' , 'gridsby' ) ); 
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.2.0 - added 500px social media icon option.' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.1.19 - minor bug fixes. added option to change Close Menu colors.' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.1.18 - minor bug fixes.' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.1.17 - updated Font Awesome icons.' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.1.16 - added option to display excerpt on hover for gallery images. Go to Appearance -> Customize -> Photo Post Options to change you Photo Post Hover options.' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.1.14 - updated transaltion files.' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.1.13 - adds option to for a static nav instead of a toggle nav. Go to Appearance -> Customize -> Navigation to select which navigation method to use. You can also edit the Navigation colors by going to Appearance -> Customize -> Colors.' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.1.12 - browser bug fixes' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.1.11 - minor bug fixes' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.1.10 - bug fixes with Safari' , 'gridsby' ) );
        echo "</p>";
		 
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.1.9 - minor menu bug fixes for category posts' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.1.8 - fixes minor mobile issues' , 'gridsby' ) ); 
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.1.7 - minor bug fixes' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">'; 
		printf( esc_html__( '1.1.6 - adds option to disable Featured Images in single blog posts. Go to Appearance -> Customize -> Photo Post Method to check box that disables the featured image.' , 'gridsby' ) );
        echo "</p>";
		
		echo '<p style="text-align: center;">';
		printf( esc_html__('1.1.5 - adds option to change hover effect for images to text, post title, or nothing at all. Go to Appearance -> Customize -> Photo Post Options to change settings', 'gridsby' ));
		echo '</p></div></div>'; 	
		 
    }
?>
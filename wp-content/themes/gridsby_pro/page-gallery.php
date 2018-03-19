<?php
/**
 * Template Name: Gallery Page 
 *
 * @package gridsby
 */

get_header(); ?>

<div class="grid grid-pad">

<div class="col-9-12 content-wrapper">
    <div id="primary" class="content-area">
    	<main id="main" class="site-main" role="main">
    
        	<section class="grid3d horizontal" id="grid3d">
				<div class="grid-wrap">
					<div id="gallery-container" class="gridsby infinite-scroll">
                    	
							<?php // Set as Easy Digital Download
							if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_photo_post_method' ) ) ) :
					
								if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_pagination_option', 'option1' ) ) ) :
							
									// Set Ascending
									if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :
						  
										$args = array( 
											'post_type' => 'download', 
											'posts_per_page' => -1, 
											'order' => 'ASC' 
										);	
								
									else :
						
										$args = array( 
											'post_type' => 'download', 
											'posts_per_page' => -1 
										);
							
									endif;
						
								else : 
							
									if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
							
										$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
										$args = array( 
											'post_type' => 'download', 
											'paged' => $paged,
											'posts_per_page' => intval( get_theme_mod( 'gridsby_pagi_photos_length', '15' )),
											'order' => 'ASC' 
										);
								
									else :
							
										$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
										$args = array( 
											'post_type' => 'download', 
											'paged' => $paged,
											'posts_per_page' => intval( get_theme_mod( 'gridsby_pagi_photos_length', '15' ))
										);
							
									endif; 
							
								endif;
						
								// the query
								$gridsby_query = new WP_Query( $args ); 
	
									if ( $gridsby_query->have_posts() ) :
	
										while ( $gridsby_query->have_posts() ) : $gridsby_query->the_post();   
                            	
                            				get_template_part( 'content', 'edd' ); // Easy Digital Download 
                                    
										endwhile; 
	
									endif; 
							
							else :
						
							
								if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_pagination_option', 'option1' ) ) ) : 
							
    								if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
							
    									$args = array( 
											'post_type' => 'post', 
											'posts_per_page' => -1, 
											'order' => 'ASC', 
											'tax_query' =>
											array(
      											'taxonomy' => 'post_format',
      											'field' => 'slug',
      											'terms' => 'post-format-image', 
    										));
								
									else :
							
										$args = array( 
											'post_type' => 'post', 
											'posts_per_page' => -1, 
											'tax_query' => 				
											array(
      											'taxonomy' => 'post_format',
      											'field' => 'slug',
      											'terms' => 'post-format-image',
    										)); 
							
									endif;
								
								else : 
							
									if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
							
										$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    									$args = array( 
											'post_type' => 'post', 
											'paged' => $paged,
											'posts_per_page' => intval( get_theme_mod( 'gridsby_pagi_photos_length', '15' )),
											'order' => 'ASC',
											'tax_query' =>
											array(
      											'taxonomy' => 'post_format',
      											'field' => 'slug',
      											'terms' => 'post-format-image', 
    										));
								
									else :
							
										$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
										$args = array( 
											'post_type' => 'post', 
											'paged' => $paged,
											'posts_per_page' => intval( get_theme_mod( 'gridsby_pagi_photos_length', '15' )),  
											'tax_query' => 				
											array(
      											'taxonomy' => 'post_format',
      											'field' => 'slug',
      											'terms' => 'post-format-image',
    										)); 
							
									endif; 
							
								endif;
							
								// the query
								$gridsby_query = new WP_Query( $args ); 
	
									if ( $gridsby_query->have_posts() ) :
	
										while ( $gridsby_query->have_posts() ) : $gridsby_query->the_post();
                            
                        					get_template_part( 'content', 'pf-image' ); // Post Format Image 
									
										endwhile; 
	
									endif; 
								
							endif; ?> 
                
						</div><!-- gallery-container --> 
					</div><!-- /grid-wrap --> 
        
        		
        			<div class="content">
                    
                    <?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_link_method' ) ) ) : ?>
                	
						<?php // Set as Easy Digital Download
							if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_photo_post_method' ) ) ) :
					
								if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_pagination_option', 'option1' ) ) ) :
							
									// Set Ascending
									if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :
						  
										$args = array( 
											'post_type' => 'download', 
											'posts_per_page' => -1, 
											'order' => 'ASC' 
										);	
								
									else :
						
										$args = array( 
											'post_type' => 'download', 
											'posts_per_page' => -1 
										);
							
									endif;
						
								else : 
							
									if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
							
										$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
										$args = array( 
											'post_type' => 'download', 
											'paged' => $paged,
											'posts_per_page' => intval( get_theme_mod( 'gridsby_pagi_photos_length', '15' )),
											'order' => 'ASC' 
										);
								
									else :
							
										$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
										$args = array( 
											'post_type' => 'download', 
											'paged' => $paged,
											'posts_per_page' => intval( get_theme_mod( 'gridsby_pagi_photos_length', '15' ))
										);
							
									endif; 
							
								endif;
						
								// the query
								$gridsby_query = new WP_Query( $args ); 
	
									if ( $gridsby_query->have_posts() ) :
	
										while ( $gridsby_query->have_posts() ) : $gridsby_query->the_post();   
                            	
                            				get_template_part( 'content', 'edd-lightbox' );
                                    
										endwhile; 
	
									endif; 
							
							else :
						
							
								if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_pagination_option', 'option1' ) ) ) : 
							
    								if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
							
    									$args = array( 
											'post_type' => 'post', 
											'posts_per_page' => -1, 
											'order' => 'ASC', 
											'tax_query' =>
											array(
      											'taxonomy' => 'post_format',
      											'field' => 'slug',
      											'terms' => 'post-format-image', 
    										));
								
									else :
							
										$args = array( 
											'post_type' => 'post', 
											'posts_per_page' => -1, 
											'tax_query' => 				
											array(
      											'taxonomy' => 'post_format',
      											'field' => 'slug',
      											'terms' => 'post-format-image',
    										)); 
							
									endif;
								
								else : 
							
									if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
							
										$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    									$args = array( 
											'post_type' => 'post', 
											'paged' => $paged,
											'posts_per_page' => intval( get_theme_mod( 'gridsby_pagi_photos_length', '15' )),
											'order' => 'ASC',
											'tax_query' =>
											array(
      											'taxonomy' => 'post_format',
      											'field' => 'slug',
      											'terms' => 'post-format-image', 
    										));
								
									else :
							
										$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
										$args = array( 
											'post_type' => 'post', 
											'paged' => $paged,
											'posts_per_page' => intval( get_theme_mod( 'gridsby_pagi_photos_length', '15' )),  
											'tax_query' => 				
											array(
      											'taxonomy' => 'post_format',
      											'field' => 'slug',
      											'terms' => 'post-format-image',
    										)); 
							
									endif; 
							
								endif; 
							
								// the query
								$gridsby_query = new WP_Query( $args ); 
	
									if ( $gridsby_query->have_posts() ) :
	
										while ( $gridsby_query->have_posts() ) : $gridsby_query->the_post();
                            
                        					get_template_part( 'content', 'pf-lightbox' ); // Post Format Image
									
										endwhile; 
	
									endif; 
								
						endif;  
                        
                    // Reset Post Data
					wp_reset_postdata(); ?>
                    
                    
                     <?php else : 
			
					endif; ?> 
                        
					<span class="loading"></span>
                    <span class="icon close-content"> <i class="fa fa-close"></i></span>
                    
				</div><!-- content -->
			</section><!-- grid3d --> 
            
            
            <?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_pagination_option', 'option1' ) ) ) : 
						
						
			else:
				
				if (function_exists("pagination")) { ?> 
                
					<div class="grid grid-pad"> 
                		<div class="col-1-1">
                           
    						<?php pagination( $gridsby_query->max_num_pages ); ?>   
                            
                        </div> 
                    </div>
                    
				<?php } 
						
			endif; ?>
    
       	</main><!-- #main -->
   </div><!-- #primary -->
</div>
    
    
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

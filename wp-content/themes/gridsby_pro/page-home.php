<?php
/**
Template Name: Home Page
 *
 * @package gridsby
 */

get_header(); ?>



	<div class="container home-grid">
      
    	<section class="grid3d horizontal" id="grid3d"> 
			<div class="grid-wrap">
				<div id="gallery-container" class="gridsby infinite-scroll">
                
                <?php $gridsby_post_nav = esc_html( get_theme_mod( 'gridsby_post_nav_terms' )); ?> 
                
                <?php // Activate Home Gallery
				if( get_theme_mod( 'active_home_gallery' ) == '') : ?>
                    
                    <?php // Set as Easy Digital Download
					if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_photo_post_method' ) ) ) :
		
						global $post;
							
							// Set the photo length
							if ( get_theme_mod( 'photos_length' ) ) : 
								
								// Set Ascending
								if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
									$args = array( 
										'post_type' => 'download', 
										'posts_per_page' => get_theme_mod( 'photos_length', '20' ), 
										'order' => 'ASC',
										'cat' => array( $gridsby_post_nav ),
									);
								else :
									$args = array( 
										'post_type' => 'download', 
										'posts_per_page' => get_theme_mod( 'photos_length', '20' ),
										'cat' => array( $gridsby_post_nav ),
									);
								endif;
							 
							else :
								
								// Set Descending
								if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
									$args = array( 'post_type' => 'download', 'posts_per_page' => -1, 'order' => 'ASC' ); 
								else :
									$args = array( 'post_type' => 'download', 'posts_per_page' => -1 );
								endif;
							
							endif; 
						
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :	setup_postdata($post); ?>    
                            	
                            
							<?php get_template_part( 'content', 'edd' ); // Easy Digital Download ?>
                            
                            
						<?php endforeach; ?>
				
                	<?php else :
			
						global $post;
							
							// Set the photo length
							if ( get_theme_mod( 'photos_length' ) ) :
							
								if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
									
									// Set Ascending
									$args = array( 
										'post_type' => 'post', 
										'posts_per_page' => get_theme_mod( 'photos_length', '20' ),
										'cat' => array( $gridsby_post_nav ),
										'order' => 'ASC', 
										'tax_query' => array( 
											array(
      											'taxonomy' => 'post_format',
      											'field' => 'slug',
      											'terms' => 'post-format-image',
    								)));
								
								else :
								
									// Set Descending
									$args = array( 'post_type' => 'post', 'cat' => array( $gridsby_post_nav ), 'posts_per_page' => get_theme_mod( 'photos_length', '20' ), 'tax_query' => 				
									array(
										array(
      									'taxonomy' => 'post_format',
      									'field' => 'slug',
      									'terms' => 'post-format-image',
    								)));
								
								endif;
							
							else :
							
								if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
    							
									// Set Ascending
									$args = array( 
										'post_type' => 'post', 
										'posts_per_page' => -1, 
										'order' => 'ASC',
										'cat' => array( $gridsby_post_nav ),
										'tax_query' => array(
											array(
      											'taxonomy' => 'post_format',
      											'field' => 'slug',
      											'terms' => 'post-format-image',
    								)));
								
								else :
								
									// Set Descending
									$args = array( 'post_type' => 'post', 'cat' => array( $gridsby_post_nav ), 'posts_per_page' => -1, 'tax_query' => 				
									array(
										array(
      									'taxonomy' => 'post_format',
      									'field' => 'slug',
      									'terms' => 'post-format-image', 
    								))); 
								
								endif; 
								
							endif;
							
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :	setup_postdata($post); ?> 
                            
                        	
							<?php get_template_part( 'content', 'pf-image' ); // Post Format Image ?>
                        
        
						<?php endforeach; ?>
					<?php endif; ?> 
				<?php endif; ?> 
                                           
				</div><!-- gallery-container --> 
			</div><!-- /grid-wrap --> 
        
			
            <div class="content">
            
            	<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_link_method' ) ) ) : ?>   
               
			   		<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_photo_post_method' ) ) ) :
                        
						global $post;
							
							if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
    							$args = array( 
									'post_type' => 'download', 
									'posts_per_page' => -1, 
									'order' => 'ASC',
									'cat' => array( $gridsby_post_nav ),
								);	
							else :
								$args = array( 
									'post_type' => 'download', 
									'posts_per_page' => -1,
									'cat' => array( $gridsby_post_nav ),
								);	
							endif;
		
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :	setup_postdata($post); ?>
                            
                			<?php get_template_part( 'content', 'edd-lightbox' ); ?>    
                            
						<?php endforeach; ?> 
                        
            
					<?php else :
					
                        
						global $post;
							
							if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_time_method' ) ) ) :  
								
    							$args = array( 
									'post_type' => 'post', 
									'posts_per_page' => -1, 
									'order' => 'ASC',
									'cat' => array( $gridsby_post_nav ),
									'tax_query' => 				
									array(
										array(
      									'taxonomy' => 'post_format',
      									'field' => 'slug',
      									'terms' => 'post-format-image',
    								)));	
								
							else :
								
								$args = array( 'post_type' => 'post', 'cat' => array( $gridsby_post_nav ), 'posts_per_page' => -1 , 'tax_query' => 				
									array(
										array(
      									'taxonomy' => 'post_format',
      									'field' => 'slug',
      									'terms' => 'post-format-image',
    								)));
								
							endif;  
							
						$myposts = get_posts( $args );  
						foreach( $myposts as $post ) :	setup_postdata($post); ?>
                            
                			<?php get_template_part( 'content', 'pf-lightbox' ); ?>
             
						<?php endforeach; ?>
						
					<?php endif; ?>
                
                <?php else : endif; ?> 
                
            	<span class="loading"></span> 
                <span class="icon close-content"> <i class="fa fa-close"></i></span> 
              
        	</div><!-- content -->
		</section><!-- grid3d -->
    
	</div><!-- /container -->
    
    
    <?php get_template_part( 'content', 'view-all' ); ?>
    
   
    <?php get_template_part( 'content', 'home-widget' ); ?> 
    
    
    <?php if( get_theme_mod( 'active_home_blog' ) == '') : ?>
    
    
    	<section id="home-blog" class="wow fadeIn" data-wow-offset="250" >
    	
    		<div class="grid grid-pad"> 
        		<div class="col-1-1">
            
            		<?php if ( get_theme_mod( 'gridsby_blog_text' ) ) : ?>
            			<h2><?php echo esc_html( get_theme_mod( 'gridsby_blog_text' )); ?></h2> 
                	<?php endif; ?> 
                
            	</div><!-- col-1-1 -->
        	</div><!-- grid -->
    	
        	<div class="grid grid-pad">
    
				<?php
				global $post;
				$args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'tax_query' => array( 
    				array(
      					'taxonomy' => 'post_format',
      					'field' => 'slug',
      					'terms' => 'post-format-image',
      					'operator' => 'NOT IN' 
    			)));
				$myposts = get_posts( $args );
				foreach( $myposts as $post ) :	setup_postdata($post); ?>
				
                <div class="col-1-3">
                	<div class="blog-post">
                               
                        <div class="blog-post-thumbnail" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) , 'full' ); ?>')"></div>
                        
                            <a href="<?php the_permalink(); ?>">
                            	<div class="blog-post-content">
                                	<div class="content-container">
                                    
                                    	<p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
                                        
                                        <?php the_title( '<h4>', '</h4>' ); ?>
                                        
                                        <p><?php $content = get_the_content(); $trimmed_content = wp_trim_words( $content, 15, '...' ); echo $trimmed_content; ?></p>
                                        
                                    </div><!-- content-container -->      
                               	</div><!-- blog-post-content -->           
                            </a><!-- permalink --> 
                                   
                	</div><!-- blog-post -->
        		</div><!-- col-1-3 -->
                	
				<?php endforeach; ?>  
    	
        	</div><!-- grid -->
            
        <?php if ( get_theme_mod( 'gridsby_blog_button_text' ) ) : ?>
    
    		<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">   
            	<button class="gridsby-blog-archive"> 
					<?php echo esc_html( get_theme_mod( 'gridsby_blog_button_text' )); ?>
                </button>
            </a> 
                
		<?php endif; ?>
                        
	
    	</section><!-- home-blog -->
    
    
	<?php endif; ?>
    

<?php get_footer(); ?>

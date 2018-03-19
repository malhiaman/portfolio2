<?php
/**
 * Download Category 
 *
 * @package gridsby
 */

get_header(); ?>


<div class="grid grid-pad">
    
    	<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_category_layout' ) ) ) : ?> 
            
				<div class="col-1-1 content-wrapper"> 
                
            <?php else : ?>
                
                <div class="col-9-12 content-wrapper">
            
            <?php endif; ?>
            
            
		<div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
            
            <?php 
			// Check if there are any posts to display
            if ( have_posts() ) : ?>
            
            	<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_category_title' ) ) ) : ?> 
    
    				<header class="archive-header">
                                
						<h1 class="cat-gallery-title"><?php printf( __( '%s', 'gridsby' ), single_cat_title( '', false ) ); ?></h1>

						<?php
						// Display optional category description 
 						if ( category_description() ) : ?>
								
                    	<div class="archive-meta"><?php echo category_description(); ?></div>
						<?php endif; ?>
                                    
					</header>
    
    			<?php endif; ?>
            
				<section class="grid3d horizontal" id="grid3d">
					<div class="grid-wrap">
                    
                		<div id="gallery-container" class="gridsby infinite-scroll"> 
                  	
                    		<?php while ( have_posts() ) : the_post(); 

								// The Loop 
								if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_link_method' ) ) ) : ?> 
                        
                					<figure class="gallery-image">
                            			<div class="animated fadeIn delay"> 
                                    		<div class="grid-block fade">
                                        		<div class="caption">
                                        			
                                                	<?php get_template_part( 'content', 'hovers' ); ?> 
                                                    
                                        		</div>
                                        		<?php the_post_thumbnail('gridsby-gallery-thumb'); ?>
                                    		</div>
                                		</div>
                            		</figure><!-- gallery-image --> 
                            
                        		<?php else : ?>
                        
                        			<a href="<?php the_permalink(); ?>">
                        				<figure class="gallery-image">
                            				<div class="animated fadeIn delay">
                                    			<div class="grid-block fade">
                                        			<div class="caption">
                                        			
                                                    	<?php get_template_part( 'content', 'hovers' ); ?> 
                                                    
                                        			</div>
                                        			<?php the_post_thumbnail('gridsby-gallery-thumb'); ?>
                                    			</div>
                                			</div>
                            			</figure><!-- gallery-image -->
                            		</a>
                            
                        		<?php endif;	 

							endwhile; ?>
                            
               				
					</div><!-- content -->
                    </div>
                    
               		<div class="content">
         
               		<?php while ( have_posts() ) : the_post(); 
              
			  		if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_link_method' ) ) ) : ?>
            
                      		<div>
                            	<div class="lightbox-content">
                                	
									<div class="dummy-img">
										<?php the_post_thumbnail('gridsby-gallery-full'); ?>
                                    </div>
                                    
                            		<h2 class="dummy-title">
										<?php the_title(); ?>
                                        <div class='share-button share-button-left'></div>
                                    </h2>
                                    
                                	<p>
                                    	<span class="meta-block">
                                        
                                        	<a href="<?php the_permalink(); ?>">
                                        		
                                                <button>
                                            		<i class="fa fa-plus"></i>
												
													<?php if ( get_theme_mod( 'gridsby_more_info' ) ) : ?>
														<?php echo esc_html( get_theme_mod( 'gridsby_more_info', __( 'More Info', 'gridsby' ) )); ?>
													<?php endif; ?>
                                                </button>
                                            </a>
                                            
                                        </span>
                                                
                                		<span class="meta-block">
											<?php echo get_the_term_list( $post->ID, 'download_category', '<i class="fa fa-list"></i> ', ', ', '' ); ?>
                                        </span>
                                        
                                		<span class="meta-block">
                                        	<i class="fa fa-clock-o"></i> <?php the_time( get_option( 'date_format' ) ); ?>
                                        </span> 
                                	</p>
                                    
									<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_lightbox_content', 'option1' ) ) ) : ?> 
                                                        
										<?php the_content(); ?>
                                            
                                    <?php else: ?>
                                             
                                        <?php the_excerpt(); ?> 
                                                            
									<?php endif; ?>  
                                    
                                </div><!-- lightbox-content -->
                                
							</div>
                                
                        
						<?php endif; ?>
                            
					<?php endwhile;  ?>
                        
					<span class="loading"></span>
					
                    <span class="icon close-content">
                    	<i class="fa fa-close"></i>
                    </span>
                    
                    </div>
                
				</section>
    
					<?php the_posts_navigation(); ?> 
					
				<?php else :
		
					get_template_part( 'content', 'none' );
            
            	endif; ?>
            
        	</main><!-- #main -->
    	</div><!-- #primary -->
        
    </div><!-- col -->
            
            
	<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_category_layout' ) ) ) : ?>
            
		
                
	<?php else : ?>
    
    	<?php get_sidebar(); ?>
                
	<?php endif; ?>

</div><!-- grid -->
<?php get_footer(); ?> 

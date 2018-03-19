<?php
/**
Template Name: Home - Slider
 *
 * @package gridsby
 */

get_header(); ?>

<div class="grid grid-pad">
	<div class="col-1-1">
		<section id="home-page-slider" class="home-slider">
        	<div class="hero-slider">
            	
				<?php query_posts( array ( 'post_type' => 'slider', 'posts_per_page' => -1 ) );
                
                while ( have_posts() ) : the_post(); ?> 
                 
                	<div>
                    	<a href="<?php global $post; $text = get_post_meta( $post->ID, '_slide_url', true ); echo $text; ?>">
                    		<div class="slide-content"><?php the_title('<h2>', '</h2>' ); ?></div>
                    	</a>
                    	<?php the_post_thumbnail('slide-thumbnail'); ?>
                	</div>        
                    
            	<?php endwhile; // end of the loop. ?> 
        
        	</div>  
    	</section> 
    </div>
</div>
    
    <?php if( get_theme_mod( 'active_home_widget' ) == '') : ?>
    
    <section id="home-page-cta" class="wow fadeIn" data-wow-offset="250" style="background: url(<?php echo esc_url( get_theme_mod( 'gridsby_new_widget_background' )); ?>) no-repeat;">
        <div class="grid grid-pad"> 
            <div class="col-1-1">
            
            	<div class="gridsby-home-widget-area"> 
            
            		<?php if ( is_active_sidebar('home-widget') ) : ?>
    					<?php dynamic_sidebar('home-widget'); ?>    
    		 		<?php endif; ?>
                
                </div><!-- gridsby-home-widget-area -->
                
            </div><!-- col-1-1 -->
            
            <?php 
				
				$gridsby_int_url = esc_url( get_page_link( get_theme_mod( 'gridsby_widget_button_url' ))); 
				$gridsby_ext_url = esc_url( get_theme_mod( 'gridsby_page_url_text' )); 
                
                if ( get_theme_mod( 'gridsby_widget_button_url' ) ) : ?>
                
                	<div class="col-1-1">
                     
                        <a href="<?php echo $gridsby_int_url ?>"> 
                        	<?php if ( get_theme_mod( 'gridsby_widget_button_text' ) ) : ?> 
                            	<button class="outline white">
									<?php echo esc_html( get_theme_mod( 'gridsby_widget_button_text' )); ?>
                                </button>
							<?php endif; ?>
                        </a>
                        
                    </div><!-- col-1-1 -->
                            
                <?php elseif ( get_theme_mod( 'gridsby_page_url_text' ) ) : ?>
                
                	<div class="col-1-1">
                         
                        <a href="<?php echo $gridsby_ext_url ?>" target="_blank"> 
                        	<?php if ( get_theme_mod( 'gridsby_widget_button_text' ) ) : ?> 
                            	<button class="outline white">
									<?php echo esc_html( get_theme_mod( 'gridsby_widget_button_text' )); ?>
                                </button>
							<?php endif; ?>
                        </a>
                        
                    </div><!-- col-1-1 -->
                        
                <?php else: ?> 
                    
                          
                <?php endif; ?> 
            
        </div><!-- grid -->
    </section><!-- cta --> 
    
    <?php else : ?>  
	<?php endif; ?>
	<?php // end if ?>
    
    <?php if( get_theme_mod( 'active_home_blog' ) == '') : ?>
    
    <section id="home-blog" class="wow fadeIn" data-wow-offset="250" >
    
    	<div class="grid grid-pad"> 
        	<div class="col-1-1">
            
            	<?php if ( get_theme_mod( 'gridsby_blog_text' ) ) : ?>
            		<h2><?php echo esc_html( get_theme_mod( 'gridsby_blog_text' )); ?></h2> 
                <?php endif; ?> 
                
            </div>
        </div>
        
    	<div class="grid grid-pad">
    
						<?php
							global $post;
							$args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'tax_query' => array( 
    							array(
      								'taxonomy' => 'post_format',
      								'field' => 'slug',
      								'terms' => 'post-format-image',
      								'operator' => 'NOT IN' 
    							)
  								));
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :	setup_postdata($post); ?>
				
                			<div class="col-1-3">
                            	<div class="blog-post">
									
                                    <div class="blog-post-thumbnail" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID) , 'full' ); ?>')"></div>
                                    <a href="<?php the_permalink(); ?>">
                                    <div class="blog-post-content">
                                        <div class="content-container">
                                            <p class="date">
												<?php the_time( get_option( 'date_format' ) ); ?>
                                            </p>
                                            <?php the_title( '<h4>', '</h4>' ); ?>
                                            <p><?php $content = get_the_content(); $trimmed_content = wp_trim_words( $content, 15, '...' ); echo $trimmed_content; ?></p>
                                        </div>
                                    </div>
                                    </a>
                                </div>
        					</div>
                	
			<?php endforeach; ?> 
    	</div>
        
        
        <?php if ( get_theme_mod( 'gridsby_blog_button_text' ) ) : ?>
    
    		<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">   
            	<button class="gridsby-blog-archive"> 
					<?php echo esc_html( get_theme_mod( 'gridsby_blog_button_text' )); ?>
                </button>
            </a> 
                
		<?php endif; ?>
        
        
    </section>
    
	<?php endif; ?> 

<?php get_footer(); ?>

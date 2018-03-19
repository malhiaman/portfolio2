<?php
/**
 * @package gridsby
 */
?>

	<?php // Sets animated lightbox
	if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_link_method' ) ) ) : ?> 
					
    	<figure class="gallery-image">
        	<div class="animated fadeIn delay"> 
            	<div class="grid-block fade">
                                        
                	<div class="caption">
                                            
                    	<?php get_template_part( 'content', 'hovers' ); ?>
                                                
                  	</div><!-- caption --> 
                                            
                    <?php the_post_thumbnail('gridsby-gallery-thumb'); ?>
                                            
                </div><!-- grid-block --> 
            </div><!-- animated --> 
        </figure><!-- gallery-image --> 
                                
	<?php // Sets permalink instead of animated lightbox
	
	else : ?>
                                
    <a href="<?php the_permalink(); ?>">
    	<figure class="gallery-image">
        	<div class="animated fadeIn delay">
            	<div class="grid-block fade">
                                            
                	<div class="caption">
                                        		
                    	<?php get_template_part( 'content', 'hovers' ); ?>
                    
                    </div><!-- caption --> 
                                                
                    <?php the_post_thumbnail('gridsby-gallery-thumb'); ?>
                                    		
                </div><!-- grid-block --> 
			</div><!-- animated fadeIn delay --> 
     	</figure><!-- gallery-image -->  
	</a>
                                

<?php endif; ?>

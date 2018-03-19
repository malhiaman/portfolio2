<?php
/**
 * @package gridsby
 */
?>



						<?php if ( has_post_format( 'image' )) { ?>
                        
                        	<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_link_method' ) ) ) : ?> 
							
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
                                
                            <?php else : ?>
                                
                                <a href="<?php the_permalink(); ?>">
                                	<figure class="gallery-image">
                            			<div class="animated fadeIn delay">
                                    		<div class="grid-block fade">
                                            
                                        		<div class="caption">
                                              
                                        			<?php get_template_part( 'content', 'hovers' ); ?>
                                        		
                                                </div><!-- caption -->
                                                
												<?php the_post_thumbnail( 'gridsby-gallery-thumb' ); ?> 
                                                
                                    		</div><!-- grid-block -->
                                		</div><!-- animated fadeIn delay -->
                            		</figure><!-- gallery-image -->
                                </a>
                                
                           <?php endif; ?>

  						<?php } ?>

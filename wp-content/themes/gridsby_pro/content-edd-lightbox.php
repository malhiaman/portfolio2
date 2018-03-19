<?php
/**
 * @package gridsby
 */
?>


	
    						<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_post_link_method' ) ) ) : ?>
                              
                            	<div>
                            		<div class="lightbox-content">
									
                                    	<div class="dummy-img"><?php the_post_thumbnail('gridsby-gallery-full'); ?></div>
                            	
                                			<h2 class="dummy-title"><?php the_title(); ?><div class='share-button share-button-left'></div></h2>
                                			
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
                                            	</span><!-- meta-block -->
                                            
                                				<span class="meta-block">
													<?php echo get_the_term_list( $post->ID, 'download_category', '<i class="fa fa-list"></i> ', ', ', '' ); ?>
                                            	</span><!-- meta-block -->
                                
                                				<span class="meta-block">
                                            		<i class="fa fa-clock-o"></i> <?php the_time( get_option( 'date_format' ) ); ?>
                                            	</span> <!-- meta-block -->
                                            
                                			</p> 
                                            
									
										<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_lightbox_content', 'option1' ) ) ) : ?> 
                                                        
											<?php the_content(); ?> 
                                            
                                        <?php else: ?>
                                             
                                            <?php the_excerpt(); ?> 
                                                            
										<?php endif; ?>
									
                                
                                	</div><!-- lightbox-content -->
								</div>
                            
							<?php endif; ?>
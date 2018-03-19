<?php 
												
	$hover_content = get_theme_mod( 'gridsby_hover_content', 'option1' );
    													
    switch ( $hover_content ) { 
  	case 'option1': 
       	
        if ( get_theme_mod( 'gridsby_hover_content_icon' ) ) : ?> 
		
		<i class="fa <?php echo esc_html( get_theme_mod( 'gridsby_hover_content_icon' )); ?>"></i>
		
		<?php else: ?>  
            									
    	<i class="fa fa-plus"></i> 
        
        <?php 
		
		endif;
                								
	break;
  	case 'option2': ?>
                                                    
 		<?php echo the_title( '<h3>', '</h3>' ); 
		
	break;
    case 'option3': ?>
                                                    
    	<h3><?php echo esc_html( get_theme_mod( 'gridsby_hover_content_text' )); ?></h3> 
                	
    <?php break;
	case 'option4': 
	
	break;
	case 'option5': 
	
		the_excerpt(); 
		
	
	break;
        
		}
    											
	?> 
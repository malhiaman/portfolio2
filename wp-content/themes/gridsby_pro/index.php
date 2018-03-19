<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package gridsby
 */

get_header(); ?>

<div class="grid grid-pad">
	
    <?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_archive_post_full' ) ) ) : ?>

		<div class="col-9-12 content-wrapper">
	
	<?php else : ?>
    
    	<div class="col-1-1 content-wrapper"> 
        
    <?php endif; ?>
    
    
        <div id="primary" class="content-area blog-archive">
            <main id="main" class="site-main" role="main">
    
            <?php if ( have_posts() ) : ?>
    			
                <?php /* Start the Loop */ ?>
                
                <?php  while ( have_posts() ) : the_post(); ?>
       
                   <?php
                        /* Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );
                    ?>
    
                <?php endwhile; ?>

			<?php the_posts_navigation(); ?> 
    
            <?php else : ?>
    
                <?php get_template_part( 'content', 'none' ); ?>
    
            <?php endif; ?>
    
            </main><!-- #main -->
        </div><!-- #primary -->
        
	
    <?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_archive_post_full' ) ) ) : ?>

		</div>
	
	<?php else : ?>
    
    	</div>
        
    <?php endif; ?>
    
    
	<?php if ( 'option1' == gridsby_sanitize_index_content( get_theme_mod( 'gridsby_archive_post_full' ) ) ) : ?>

		<?php get_sidebar(); ?>
	
	<?php else : ?>
    
   
        
    <?php endif; ?>
    
    
</div>
<?php get_footer(); ?>

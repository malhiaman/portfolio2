<?php
/**
 * The template for displaying archive pages.
 *
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
    
        <section id="primary" class="content-area blog-archive">
            <main id="main" class="site-main" role="main">
    
            <?php if ( have_posts() ) : ?>
          
    
                <header class="page-header">
                    <h1 class="page-title">
                        <?php
                            if ( is_category() ) :
                                single_cat_title();
    
                            elseif ( is_tag() ) :
                                single_tag_title();
    
                            elseif ( is_author() ) :
                                printf( __( 'Author: %s', 'gridsby' ), '<span class="vcard">' . get_the_author() . '</span>' );
    
                            elseif ( is_day() ) :
                                printf( __( 'Day: %s', 'gridsby' ), '<span>' . get_the_date() . '</span>' );
    
                            elseif ( is_month() ) :
                                printf( __( 'Month: %s', 'gridsby' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'gridsby' ) ) . '</span>' );
    
                            elseif ( is_year() ) :
                                printf( __( 'Year: %s', 'gridsby' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'gridsby' ) ) . '</span>' );
    
                            elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
                                _e( 'Asides', 'gridsby' );
    
                            elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
                                _e( 'Galleries', 'gridsby' );
    
                            elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
                                _e( 'Images', 'gridsby' );
    
                            elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
                                _e( 'Videos', 'gridsby' );
    
                            elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
                                _e( 'Quotes', 'gridsby' );
    
                            elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
                                _e( 'Links', 'gridsby' );
    
                            elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
                                _e( 'Statuses', 'gridsby' );
    
                            elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
                                _e( 'Audios', 'gridsby' );
    
                            elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
                                _e( 'Chats', 'gridsby' );
    
                            else :
                                _e( 'Archives', 'gridsby' );
    
                            endif;
                        ?>
                    </h1>
                    <?php
                        // Show an optional term description.
                        $term_description = term_description();
                        if ( ! empty( $term_description ) ) :
                            printf( '<div class="taxonomy-description">%s</div>', $term_description );
                        endif;
                    ?>
                </header><!-- .page-header -->
    
                <?php /* Start the Loop */ ?>
                       
                <?php while ( have_posts() ) : the_post(); ?>
                
      
                 
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
        </section><!-- #primary -->
	
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

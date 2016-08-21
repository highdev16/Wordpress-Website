<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage veterans
 * @since veterans 1.0
 */

get_header(); ?>
              

              
		 

     <div id="container">
         
           <div class="container-left"><?php get_sidebar(); ?></div>
           
			<div class="container-right">
                            <div id="content" role="main">
<?php if ( have_posts() ) : ?>
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'veterans' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'veterans' ); ?></h2>
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'veterans' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
<?php endif; ?>

			</div><!-- #content -->
                        </div><!--container-right-->
           
            <?php dynamic_sidebar('container_links_section') ?>
		</div><!-- #container -->


<?php get_footer(); ?>

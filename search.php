<?php 
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sol
 */

get_header(); 
?>
  <div class="content-area">
    <main>
      <div class="container">
        <div class="row">
          
          <h1><?php esc_html_e( 'Search results for', 'sol' ); ?>: <?php echo get_search_query(); ?></h1>
          
          <?php 

            get_search_form();

            // If there are any posts
            if( have_posts() ):
                
              // Load posts loop
              while( have_posts() ): the_post();
                get_template_part( 'template-parts/content', 'search');
              endwhile;
              the_posts_pagination( array(
                'prev_text'   => esc_html__( 'Previous', 'sol' ),
                  'next_text' => esc_html__( 'Next', 'sol' )
              ));
              else:
          ?>
            <p><?php esc_html_e( 'There are no results for your query.', 'sol' ); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </main>
  </div>

<?php get_footer(); ?>
   
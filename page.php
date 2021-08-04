<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sol
 */

get_header(); 
?>
    <div class="content-area">
      <main>
        <div class="container">
          <div class="row">
            <?php  
                // Load posts loop
                while( have_posts() ): the_post();
                  get_template_part( 'template-parts/content', 'page' );
                endwhile;  
            ?>
          </div>
        </div>
      </main>
    </div>

<?php get_footer(); ?>
   
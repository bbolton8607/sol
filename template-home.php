<?php 
/*
Template Name: Home Page
*/

get_header();
?>
<div class="content-area">
      <main>
        <section class="slider" data-type="background" data-speed="2">
          <div class="flexslider">
            <ul class="slides">
              <?php 
              // Getting data from the customizer to display the Slider Section
              for ($i=1; $i < 4; $i++) :
                  $slider_page[$i]              = get_theme_mod( 'set_slider_page' . $i );
                  $slider_button_text[$i]       = get_theme_mod( 'set_slider_button_text' . $i );
                  $slider_button_url[$i]        = get_theme_mod( 'set_slider_button_url' . $i );
              endfor;
              
              $args = array(
                  'post_type'      => 'page',
                  'posts_per_page' => 3,
                  'post__in'       => $slider_page,
                  'orderby'        => 'post__in',
              );

              $slider_loop = new WP_query( $args );
              $j = 1;
              if( $slider_loop->have_posts() ):
                while( $slider_loop->have_posts() ):
                  $slider_loop->the_post();

              ?>
              <li>
                <?php the_post_thumbnail( 'sol-slider', array( 'class' => 'img-fluid') ); ?>
                <div class="container">
                  <div class="slider-details-container">
                    <div class="slider-title">
                      <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="slider-description">
                      <div class="subtitle"><?php the_content(); ?></div>
                      <a href="<?php echo esc_url( $slider_button_url[$j] ); ?>" class="link"><?php echo esc_html( $slider_button_text[$j] ); ?></a>
                    </div>
                  </div>
                </div>
              </li>
              <?php
              $j++;
              endwhile;
              wp_reset_postdata();
              endif;  
              ?>
            </ul>
          </div>
        </section>

        <?php if( class_exists( 'WooCommerce' ) ): ?>
        <section class="popular-products">
          <?php
          $popular_limit        = get_theme_mod( 'set_popular_max_num', 4 );
          $popular_col          = get_theme_mod( 'set_popular_max_col', 4 );
          $arrivals_limit       = get_theme_mod( 'set_new_arrivals_max_num', 4 );
          $arrivals_col         = get_theme_mod( 'set_new_arrivals_max_col', 4 );
          ?>
          <div class="container">
            <div class="section-title">
              <h2><?php echo esc_html( get_theme_mod( 'set_popular_title', __( 'Popular Products', 'sol' ) ) ); ?></h2>
            </div>
            <?php echo do_shortcode( '[products limit=" ' . esc_attr( $popular_limit ) . ' " columns=" ' . esc_attr( $popular_col ) . ' " orderby="popularity"]' ); ?> 
          </div>
        </section>

        <section id="home-icons" class="py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 mb-4 text-center">
                <img src="<?php echo esc_url( get_theme_mod( 'set_home_icon_img1' ) ); ?>" alt="" class="mb-3">
                <h3><?php echo esc_html( get_theme_mod( 'set_home_icon_title1', __( 'Free Shipping', 'sol' ) ) ); ?></h3>
                <h4><?php echo esc_html( get_theme_mod( 'set_home_icon_sub_title1', __( 'Orders over $99', 'sol' ) ) ); ?></h4>
                <p><?php echo esc_html( get_theme_mod( 'set_home_icon_desc1', __( 'Description', 'sol' ) ) ); ?></p>
              </div>
              <div class="col-lg-3 col-md-6 mb-4 text-center">
              <img src="<?php echo esc_url( get_theme_mod( 'set_home_icon_img2' ) ); ?>" alt="" class="mb-3">
                <h3><?php echo esc_html( get_theme_mod( 'set_home_icon_title2', __( 'Secured Payments', 'sol' ) ) ); ?></h3>
                <h4><?php echo esc_html( get_theme_mod( 'set_home_icon_sub_title2', __( 'Safe & Fast', 'sol' ) ) ); ?></h4>
                <p><?php echo esc_html( get_theme_mod( 'set_home_icon_desc2', __( 'Description', 'sol' ) ) ); ?></p>
              </div>
              <div class="col-lg-3 col-md-6 mb-4 text-center">
              <img src="<?php echo esc_url( get_theme_mod( 'set_home_icon_img3' ) ); ?>" alt="" class="mb-3">
                <h3><?php echo esc_html( get_theme_mod( 'set_home_icon_title3', __( 'Free Returns', 'sol' ) ) ); ?></h3>
                <h4><?php echo esc_html( get_theme_mod( 'set_home_icon_sub_title3', __( 'Easy & Free', 'sol' ) ) ); ?></h4>
                <p><?php echo esc_html( get_theme_mod( 'set_home_icon_desc3', __( 'Description', 'sol' ) ) ); ?></p>
              </div>
              <div class="col-lg-3 col-md-6 mb-4 text-center">
                <img src="<?php echo esc_url( get_theme_mod( 'set_home_icon_img4' ) ); ?>" alt="" class="mb-3">
                <h3><?php echo esc_html( get_theme_mod( 'set_home_icon_title4', __( 'Customer Support', 'sol' ) ) ); ?></h3>
                <h4><?php echo esc_html( get_theme_mod( 'set_home_icon_sub_title4', __( 'Need Assistance?', 'sol' ) ) ); ?></h4>
                <p><?php echo esc_html( get_theme_mod( 'set_home_icon_desc4', __( 'Description', 'sol' ) ) ); ?></p>
              </div>
            </div>
          </div>
        </section>

        <section class="new-arrivals">
          <div class="container">
            <div class="section-title">
              <h2><?php echo esc_html( get_theme_mod( 'set_new_arrivals_title', __( 'New Arrivals', 'sol' ) ) ); ?></h2>
            </div>
            <?php echo do_shortcode( '[products limit=" ' . esc_attr( $arrivals_limit ) . ' " columns=" ' . esc_attr( $arrivals_col ) . ' " orderby="date"]' ); ?>
          </div>
        </section>
        <?php

        // Getting data from Customizer to display the Deal of the Week section
        $showdeal         = get_theme_mod( 'set_deal_show', 0 );
        $deal             = get_theme_mod( 'set_deal' );
        $currency         = get_woocommerce_currency_symbol();
        $regular          = get_post_meta( $deal, '_regular_price', true );
        $sale             = get_post_meta( $deal, '_sale_price', true );

        // We'll only show this section if the user chooses to do so and if some deal product is set
        if( $showdeal == 1 && ( !empty( $deal ) ) ):
          $discount_percentage = absint( 100 - ( ( $sale/$regular ) * 100 ) );
        ?>
        <section class="deal-of-the-week">
          <div class="container">
            <div class="section-title"> 
              <h2><?php echo esc_html( get_theme_mod( 'set_deal_title', __( 'Deal of the Week', 'sol' ) ) ); ?></h2>
            </div> 
              <div class="row d-flex align-items-center">
                <div class="deal-img col-md-6 col-12 ml-auto text-center">
                  <?php echo get_the_post_thumbnail( $deal, 'large', array( 'class' => 'img-fluid') ); ?>
                </div>
                <div class="deal-desc col-md-4 col-12 mr-auto text-center">
                <?php if( !empty( $sale ) ): ?>
                  <span class="discount">
                    <?php echo esc_html( $discount_percentage ) . esc_html__( '% OFF', 'sol' ); ?>
                  </span>
                  <?php endif; ?>
                  <h3>
                    <a href="<?php echo esc_url( get_permalink( $deal ) ); ?>"><?php echo esc_html( get_the_title( $deal ) ); ?></a>
                  </h3>
                  <p><?php echo get_the_excerpt( $deal ); ?></p>
                  <div class="prices">
                    <span class="regular">
                      <?php
                      echo esc_html( $currency );
                      echo esc_html( $regular );
                      ?>
                    </span>
                    <?php if( !empty( $sale ) ): ?>
                    <span class="sale">
                      <?php
                      echo esc_html( $currency );
                      echo esc_html( $sale );
                      ?>
                    </span>
                    <?php endif; ?>
                  </div>
                  <a href="<?php echo esc_url( '?add-to-cart=' . $deal ); ?>" class="add-to-cart"><?php esc_html_e( 'Add to Cart', 'sol' ); ?></a>
                </div>
              </div>
          </div>
        </section>
        <?php endif; ?> <!-- End $showdeal/$deal verification -->

        <?php endif; ?> <!-- End class_exists for WooCommerce -->


        <section class="lab-blog">
          <div class="container">
            <div class="section-title">
              <h2><?php echo esc_html( get_theme_mod( 'set_blog_title', __( 'News From Our Blog', 'sol' ) ) ); ?></h2>
            </div>
            <div class="row">
              <?php 

              $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 2,
              );

              $blog_posts = new WP_Query( $args );

                // If there are any posts
                if( $blog_posts->have_posts() ): 
                  
                  // Load posts loop
                  while( $blog_posts->have_posts() ): $blog_posts->the_post();
                    ?>
                      <article class="col-12 col-md-6">
                        <a href="<?php the_permalink(); ?>">
                          <?php
                            if( has_post_thumbnail() ):
                              the_post_thumbnail( 'sol-blog', array( 'class' => 'img-fluid' ) );
                            endif;
                          ?>
                        </a>
                        <h3>
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="excerpt"><?php the_excerpt(); ?></div>
                      </article>
                    <?php  
                  endwhile;
                  wp_reset_postdata();
                else:
              ?>
                <p><?php esc_html_e( 'Nothing to display.', 'sol' ); ?></p>
              <?php endif; ?>
            </div>
          </div>
        </section>
        
        <section class="cust-reviews pt-4">
          <div class="container">
           
            <div class="section-title pb-2">
              <h2><?php echo esc_html( get_theme_mod( 'set_cust_reviews_title', __( 'Customer Reviews', 'sol' ) ) ); ?></h2>
            </div>
                
            <div class="row pb-5">
              <div class="col-lg-4 ">
                <img src="<?php echo esc_url( get_theme_mod( 'set_cust_reviews_quote_img' ) ); ?>" alt="" class="pb-2"> 
                <p><?php echo esc_html( get_theme_mod( 'set_cust_review_desc1', __( 'Customer Review goes here.', 'sol' ) ) ); ?></p>
                <h5 class="pt-3 text-right pr-4 pb-3"><?php echo esc_html( get_theme_mod( 'set_cust_review_customer1', __( 'John Smith', 'sol' ) ) ); ?></h5>
              </div>
              <div class="col-lg-4 ">
                <img src="<?php echo esc_url( get_theme_mod( 'set_cust_reviews_quote_img' ) ); ?>" alt="" class="pb-2">
                <p><?php echo esc_html( get_theme_mod( 'set_cust_review_desc2', __( 'Customer Review goes here.', 'sol' ) ) ); ?></p>
                <h5 class="pt-3 text-right pr-4 pb-3"><?php echo esc_html( get_theme_mod( 'set_cust_review_customer2', __( 'John Smith', 'sol' ) ) ); ?></h5>
              </div>
              <div class="col-lg-4 ">
                <img src="<?php echo esc_url( get_theme_mod( 'set_cust_reviews_quote_img' ) ); ?>" alt="" class="pb-2">
                <p><?php echo esc_html( get_theme_mod( 'set_cust_review_desc3', __( 'Customer Review goes here.', 'sol' ) ) ); ?></p>
                <h5 class="pt-3 text-right pr-4 pb-3"><?php echo esc_html( get_theme_mod( 'set_cust_review_customer3', __( 'John Smith', 'sol' ) ) ); ?></h5>
              </div>
            </div>       
          </div>  
        </section>

      </main>
    </div>

<?php get_footer(); ?>
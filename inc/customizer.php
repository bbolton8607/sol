<?php

/**
 *  Sol Theme Customizer
 * 
 *  @package Sol
 */

 function sol_customizer( $wp_customize ){

    // Copyright Section

    $wp_customize->add_section(
      'sec_copyright', array(
        'title'       => __( 'Copyright Settings', 'sol' ),
        'description' => __( 'Copyright Section', 'sol' )
      )
    );

    // Field 1 - Copyright Text Box
    $wp_customize->add_setting(
      'set_copyright', array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_copyright', array(
        'label'         => __( 'Copyright', 'sol' ),
        'description'   => __( 'Please, add your copyright information here', 'sol' ),
        'section'       => 'sec_copyright',
        'type'          => 'text'
      )
    );

  /*--------------------------------------------------------------------------------------------------*/
  // SLIDER SECTION

  $wp_customize->add_section(
		'sec_slider', array(
			'title'			  => __( 'Slider Settings', 'sol' ),
			'description'	=> __( 'Slider Section', 'sol' )
		)
	);

    // Field 1 - Slider Page #1

    $wp_customize->add_setting(
      'set_slider_page1', array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'absint'
      )
    );

    $wp_customize->add_control(
      'set_slider_page1', array(
        'label'         => __( 'Set slider page 1', 'sol' ),
        'description'   => __( 'Set slider page 1', 'sol' ),
        'section'       => 'sec_slider',
        'type'          => 'dropdown-pages'
      )
    );

    // Field 2 - Slider Button Text #1

    $wp_customize->add_setting(
      'set_slider_button_text1', array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_slider_button_text1', array(
        'label'         => __( 'Button Text for Page 1', 'sol' ),
        'description'   => __( 'Button Text for Page 1', 'sol' ),
        'section'       => 'sec_slider',
        'type'          => 'text'
      )
    );

    // Field 3 - Slider Button URL #1

    $wp_customize->add_setting(
      'set_slider_button_url1', array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
      )
    );

    $wp_customize->add_control(
      'set_slider_button_url1', array(
        'label'         => __( 'URL for Page 1', 'sol' ),
        'description'   => __( 'URL for Page 1', 'sol' ),
        'section'       => 'sec_slider',
        'type'          => 'url'
      )
    );

    /*-------------------------------------------------*/

    // Field 4 - Slider Page #2

    $wp_customize->add_setting(
      'set_slider_page2', array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'absint'
      )
    );

    $wp_customize->add_control(
      'set_slider_page2', array(
        'label'         => __( 'Set slider page 2', 'sol' ),
        'description'   => __( 'Set slider page 2', 'sol' ),
        'section'       => 'sec_slider',
        'type'          => 'dropdown-pages'
      )
    );

    // Field 5 - Slider Button Text #2

    $wp_customize->add_setting(
      'set_slider_button_text2', array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_slider_button_text2', array(
        'label'         => __( 'Button Text for Page 2', 'sol' ),
        'description'   => __( 'Button Text for Page 2', 'sol' ),
        'section'       => 'sec_slider',
        'type'          => 'text'
      )
    );

    // Field 6 - Slider Button URL #2

    $wp_customize->add_setting(
      'set_slider_button_url2', array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
      )
    );

    $wp_customize->add_control(
      'set_slider_button_url2', array(
        'label'         => __( 'URL for Page 2', 'sol' ),
        'description'   => __( 'URL for Page 2', 'sol' ),
        'section'       => 'sec_slider',
        'type'          => 'url'
      )
    );

    /*---------------------------------------------------------*/

    // Field 7 - Slider Page #3

    $wp_customize->add_setting(
      'set_slider_page3', array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'absint'
      )
    );

    $wp_customize->add_control(
      'set_slider_page3', array(
        'label'         => __( 'Set slider page 3', 'sol' ),
        'description'   => __( 'Set slider page 3', 'sol' ),
        'section'       => 'sec_slider',
        'type'          => 'dropdown-pages'
      )
    );

    // Field 8 - Slider Button Text #3

    $wp_customize->add_setting(
      'set_slider_button_text3', array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_slider_button_text3', array(
        'label'         => __( 'Button Text for Page 3', 'sol' ),
        'description'   => __( 'Button Text for Page 3', 'sol' ),
        'section'       => 'sec_slider',
        'type'          => 'text'
      )
    );

    // Field 9 - Slider Button URL #3

    $wp_customize->add_setting(
      'set_slider_button_url3', array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw'
      )
    );

    $wp_customize->add_control(
      'set_slider_button_url3', array(
        'label'         => __( 'URL for Page 3', 'sol' ),
        'description'   => __( 'URL for Page 3', 'sol' ),
        'section'       => 'sec_slider',
        'type'          => 'url'
      )
    );

    /*--------------------------------------------------------------------------------------------------*/
  // HOME PAGE SETTINGS

  $wp_customize->add_section(
    'sec_home_page', array(
      'title'       => __( 'Home Page Products and Blog Settings', 'sol' ),
      'description' => __( 'Home Page Section', 'sol' )
    )
  );

  	// We're gonna show the following options if WooCommerce is active
		if( class_exists( 'WooCommerce' )):

    // Field 1 - Popular Products Title
    $wp_customize->add_setting(
      'set_popular_title', array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_popular_title', array(
        'label'         => __( 'Popular Products Title', 'sol' ),
        'description'   => __( 'Popular Products Title', 'sol' ),
        'section'       => 'sec_home_page',
        'type'          => 'text'
      )
    );

    // Field 2 - Popular Products Limit
    $wp_customize->add_setting(
      'set_popular_max_num', array(
        'type'					      => 'theme_mod',
        'default'				      => '',
        'sanitize_callback'		=> 'absint'
      )
    );

    $wp_customize->add_control(
      'set_popular_max_num', array(
        'label'			  => __( 'Popular Products Max Number', 'sol' ),
        'description'	=> __( 'Popular Products Max Number', 'sol' ),
        'section'		  => 'sec_home_page',
        'type'			  => 'number'
      )
    );

    // Field 3 - Popular Products Columns
			$wp_customize->add_setting(
				'set_popular_max_col', array(
					'type'					      => 'theme_mod',
					'default'				      => '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_popular_max_col', array(
					'label'		  	=> __( 'Popular Products Max Columns', 'sol' ),
					'description'	=> __( 'Popular Products Max Columns', 'sol' ),
					'section'		  => 'sec_home_page',
					'type'			  => 'number'
				)
			);

/*---------------------------------------------------------------------------------------*/
			// Field 4 - New Arrivals Title
			$wp_customize->add_setting(
				'set_new_arrivals_title', array(
					'type' 				      => 'theme_mod',
					'default' 			    => '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_title', array(
					'label' 		    => __( 'New Arrivals Title', 'sol' ),
					'description' 	=> __( 'New Arrivals Title', 'sol' ),
					'section' 		  => 'sec_home_page',
					'type' 			    => 'text'
				)
			);

			// Field 5 - New Arrivals Limit
			$wp_customize->add_setting(
				'set_new_arrivals_max_num', array(
					'type'					      => 'theme_mod',
					'default'				      => '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_num', array(
					'label'			  => __( 'New Arrivals Max Number', 'sol' ),
					'description'	=> __( 'New Arrivals Max Number', 'sol' ),
					'section'		  => 'sec_home_page',
					'type'			  => 'number'
				)
			);

			// Field 6 - New Arrivals Columns
			$wp_customize->add_setting(
				'set_new_arrivals_max_col', array(
					'type'					      => 'theme_mod',
					'default'				      => '',
					'sanitize_callback'		=> 'absint'
				)
			);

			$wp_customize->add_control(
				'set_new_arrivals_max_col', array(
					'label'			  => __( 'New Arrivals Max Columns', 'sol' ),
					'description'	=> __( 'New Arrivals Max Columns', 'sol' ),
					'section'		  => 'sec_home_page',
					'type'			  => 'number'
				)
			);
      

      /*---------------------------------------------------------------------------------------*/
			// Field 7 - Deal of the Week Title
			$wp_customize->add_setting(
				'set_deal_title', array(
					'type' 				      => 'theme_mod',
					'default' 			    => '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_deal_title', array(
					'label' 		    => __( 'Deal of the Week Title', 'sol' ),
					'description' 	=> __( 'Deal of the Week Title', 'sol' ),
					'section' 		  => 'sec_home_page',
					'type' 			    => 'text'
				)
			);

      // Deal of the Week Checkbox

      $wp_customize->add_setting(
        'set_deal_show', array(
          'type'              => 'theme_mod',
          'default'           => '',
          'sanitize_callback' => 'sol_sanitize_checkbox'
        )
      );

      $wp_customize->add_control(
				'set_deal_show', array(
					'label'			=> __( 'Show Deal of the Week?', 'sol' ),
					'section'		=> 'sec_home_page',
					'type'			=> 'checkbox'
				)
			);

      // Deal of the Week Product ID

      $wp_customize->add_setting(
        'set_deal', array(
          'type'              => 'theme_mod',
          'default'           => '',
          'sanitize_callback' => 'absint'
        )
      );

      $wp_customize->add_control(
				'set_deal', array(
					'label'			  => __( 'Deal of the Week Product ID', 'sol' ),
					'description'	=> __( 'Product ID to Display', 'sol' ),
					'section'		  => 'sec_home_page',
					'type'			  => 'number'
				)
			);

    endif; // End Class Exists WooCommerce

    /*---------------------------------------------------------------------------------------*/
    // Field 10 - Blog Title
    
			$wp_customize->add_setting(
				'set_blog_title', array(
					'type' 				      => 'theme_mod',
					'default' 			    => '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_blog_title', array(
					'label' 		    => __( 'Blog Section Title', 'sol' ),
					'description' 	=> __( 'Blog Section Title', 'sol' ),
					'section' 		  => 'sec_home_page',
					'type' 			    => 'text'
				)
      );		
      
      
    /*---------------------------------------------------------------------------------------*/
    // Field 11 - Home Icon Banner

    $wp_customize->add_section(
      'sec_home_icon', array(
        'title'       => __( 'Home Icon Section', 'sol' ),
        'description' => __( 'Home Icon Section', 'sol' )
      )
    );

    // Home Icon Banner - Box 1

    $wp_customize->add_setting(
      'set_home_icon_img1', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'set_home_icon_img1', array(
      'label' 		    => __( 'Home Icon Image #1', 'sol' ),
      'description' 	=> __( 'Set Icon Image Here', 'sol' ),
      'section' 		  => 'sec_home_icon',
  ))
  );

    $wp_customize->add_setting(
      'set_home_icon_title1', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_home_icon_title1', array(
        'label' 		    => __( 'Home Icon Title #1', 'sol' ),
        'description' 	=> __( 'Write Title Here', 'sol' ),
        'section' 		  => 'sec_home_icon',
        'type' 			    => 'text'
      )
    );	

    $wp_customize->add_setting(
      'set_home_icon_sub_title1', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_home_icon_sub_title1', array(
        'label' 		    => __( 'Home Icon Sub Title #1', 'sol' ),
        'description' 	=> __( 'Write Sub Title Here', 'sol' ),
        'section' 		  => 'sec_home_icon',
        'type' 			    => 'text'
      )
    );	

    $wp_customize->add_setting(
      'set_home_icon_desc1', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    
    $wp_customize->add_control(
      'set_home_icon_desc1', array(
        'label' 		    => __( 'Home Icon Description #1', 'sol' ),
        'description' 	=> __( 'Write Description Here', 'sol' ),
        'section' 		  => 'sec_home_icon',
        'type' 			    => 'text'
      )
    );	
    
    // Home Icon Banner - Box 2

    $wp_customize->add_setting(
      'set_home_icon_img2', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'set_home_icon_img2', array(
      'label' 		    => __( 'Home Icon Image #2', 'sol' ),
      'description' 	=> __( 'Set Icon Image Here', 'sol' ),
      'section' 		  => 'sec_home_icon',
  ))
  );

    $wp_customize->add_setting(
      'set_home_icon_title2', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_home_icon_title2', array(
        'label' 		    => __( 'Home Icon Title #2', 'sol' ),
        'description' 	=> __( 'Write Title Here', 'sol' ),
        'section' 		  => 'sec_home_icon',
        'type' 			    => 'text'
      )
    );	

    $wp_customize->add_setting(
      'set_home_icon_sub_title2', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_home_icon_sub_title2', array(
        'label' 		    => __( 'Home Icon Sub Title #2', 'sol' ),
        'description' 	=> __( 'Write Sub Title Here', 'sol' ),
        'section' 		  => 'sec_home_icon',
        'type' 			    => 'text'
      )
    );	

    $wp_customize->add_setting(
      'set_home_icon_desc2', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    
    $wp_customize->add_control(
      'set_home_icon_desc2', array(
        'label' 		    => __( 'Home Icon Description #2', 'sol' ),
        'description' 	=> __( 'Write Description Here', 'sol' ),
        'section' 		  => 'sec_home_icon',
        'type' 			    => 'text'
      )
    );	
    
    // Home Icon Banner - Box 3

    $wp_customize->add_setting(
      'set_home_icon_img3', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'set_home_icon_img3', array(
      'label' 		    => __( 'Home Icon Image #3', 'sol' ),
      'description' 	=> __( 'Set Icon Image Here', 'sol' ),
      'section' 		  => 'sec_home_icon',
  ))
  );

    $wp_customize->add_setting(
      'set_home_icon_title3', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_home_icon_title3', array(
        'label' 		    => __( 'Home Icon Title #3', 'sol' ),
        'description' 	=> __( 'Write Title Here', 'sol' ),
        'section' 		  => 'sec_home_icon',
        'type' 			    => 'text'
      )
    );	

    $wp_customize->add_setting(
      'set_home_icon_sub_title3', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_home_icon_sub_title3', array(
        'label' 		    => __( 'Home Icon Sub Title #3', 'sol' ),
        'description' 	=> __( 'Write Sub Title Here', 'sol' ),
        'section' 		  => 'sec_home_icon',
        'type' 			    => 'text'
      )
    );	

    $wp_customize->add_setting(
      'set_home_icon_desc3', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    
    $wp_customize->add_control(
      'set_home_icon_desc3', array(
        'label' 		    => __( 'Home Icon Description #3', 'sol' ),
        'description' 	=> __( 'Write Description Here', 'sol' ),
        'section' 		  => 'sec_home_icon',
        'type' 			    => 'text'
      )
    );
    
    // Home Icon Banner - Box 4

    $wp_customize->add_setting(
      'set_home_icon_img4', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'transport'         => 'refresh',
        'height'            => 250,
        'width'             => 250
      )
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'set_home_icon_img4', array(
        'label' 		    => __( 'Home Icon Image #4', 'sol' ),
        'description' 	=> __( 'Set Icon Image Here', 'sol' ),
        'section' 		  => 'sec_home_icon',
    ))
    );	

    $wp_customize->add_setting(
      'set_home_icon_title4', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_home_icon_title4', array(
        'label' 		    => __( 'Home Icon Title #4', 'sol' ),
        'description' 	=> __( 'Write Title Here', 'sol' ),
        'section' 		  => 'sec_home_icon',
        'type' 			    => 'text'
      )
    );
    
    $wp_customize->add_setting(
      'set_home_icon_sub_title4', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_home_icon_sub_title4', array(
        'label' 		    => __( 'Home Icon Sub Title #4', 'sol' ),
        'description' 	=> __( 'Write Sub Title Here', 'sol' ),
        'section' 		  => 'sec_home_icon',
        'type' 			    => 'text'
      )
    );	

    $wp_customize->add_setting(
      'set_home_icon_desc4', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    
    $wp_customize->add_control(
      'set_home_icon_desc4', array(
        'label' 		    => __( 'Home Icon Description #4', 'sol' ),
        'description' 	=> __( 'Write Description Here', 'sol' ),
        'section' 		  => 'sec_home_icon',
        'type' 			    => 'text'
      )
    );
    
    /*---------------------------------------------------------------------------------------*/
    // Field 11 - Customer Reviews

    // SET CUSTOMER REVIEW SECTION TITLE 

    $wp_customize->add_section(
      'sec_cust_reviews', array(
        'title'       => __( 'Customer Reviews Section', 'sol' ),
        'description' => __( 'Customer Reviews Section', 'sol' )
      )
    );

    $wp_customize->add_setting(
      'set_cust_reviews_title', array(
        'type'              => 'theme_mod',
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_cust_reviews_title', array(
        'label' 		    => __( 'Customer Reviews Title', 'sol' ),
        'description' 	=> __( 'Customize Title Here', 'sol' ),
        'section' 		  => 'sec_cust_reviews',
        'type' 			    => 'text'
      )
    );

    // SET CUSTOMER REVIEW QUOTATION IMAGES
    
    $wp_customize->add_setting(
      'set_cust_reviews_quote_img', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'set_cust_reviews_quote_img', array(
      'label' 		    => __( 'Quotation Marks', 'sol' ),
      'description' 	=> __( 'Set Quotation Marks Image Here', 'sol' ),
      'section' 		  => 'sec_cust_reviews',
  ))
  );

    // Set Customer Reviews Quotes / Description #1

    $wp_customize->add_setting(
      'set_cust_review_desc1', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_cust_review_desc1', array(
        'label' 		    => __( 'Customer Quotes #1', 'sol' ),
        'description' 	=> __( 'Enter Customer Quotes Here', 'sol' ),
        'section' 		  => 'sec_cust_reviews',
        'type' 			    => 'text'
      )
    );

    $wp_customize->add_setting(
      'set_cust_review_customer1', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    
    $wp_customize->add_control(
      'set_cust_review_customer1', array(
        'label' 		    => __( 'Customer Name #1', 'sol' ),
        'description' 	=> __( 'Enter Customer Name Here', 'sol' ),
        'section' 		  => 'sec_cust_reviews',
        'type' 			    => 'text'
      )
    );

    // Set Customer Reviews Quotes / Description #2

    $wp_customize->add_setting(
      'set_cust_review_desc2', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_cust_review_desc2', array(
        'label' 		    => __( 'Customer Quotes #2', 'sol' ),
        'description' 	=> __( 'Enter Customer Quotes Here', 'sol' ),
        'section' 		  => 'sec_cust_reviews',
        'type' 			    => 'text'
      )
    );

    $wp_customize->add_setting(
      'set_cust_review_customer2', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    
    $wp_customize->add_control(
      'set_cust_review_customer2', array(
        'label' 		    => __( 'Customer Name #2', 'sol' ),
        'description' 	=> __( 'Enter Customer Name Here', 'sol' ),
        'section' 		  => 'sec_cust_reviews',
        'type' 			    => 'text'
      )
    );

    // Set Customer Reviews Quotes / Description #3

    $wp_customize->add_setting(
      'set_cust_review_desc3', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'set_cust_review_desc3', array(
        'label' 		    => __( 'Customer Quotes #3', 'sol' ),
        'description' 	=> __( 'Enter Customer Quotes Here', 'sol' ),
        'section' 		  => 'sec_cust_reviews',
        'type' 			    => 'text'
      )
    );

    $wp_customize->add_setting(
      'set_cust_review_customer3', array(
        'type' 				      => 'theme_mod',
        'default' 			    => '',
        'sanitize_callback' => 'sanitize_text_field'
      )
    );
    
    $wp_customize->add_control(
      'set_cust_review_customer3', array(
        'label' 		    => __( 'Customer Name #3', 'sol' ),
        'description' 	=> __( 'Enter Customer Name Here', 'sol' ),
        'section' 		  => 'sec_cust_reviews',
        'type' 			    => 'text'
      )
    );

    

    
      
 }

 add_action( 'customize_register', 'sol_customizer' );

 function sol_sanitize_checkbox( $checked ){
  return ( ( isset ( $checked ) && true == $checked ) ? true : false );
 }
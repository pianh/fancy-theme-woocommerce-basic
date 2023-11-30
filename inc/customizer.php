<?php 
/**
 * Fany Lab Theme Customizer
 *
 * @package Fancy Lab
 */

function fancy_lab_customizer( $wp_customize ){

	// Copyright Section

	$wp_customize->add_section( 
		'sec_copyright', array(
			'title' 		=> __( 'Copyright Settings', 'fancy-lab'),
			'description' 	=> __( 'Copyright Section', 'fancy-lab' )
		)
	);

			// Field 1 - Copyright Text Box
			$wp_customize->add_setting(
				'set_copyright', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_copyright', array(
					'label' 		=> __( 'Copyright', 'fancy-lab' ),
					'description' 	=> __( 'Please, add your copyright information here', 'fancy-lab' ),
					'section' 		=> 'sec_copyright',
					'type' 			=> 'text'
				)
			);

	/*---------------------------------------------------------------------------------------*/
	// Slider Section
    $wp_customize->add_section( 
		'sec_slider', array(
			'title' 		=> __( 'Slider Settings'),
			'description' 	=> __( 'Slider Settings')
		)
	); 
            // Field 1 - Slider Page Number 1
            $wp_customize->add_setting(
				'set_slider_page1', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page1', array(
					'label' 		=> __( 'Set slider page 1' ),
					'description' 	=> __( 'Set slider page 1' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'dropdown-pages'
				)
			);
            // Field 2 - Slider Button Text Number 1
            $wp_customize->add_setting(
				'set_slider_button_text1', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text1', array(
					'label' 		=> __( 'Button Text for Page 1' ),
					'description' 	=> __( 'Button Text for Page 1' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'text'
				)
			);
            // Field 3 - Slider Button URL Text Number 1
            $wp_customize->add_setting(
				'set_slider_button_url1', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url1', array(
					'label' 		=> __( 'URL for Page 1' ),
					'description' 	=> __( 'URL for Page 1' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'url'
				)
			);
            /*---------------------------------*/
            // Field 4 - Slider Page Number 2
            $wp_customize->add_setting(
				'set_slider_page2', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page2', array(
					'label' 		=> __( 'Set slider page 2' ),
					'description' 	=> __( 'Set slider page 2' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'dropdown-pages'
				)
			);
            // Field 5 - Slider Button Text Number 2
            $wp_customize->add_setting(
				'set_slider_button_text2', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text2', array(
					'label' 		=> __( 'Button Text for Page 2' ),
					'description' 	=> __( 'Button Text for Page 2' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'text'
				)
			);
            // Field 6 - Slider Button URL Text Number 2
            $wp_customize->add_setting(
				'set_slider_button_url2', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url2', array(
					'label' 		=> __( 'URL for Page 2' ),
					'description' 	=> __( 'URL for Page 2' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'url'
				)
			);
            /*---------------------------------*/
            // Field 7 - Slider Page Number 3
            $wp_customize->add_setting(
				'set_slider_page3', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);

			$wp_customize->add_control(
				'set_slider_page3', array(
					'label' 		=> __( 'Set slider page 3' ),
					'description' 	=> __( 'Set slider page 3' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'dropdown-pages'
				)
			);
            // Field 8 - Slider Button Text Number 3
            $wp_customize->add_setting(
				'set_slider_button_text3', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_text3', array(
					'label' 		=> __( 'Button Text for Page 3' ),
					'description' 	=> __( 'Button Text for Page 3' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'text'
				)
			);
            // Field 9 - Slider Button URL Text Number 3
            $wp_customize->add_setting(
				'set_slider_button_url3', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'esc_url_raw'
				)
			);

			$wp_customize->add_control(
				'set_slider_button_url3', array(
					'label' 		=> __( 'URL for Page 3' ),
					'description' 	=> __( 'URL for Page 3' ),
					'section' 		=> 'sec_slider',
					'type' 			=> 'url'
				)
			);
	/*---------------------------------------------------------------------------------------*/
	// Home page Setting
    $wp_customize->add_section( 
		'sec_home_page', array(
			'title' 		=> __( 'Home Page Products and Blog Settings'),
			'description' 	=> __( 'Home Page Section')
		)
	); 
		//Feild 1 - Popular Products Title
		$wp_customize->add_setting(
				'set_popular_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);
			$wp_customize->add_control(
				'set_popular_title', array(
					'label' 		=> __( 'Popular Products Section Title' ),
					'description' 	=> __( 'Popular Products Section Title' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);
			// Feild 2 - Popular Product limit
            $wp_customize->add_setting(
				'set_popular_max_num', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);
			$wp_customize->add_control(
				'set_popular_max_num', array(
					'label' 		=> ( 'Popular Products Max Number' ),
					'description' 	=> ( 'Popular Products Max Number' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'number'
				)
			);
			$wp_customize->add_setting(
				'set_popular_max_col', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);
			$wp_customize->add_control(
				'set_popular_max_col', array(
					'label' 		=> ( 'Popular Products Max Columns' ),
					'description' 	=> ( 'Popular Products Max Columns' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'number'
				)
			);

			/* --------------------------- */
			// Feild 4: New Arrivals Title
			$wp_customize->add_setting(
				'set_new_arrivals_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);
			$wp_customize->add_control(
				'set_new_arrivals_title', array(
					'label' 		=> __( 'New Arrivals Section Title' ),
					'description' 	=> __( 'New Arrivals Section Title' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);
			// Feild 5: New Arrivals Limit
			$wp_customize->add_setting(
				'set_new_arrivals_max_num', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);
			$wp_customize->add_control(
				'set_new_arrivals_max_num', array(
					'label' 		=> ( 'New Arrivals Max Number' ),
					'description' 	=> ( 'New Arrivals Max Number' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'number'
				)
			);
			$wp_customize->add_setting(
				'set_new_arrivals_max_col', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);
			$wp_customize->add_control(
				'set_new_arrivals_max_col', array(
					'label' 		=> ( 'New Arrivals Max Columns' ),
					'description' 	=> ( 'New Arrivals Max Columns' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'number'
				)
			);

			/* --------------------------- */
			// Feild 7: Deal of the week Title
			$wp_customize->add_setting(
				'set_deal_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);
			$wp_customize->add_control(
				'set_deal_title', array(
					'label' 		=> __( 'Deal of the Week Title' ),
					'description' 	=> __( 'Deal of the Week Title' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

			// Field 8 - Deal of the Week Checkbox
			$wp_customize->add_setting(
				'set_deal_show', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'fancy_lab_sanitize_checkbox' //See below
				)
			);

			$wp_customize->add_control(
				'set_deal_show', array(
					'label' 	=> __( 'Show Deal of the Week?', 'fancy-lab' ),
					'section' 	=> 'sec_home_page',
					'type' 		=> 'checkbox'			
				)
			);

			// Feild 9: Deal of product ID
			$wp_customize->add_setting(
				'set_deal', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'absint'
				)
			);
			$wp_customize->add_control(
				'set_deal', array(
					'label' 		=> __( 'Deal of the Week Product ID', 'fancy-lab' ),
					'description' 	=> __( 'Product ID to Display','fancy-lab' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'number'
				)
			);
			// Feild 10: Blog Title
			$wp_customize->add_setting(
				'set_blog_title', array(
					'type' 				=> 'theme_mod',
					'default' 			=> '',
					'sanitize_callback' => 'sanitize_text_field'
				)
			);
			$wp_customize->add_control(
				'set_blog_title', array(
					'label' 		=> __( 'Blog Section Title' ),
					'description' 	=> __( 'Blog Section Title' ),
					'section' 		=> 'sec_home_page',
					'type' 			=> 'text'
				)
			);

}
add_action( 'customize_register', 'fancy_lab_customizer' );

function fancy_lab_sanitize_checkbox( $checked ){
    //returns true if checkbox is checked
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
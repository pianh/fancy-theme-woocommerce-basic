<?php

    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
    require_once get_template_directory() . '/inc/customizer.php';
        function load_assets() {
            // Bootstrap javascript and css files
        wp_enqueue_style("bootstrapcss", get_theme_file_uri('/inc/bootstrap.min.css'), array(), "1.0", "all");
        wp_enqueue_style("awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), "1.0", "all");
        // Main css file
        wp_enqueue_style("csscustom", get_theme_file_uri('/assets/css/style.css'), array(), "1.0.2", "all");
        // Goole Font
        wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Seaweed+Script&display=swap");
        
        wp_enqueue_script("bootstrap", get_theme_file_uri() . '/inc/bootstrap.min.js', array('jquery'), "5.0.0", true);
        wp_enqueue_script("flexslider-jquery", get_theme_file_uri() . '/inc/flexslider/jquery.flexslider-min.js', array('jquery'), "5.0.0", true);
        wp_enqueue_style("flexslidercss", get_theme_file_uri('/inc/flexslider/flexslider.css'), array(), "1.0.2", "all");
        wp_enqueue_script("jquery-js", get_theme_file_uri() . '/inc/flexslider/flexslider.js', array('jquery'), "5.0.0", true);
        // wp_enqueue_script("index", get_theme_file_uri() . '/build/index.js', array('jquery'), '1.0.2', true);
        // wp_localize_script("index", 'smartEduData', array('root_url' => get_site_url()));
    }
    add_action("wp_enqueue_scripts", "load_assets");

    function fancy_lab_config() {
        // Register navigation menus
        register_nav_menus(
            array(
                'fancy_lab_main_menu'   => 'Fancy Lab Main Menu',
                'fancy_lab_footer_menu' => 'Fancy Lab Footer Menu',
            )
        );

        // Add theme support for WooCommerce
        add_theme_support( 'woocommerce', array(
            'thumbnail_image_width' => 255,
            'single_image_width'    => 255,
            'product_grid'          => array(
                'default_rows'    => 10,
                'min_rows'        => 5,
                'max_rows'        => 10,
                'default_columns' => 1,
                'min_columns'     => 1,
                'max_columns'     => 1,
            ),
	    ) );
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        add_theme_support('custom-logo', array(
             	'height'               => 85,
		        'width'                => 160,
		        'flex-height'          => true,
		        'flex-width'           => true,
          ));
        
        add_theme_support('post-thumbnails');  
        
        // Config image  
        add_image_size( 'fancy-lab-slider', 1920, 800, array( 'center', 'center' ) );
        add_image_size( 'fancy-lab-blog', 960, 540, array( 'center', 'center' ) );
        if ( ! isset( $content_width ) ) {
	        $content_width = 600;
        }
        add_theme_support('title-tag');
    }
    // Hook the fancy_lab_config function to the after_setup_theme action
    add_action('after_setup_theme', 'fancy_lab_config', 0);

    if(class_exists('WooCommerce')) {
        require get_template_directory() . '/inc/wc-modifications.php';
    }

    /**
     * Show cart contents / total Ajax
     */
    add_filter( 'woocommerce_add_to_cart_fragments', 'fancy_lab_woocommerce_header_add_to_cart_fragment' );

    function fancy_lab_woocommerce_header_add_to_cart_fragment( $fragments ) {
        global $woocommerce;

        ob_start();

        ?>
        <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
        <?php
        $fragments['span.items'] = ob_get_clean();
        return $fragments;
    }

    add_action('widgets_init', 'fancy_lab_sidebars');
    function fancy_lab_sidebars(){
        register_sidebar(
            array(
                'name' => 'Fancy Lab Main Sidebar',
                'id' => 'fancy-lab-sidebar-1',
                'description' => 'Drag and drop your widgets here',
                'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
        ));
        register_sidebar(
            array(
                'name' => 'Sidebar Shop',
                'id' => 'fancy-lab-sidebar-shop',
                'description' => 'Drag and drop your WooCommerce widgets here',
                'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
        ));
        register_sidebar(
            array(
                'name' => 'Footer Sidebar 1',
                'id' => 'fancy-lab-sidebar-footer1',
                'description' => 'Drag and drop your widgets here',
                'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
        ));
        register_sidebar(
            array(
                'name' => 'Footer Sidebar 2',
                'id' => 'fancy-lab-sidebar-footer2',
                'description' => 'Drag and drop your widgets here',
                'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
        ));
        register_sidebar(
            array(
                'name' => 'Footer Sidebar 3',
                'id' => 'fancy-lab-sidebar-footer3',
                'description' => 'Drag and drop your widgets here',
                'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
        ));
    }

?>

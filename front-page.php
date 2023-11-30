<?php
get_header();
?>
    <div class="content-area">
        <main>
            <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <?php
                                for ($i=0; $i < 4; $i++) :
                                    $slider_page[$i] = get_theme_mod('set_slider_page' . $i);
                                    $slider_button_text[$i] = get_theme_mod('set_slider_button_text' . $i);
                                    $slider_button_url[$i] = get_theme_mod('set_slider_button_url' . $i);
                                    # code...  
                                endfor;
                                $args = array(
                                    'post_type' => 'page',
                                    'posts_per_page' => 3,
                                    'post__in' => $slider_page,
                                    'orderby' => 'post__in'
                                );
                                $slider_loop = new WP_Query($args);
                                $j=1;
                                if ($slider_loop->have_posts()):
                                    while($slider_loop->have_posts()):
                                        $slider_loop->the_post();
                            ?>
                            <li>
                                <?php the_post_thumbnail('fancy-lab-slider', array(
                                    'class' => 'img-fluid'
                                )) ?>
                                <div class="container">
                                    <div class="slider-details-container">
                                        <div class="slider-title">
                                            <h1><?php the_title(); ?></h1>
                                        </div>
                                        <div class="slider-description">
                                            <div class="subtitle"><?php the_content(); ?></div>
                                            <a class="link" href="<?php echo $slider_button_url[$j] ?>"><?php echo $slider_button_text[$j]; ?></a>
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

            <?php if(class_exists('WooCommerce')): ?>
                <section class="popular-products">
                    <?php
                        $popular_limit = get_theme_mod('set_popular_max_num', 4);
                        $popular_column = get_theme_mod('set_popular_max_col', 4); 
                        $arrivals_limit = get_theme_mod('set_new_arrivals_max_num', 4);
                        $arrivalsr_column = get_theme_mod('set_new_arrivals_max_col', 4); 
                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="section-title">
                                <h2><?php echo get_theme_mod('set_popular_title', 'Popular products'); ?></h2>
                            </div>
                            <?php echo do_shortcode('[products limit=" '.$popular_limit.' " columns="'.$popular_column.'" orderby="popularity"]') ?> 
                        </div>
                    </div>
                </section>
                <section class="new-arrivals">
                    <div class="container">
                        <div class="section-title">
                            <h2><?php echo get_theme_mod('set_new_arrivals_title', 'New arrivals products'); ?></h2>
                        </div>
                        <?php echo do_shortcode('[products limit="'.$arrivals_limit.'" columns="'.$arrivalsr_column.'" orderby="date"]') ?>
                    </div>
                </section>
                <section class="deal-of-the-week">
                    <?php
                    $showdeal 				= get_theme_mod( 'set_deal_show', 0 );
                    $deal 					= get_theme_mod( 'set_deal' ); //Get id 
                    $currency 				= get_woocommerce_currency_symbol();
                    $regular 				= floatval(get_post_meta( $deal, '_regular_price', true));
                    $sale 					= floatval(get_post_meta( $deal, '_sale_price', true));
                        if( $showdeal == 1 && (!empty ($deal)) ) :
                            $discount_percentage 	= absint( 100 - ( absint( $sale/$regular ) * 100) );
                    ?>
                    <div class="container">
                        <div class="section-title">
                            <h2><?php echo get_theme_mod('set_deal_title', 'Deal of the Week'); ?></h2>
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="deal-img col-md-6 col-12 text-center ml-auto">
                                <?php echo get_the_post_thumbnail( $deal, 'large', array( 'class' => 'img-fluid' ) ); ?>
                            </div>
                            <div class="deal-desc col-md-4 col-12 text-center mr-auto">
                                <?php if(!empty( $sale )): ?>
                                <span class="discount">
                                    <?php echo $discount_percentage . '% OFF'; ?>
                                </span>
                                <?php endif; ?>
                                <h3>
                                    <a href="<?php get_permalink($deal) ?>"><?php echo get_the_title($deal) ?></a>
                                </h3>
                                <p><?php echo get_the_excerpt($deal); ?></p>
                                <div class="prices">
                                    <span class="regular">
                                        <?php 
                                        echo $currency;
                                        echo $regular;
                                        ?>
                                    </span>
                                    <span class="sale">
                                        <?php
                                        echo $currency;
                                        echo $sale;
                                        ?>
                                    </span>
                                </div>
                                <a href="<?php echo esc_url('?add-to-cart=' . $deal); ?>" class="add-to-cart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </section>
                <?php endif; ?> <!-- End $showdeal/$deal verification -->
            <?php endif; ?><!-- End class_exists for WooCommerce -->
            <section class="lab-blog">
                <div class="container">
                    <div class="section-title">
                        <h2><?php echo get_theme_mod('set_blog_title', 'News From Our Blog'); ?></h2>
                    </div>
                    <div class="row">
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 2
                            );
                            $blog_posts = new WP_Query($args);
                            if($blog_posts->have_posts()):
                            while($blog_posts->have_posts()) : $blog_posts->the_post();
                                ?>
                                <article class="col-12 col-md-6">
                                    <a href="<?php the_permalink() ?>">
                                        <?php
                                            if(has_post_thumbnail()) :
                                                the_post_thumbnail('fancy-lab-blog', array('class' => 'img-fluid'));
                                            endif;
                                        ?>
                                    </a>
                                    <h3>
                                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                    </h3>
                                    <p class="excerpt"><?php the_excerpt(); ?></p>
                                </article>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                            else:
                                ?>
                                <p>Nothing to display</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </main>
    </div>

<?php
get_footer()
?>
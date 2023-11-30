<?php
get_header();
?>
    <div class="content-area">
        <main>
            <section class="slider">
                <div class="container">
                    <div class="row">slider</div>
                </div>
            </section>
            <section class="popular-products">
                <div class="container">
                    <div class="row">popular-products</div>
                </div>
            </section>
            <section class="new-arrivals">
                <div class="container">
                    <div class="row">new-arrivals</div>
                </div>
            </section>
            <section class="deal-of-the-week">
                <div class="container">
                    <div class="row">deal-of-the-week</div>
                </div>
            </section>
            <section class="lab-blog">
                <div class="container">
                    <div class="row">
                        <?php
                            if(have_posts()):
                            while(have_posts()) : the_post();
                                get_template_part( 'template-parts/content','page' );
                            endwhile;
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
<?php
/**
 * Template for displaying search forms in Fancy Lab
 *
 * @package Fancy Lab
 */
?>

<article class="col" style="padding: 0">
    <h1><?php the_title() ?></h1>
    <p><?php the_content(); ?></p>
    <?php
        if(comments_open() || get_comments_number()):
            comments_template();
            // comments_template('/something.php');
        endif;
    ?>
</article>
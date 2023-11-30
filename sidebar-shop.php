<?php
/**
 * Template for the sidebar in Fancy Lab
 *
 * @package Fancy Lab
 */
?>
<?php if ( is_active_sidebar('fancy-lab-sidebar-shop')): ?>
    <?php dynamic_sidebar('fancy-lab-sidebar-shop'); ?>
<?php endif; ?>
<?php 
/**
 * The template for the sidebar containing the shop widget area
 * 
 * @package Sol
 */
?>

<?php if( is_active_sidebar( 'sol-sidebar-shop' ) ): ?>
    <?php dynamic_sidebar( 'sol-sidebar-shop' ); ?>
<?php endif;
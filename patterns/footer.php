<?php
/**
 * Title: フッター
 * Slug: noya/footer
 * Categories: footer
 * 
 */
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|space-lg","bottom":"var:preset|spacing|space-lg"}}},"backgroundColor":"key","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-key-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--space-lg);padding-bottom:var(--wp--preset--spacing--space-lg)">
    <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} /-->
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Copyright © <?php echo date('Y');?> <?php bloginfo('name'); ?> All Rights Reserved.</p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
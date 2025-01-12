<?php
/**
 * Title: サイドバー用カテゴリー
 * Slug: noya/sidebar-category
 * Categories: about
 * 
 */
?>

<!-- wp:group {"className":"sidebar-categories","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group sidebar-categories" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|space-lg","bottom":"0"},"padding":{"top":"0","bottom":"0"},"blockGap":"8px"},"position":{"type":""},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"horizontal"}} -->
    <div class="wp-block-group" style="min-height:0px;margin-top:var(--wp--preset--spacing--space-lg);margin-bottom:0;padding-top:0;padding-bottom:0">
        <!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"0","left":"0"}},"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"24px","letterSpacing":"4px"}}} -->
        <p style="margin-right:0;margin-left:0;font-size:24px;font-style:normal;font-weight:700;letter-spacing:4px">CATEGORY</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#737373"}}},"color":{"text":"#737373"}},"fontSize":"font-xs"} -->
        <p class="has-text-color has-link-color has-font-xs-font-size" style="color:#737373">カテゴリー</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|key"}}}},"backgroundColor":"base","textColor":"key","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-key-color has-base-background-color has-text-color has-background has-link-color" style="border-radius:8px;margin-top:0;margin-bottom:0">
        <!-- wp:categories {"showPostCounts":true,"showEmpty":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|space-xs","bottom":"var:preset|spacing|space-xs","left":"var:preset|spacing|space-md","right":"var:preset|spacing|space-md"},"margin":{"top":"0"}}}} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
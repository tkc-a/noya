<?php
/**
 * Title: page
 * Slug: noya/page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"header"} /-->

<!-- wp:columns {"className":"shadow-xxs","style":{"color":{"background":"#f5f6f7"},"spacing":{"padding":{"top":"var:preset|spacing|space-xl","bottom":"var:preset|spacing|space-xl","left":"var:preset|spacing|space-xl","right":"var:preset|spacing|space-xl"},"margin":{"top":"0","bottom":"0"}}}} -->
<div id="container" class="wp-block-columns shadow-xxs has-background"
    style="background-color:#f5f6f7;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--space-xl);padding-right:var(--wp--preset--spacing--space-xl);padding-bottom:var(--wp--preset--spacing--space-xl);padding-left:var(--wp--preset--spacing--space-xl)">
    <!-- wp:column {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|space-xl","bottom":"var:preset|spacing|space-xl","left":"var:preset|spacing|space-xl","right":"var:preset|spacing|space-xl"}}},"backgroundColor":"base"} -->
    <div class="wp-block-column has-base-background-color has-background"
        style="border-radius:8px;padding-top:var(--wp--preset--spacing--space-xl);padding-right:var(--wp--preset--spacing--space-xl);padding-bottom:var(--wp--preset--spacing--space-xl);padding-left:var(--wp--preset--spacing--space-xl)">
        <!-- wp:post-date {"format":"Y年n月j日","displayType":"modified"} /-->

        <!-- wp:post-title {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

        <!-- wp:post-featured-image {"aspectRatio":"16/9","style":{"border":{"radius":"8px"}}} /-->

        <!-- wp:post-content /-->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"360px"} -->
    <div class="wp-block-column" style="flex-basis:360px">
        <!-- wp:search {"label":"検索","showLabel":false,"placeholder":"キーワードを入力..","buttonText":"検索","style":{"border":{"radius":"4px"}}} /-->

        <!-- wp:group {"metadata":{"categories":["about"],"patternName":"sidebar-profile","name":"サイドバー用プロフィール"},"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|space-md","bottom":"var:preset|spacing|space-md","left":"var:preset|spacing|space-md","right":"var:preset|spacing|space-md"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-base-background-color has-background"
            style="border-radius:8px;padding-top:var(--wp--preset--spacing--space-md);padding-right:var(--wp--preset--spacing--space-md);padding-bottom:var(--wp--preset--spacing--space-md);padding-left:var(--wp--preset--spacing--space-md)">
            <!-- wp:image {"width":"128px","height":"128px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-image-border-circle"} -->
            <figure class="wp-block-image aligncenter size-full is-resized is-style-image-border-circle"><img
                    style="object-fit:cover;width:128px;height:128px" /></figure>
            <!-- /wp:image -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|space-sm","bottom":"0","left":"0","right":"0"}}},"fontSize":"font-md"} -->
            <p class="has-font-md-font-size"
                style="margin-top:var(--wp--preset--spacing--space-sm);margin-right:0;margin-bottom:0;margin-left:0">
                tkc.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"color":{"text":"#737373"},"elements":{"link":{"color":{"text":"#737373"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
            <p class="has-text-color has-link-color"
                style="color:#737373;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">
                自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"top"} -->
                <div class="wp-block-columns are-vertically-aligned-top">
                    <!-- wp:column {"verticalAlignment":"top","width":"40px","layout":{"type":"default"}} -->
                    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40px">
                        <!-- wp:image {"width":"40px","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-image-border-circle"} -->
                        <figure class="wp-block-image size-thumbnail is-resized is-style-image-border-circle">
                            <img　style="width:40px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"top","width":"40px"} -->
                    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40px">
                        <!-- wp:image {"width":"40px","sizeSlug":"thumbnail","linkDestination":"none","align":"center","className":"is-style-image-border-circle"} -->
                        <figure
                            class="wp-block-image aligncenter size-thumbnail is-resized is-style-image-border-circle">
                            <img style="width:40px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"top","width":"40px"} -->
                    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40px">
                        <!-- wp:image {"width":"40px","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-image-border-circle"} -->
                        <figure class="wp-block-image size-thumbnail is-resized is-style-image-border-circle"><img
                                style="width:40px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"metadata":{"categories":["about"],"patternName":"sidebar-category","name":"サイドバー用カテゴリー"},"className":"sidebar-categories","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"center"}} -->
        <div class="wp-block-group sidebar-categories"
            style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0">
            <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|space-lg","bottom":"0"},"padding":{"top":"0","bottom":"0"},"blockGap":"8px"},"position":{"type":""},"dimensions":{"minHeight":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"horizontal"}} -->
            <div class="wp-block-group"
                style="min-height:0px;margin-top:var(--wp--preset--spacing--space-lg);margin-bottom:0;padding-top:0;padding-bottom:0">
                <!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"0","left":"0"}},"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"24px","letterSpacing":"4px"}}} -->
                <p
                    style="margin-right:0;margin-left:0;font-size:24px;font-style:normal;font-weight:700;letter-spacing:4px">
                    CATEGORY</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#737373"}}},"color":{"text":"#737373"}},"fontSize":"font-xs"} -->
                <p class="has-text-color has-link-color has-font-xs-font-size" style="color:#737373">カテゴリー</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|key"}}}},"backgroundColor":"base","textColor":"key","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-key-color has-base-background-color has-text-color has-background has-link-color"
                style="border-radius:8px;margin-top:0;margin-bottom:0">
                <!-- wp:categories {"showPostCounts":true,"showEmpty":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|space-xs","bottom":"var:preset|spacing|space-xs","left":"var:preset|spacing|space-md","right":"var:preset|spacing|space-md"},"margin":{"top":"0"}}}} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"footer"} /-->
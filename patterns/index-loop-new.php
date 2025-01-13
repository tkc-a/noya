<?php
/**
 * Title: 新着記事ループ
 * Slug: noya/index-loop-new
 * Categories: archive
 * 
 */
?>

<!-- wp:columns {"style":{"spacing":{"padding":{"right":"var:preset|spacing|space-xl","left":"var:preset|spacing|space-xl","top":"var:preset|spacing|space-lg","bottom":"var:preset|spacing|space-lg"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#f5f6f7"}}} -->
<div class="wp-block-columns has-background" id="index-loop-new" style="background-color:#f5f6f7;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--space-lg);padding-right:var(--wp--preset--spacing--space-xl);padding-bottom:var(--wp--preset--spacing--space-lg);padding-left:var(--wp--preset--spacing--space-xl)">
    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- wp:group {"metadata":{"categories":["archive"],"patternName":"index-loop-new","name":"新着記事ループ"},"style":{"color":{"background":"#f5f6f7"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-background" style="background-color:#f5f6f7;margin-top:0;margin-bottom:0">
            <!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","metadata":{"categories":["posts"],"patternName":"core/query-medium-posts","name":"左に画像"},"className":"content-main-columns alignwide","layout":{"type":"default"}} -->
            <main class="wp-block-query content-main-columns alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|space-sm"}},"layout":{"type":"default"}} -->
                <!-- wp:columns {"align":"wide","className":"content-main-column shadow-xs opacity","style":{"spacing":{"padding":{"top":"var:preset|spacing|space-sm","bottom":"var:preset|spacing|space-sm","left":"var:preset|spacing|space-sm","right":"var:preset|spacing|space-sm"},"margin":{"top":"0","bottom":"0"},"blockGap":{"top":"0","left":"0"}},"border":{"radius":"8px"}},"backgroundColor":"base"} -->
                <div class="wp-block-columns alignwide content-main-column shadow-xs opacity has-base-background-color has-background" style="border-radius:8px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--space-sm);padding-right:var(--wp--preset--spacing--space-sm);padding-bottom:var(--wp--preset--spacing--space-sm);padding-left:var(--wp--preset--spacing--space-sm)">
                    <!-- wp:column {"width":"240px","className":"content-main-column-image","style":{"spacing":{"blockGap":"0"}}} -->
                    <div class="wp-block-column content-main-column-image" style="flex-basis:240px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"100%","style":{"border":{"radius":"8px"}}} /--></div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"100%","className":"content-main-column-box","style":{"spacing":{"padding":{"left":"var:preset|spacing|space-sm"}}}} -->
                    <div class="wp-block-column content-main-column-box" style="padding-left:var(--wp--preset--spacing--space-sm);flex-basis:100%">
                        <!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0.6rem","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|key"}}},"typography":{"fontSize":"20px","lineHeight":1.6000000000000001}},"textColor":"key"} /-->
                        <!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":80,"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"#737373"}}},"color":{"text":"#737373"},"typography":{"lineHeight":1.6000000000000001}}} /-->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
                <!-- /wp:post-template -->

                <!-- wp:query-pagination {"paginationArrow":"chevron","showLabel":false} -->
                <!-- wp:query-pagination-previous /-->

                <!-- wp:query-pagination-numbers /-->

                <!-- wp:query-pagination-next /-->
                <!-- /wp:query-pagination -->
            </main>
            <!-- /wp:query -->
        </div>
        <!-- /wp:group -->
    </div>
<!-- /wp:column -->
</div>
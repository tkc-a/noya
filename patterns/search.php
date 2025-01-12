<?php
/**
 * Title: search
 * Slug: noya/search
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"header"} /-->

<!-- wp:columns {"style":{"color":{"background":"#f5f6f7"},"spacing":{"padding":{"top":"var:preset|spacing|space-xl","bottom":"var:preset|spacing|space-xl"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns has-background"
    style="background-color:#f5f6f7;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--space-xl);padding-bottom:var(--wp--preset--spacing--space-xl)">
    <!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|space-lg","left":"0","right":"0"}},"border":{"radius":"8px"}}} -->
    <div class="wp-block-column"
        style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--space-lg);padding-left:0">
        <!-- wp:group {"tagName":"main","className":"site-content","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|4-xl","bottom":"var:preset|spacing|4-xl"}}}} -->
        <main class="wp-block-group site-content"
            style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--4-xl);padding-bottom:var(--wp--preset--spacing--4-xl)">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"
                style="padding-top:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl)">
                <!-- wp:query-title {"type":"search","textAlign":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}}} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
            <div class="wp-block-group alignfull" style="padding-top:0;padding-bottom:0">
                <!-- wp:query {"queryId":11,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"className":"alignwide","layout":{"type":"default"}} -->
                <div class="wp-block-query alignwide"><!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"default","columnCount":3}} -->
                        <!-- wp:group {"className":"shadow-xs opacity","style":{"spacing":{"blockGap":"0","margin":{"bottom":"var:preset|spacing|space-md"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group shadow-xs opacity has-base-background-color has-background"
                            style="border-radius:8px;margin-bottom:var(--wp--preset--spacing--space-md)">
                            <!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|space-sm","bottom":"var:preset|spacing|space-sm","left":"var:preset|spacing|space-sm","right":"var:preset|spacing|space-sm"}}}} -->
                            <div class="wp-block-columns"
                                style="padding-top:var(--wp--preset--spacing--space-sm);padding-right:var(--wp--preset--spacing--space-sm);padding-bottom:var(--wp--preset--spacing--space-sm);padding-left:var(--wp--preset--spacing--space-sm)">
                                <!-- wp:column {"width":"240px"} -->
                                <div class="wp-block-column" style="flex-basis:240px">
                                    <!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"8px"}}} /-->
                                </div>
                                <!-- /wp:column -->

                                <!-- wp:column {"width":"100%","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}}} -->
                                <div class="wp-block-column" style="padding-right:0;padding-left:0;flex-basis:100%">
                                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                                    <div class="wp-block-group">
                                        <!-- wp:post-terms {"term":"category","className":"is-style-default","fontSize":"xs"} /-->

                                        <!-- wp:post-date {"format":"Y年n月j日"} /-->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|key"}}},"typography":{"fontSize":"1.5em","lineHeight":1.6000000000000001},"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"textColor":"key"} /-->

                                    <!-- wp:post-excerpt {"excerptLength":80,"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0px","bottom":"0"}},"color":{"text":"#737373"},"elements":{"link":{"color":{"text":"#737373"}}},"typography":{"lineHeight":1.6000000000000001}}} /-->
                                </div>
                                <!-- /wp:column -->
                            </div>
                            <!-- /wp:columns -->
                        </div>
                        <!-- /wp:group -->
                        <!-- /wp:post-template -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:spacer {"height":"var:preset|spacing|xl"} -->
                    <div style="height:var(--wp--preset--spacing--xl)" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"className":"is-style-cormorant-circle-pagination","fontSize":"s","layout":{"type":"flex","justifyContent":"center"}} -->
                    <!-- wp:query-pagination-previous {"fontSize":"xs"} /-->

                    <!-- wp:query-pagination-numbers /-->

                    <!-- wp:query-pagination-next {"fontSize":"xs"} /-->
                    <!-- /wp:query-pagination -->

                    <!-- wp:query-no-results -->
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|space-md","right":"var:preset|spacing|space-md"}},"border":{"radius":"8px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-base-background-color has-background"
                        style="border-radius:8px;padding-top:0;padding-right:var(--wp--preset--spacing--space-md);padding-bottom:0;padding-left:var(--wp--preset--spacing--space-md)">
                        <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|space-sm"}}}} -->
                        <p style="margin-top:0;padding-top:var(--wp--preset--spacing--space-sm)">
                            入力されたキーワードでお探ししましたが、記事が見つかりませんでした。<br>別のキーワードで探すかカテゴリなどからお探しください。</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:search {"label":"検索\u003cbr\u003e","showLabel":false,"placeholder":"キーワードを入力..","buttonText":"検索","style":{"border":{"radius":"4px","width":"1px"}}} /-->

                        <!-- wp:heading -->
                        <h2 class="wp-block-heading"><?php esc_html_e('新着記事', 'noya');?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:latest-posts /-->

                        <!-- wp:heading -->
                        <h2 class="wp-block-heading"><?php esc_html_e('カテゴリ一覧', 'noya');?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:categories /-->

                        <!-- wp:heading -->
                        <h2 class="wp-block-heading"><?php esc_html_e('タグ一覧', 'noya');?></h2>
                        <!-- /wp:heading -->

                        <!-- wp:post-terms {"term":"post_tag"} /-->
                    </div>
                    <!-- /wp:group -->
                    <!-- /wp:query-no-results -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->
        </main>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"360px"} -->
    <div class="wp-block-column" style="flex-basis:360px">
        <!-- wp:search {"label":"検索","showLabel":false,"placeholder":"キーワードを入力..","buttonText":"検索","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none","radius":"4px"},"spacing":{"margin":{"right":"0","left":"0"}}}} /-->

        <!-- wp:group {"metadata":{"categories":["about"],"patternName":"sidebar-profile","name":"サイドバー用プロフィール"},"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|space-md","bottom":"var:preset|spacing|space-md","left":"var:preset|spacing|space-md","right":"var:preset|spacing|space-md"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-base-background-color has-background"
            style="border-radius:8px;padding-top:var(--wp--preset--spacing--space-md);padding-right:var(--wp--preset--spacing--space-md);padding-bottom:var(--wp--preset--spacing--space-md);padding-left:var(--wp--preset--spacing--space-md)">
            <!-- wp:image {"width":"128px","height":"128px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-image-border-circle"} -->
            <figure class="wp-block-image aligncenter size-full is-resized is-style-image-border-circle">
                <img style="object-fit:cover;width:128px;height:128px" />
            </figure>
            <!-- /wp:image -->

            <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontSize":"font-md"} -->
            <p class="has-font-md-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e('tkc.', 'noya');?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"color":{"text":"#737373"},"elements":{"link":{"color":{"text":"#737373"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"0","bottom":"0"}}}} -->
            <p class="has-text-color has-link-color" style="color:#737373;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-bottom:0">
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
                            <img style="width:40px" /></figure>
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
                <p style="margin-right:0;margin-left:0;font-size:24px;font-style:normal;font-weight:700;letter-spacing:4px">CATEGORY</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#737373"}}},"color":{"text":"#737373"}},"fontSize":"font-xs"} -->
                <p class="has-text-color has-link-color has-font-xs-font-size" style="color:#737373"><?php esc_html_e('カテゴリー', 'noya');?></p>
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
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"footer"} /-->
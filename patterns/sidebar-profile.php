<?php
/**
 * Title: サイドバー用プロフィール
 * Slug: noya/sidebar-profile
 * Categories: about
 * 
 */
?>

<!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"var:preset|spacing|space-md","bottom":"var:preset|spacing|space-md","left":"var:preset|spacing|space-md","right":"var:preset|spacing|space-md"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:8px;padding-top:var(--wp--preset--spacing--space-md);padding-right:var(--wp--preset--spacing--space-md);padding-bottom:var(--wp--preset--spacing--space-md);padding-left:var(--wp--preset--spacing--space-md)">
    <!-- wp:image {"width":"128px","height":"128px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-image-border-circle"} -->
    <figure class="wp-block-image aligncenter size-full is-resized is-style-image-border-circle">
        <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/no-image_profile.webp" alt="" class="" style="object-fit:cover;width:128px;height:128px"/>
    </figure>
    <!-- /wp:image -->

    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|space-sm","bottom":"0","left":"0","right":"0"}}},"fontSize":"font-md"} -->
    <p class="has-font-md-font-size" style="margin-top:var(--wp--preset--spacing--space-sm);margin-right:0;margin-bottom:0;margin-left:0">著者名.</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"style":{"color":{"text":"#737373"},"elements":{"link":{"color":{"text":"#737373"}}},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
    <p class="has-text-color has-link-color" style="color:#737373;margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介自己紹介</p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group">
        <!-- wp:columns {"verticalAlignment":"top"} -->
        <div class="wp-block-columns are-vertically-aligned-top">
            <!-- wp:column {"verticalAlignment":"top","width":"40px","layout":{"type":"default"}} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40px">
                <!-- wp:image {"width":"40px","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-image-border-circle"} -->
                <figure class="wp-block-image size-thumbnail is-resized is-style-image-border-circle">
                    <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/no-image_sns.webp" alt="" class="" style="width:40px"/>
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","width":"40px"} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40px">
                <!-- wp:image {"width":"40px","sizeSlug":"thumbnail","linkDestination":"none","align":"center","className":"is-style-image-border-circle"} -->
                <figure class="wp-block-image aligncenter size-thumbnail is-resized is-style-image-border-circle">
                    <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/no-image_sns.webp" alt="" class="" style="width:40px"/>
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","width":"40px"} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40px">
                <!-- wp:image {"width":"40px","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-image-border-circle"} -->
                <figure class="wp-block-image size-thumbnail is-resized is-style-image-border-circle">
                    <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/images/no-image_sns.webp" alt="" class="" style="width:40px"/>
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
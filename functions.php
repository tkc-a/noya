<?php

require_once get_template_directory() . '/inc/admin-post.php';

// テーマフォルダ内の「style.css」を読み込む場合
add_action( 'wp_enqueue_scripts', function(){
    wp_enqueue_style( 'main-css', get_stylesheet_uri() );
});

//エディタ用スタイルシート読み込み
function my_theme_add_editor_styles() {
    add_theme_support('editor-styles'); //独自のエディタースタイルを有効にする
    add_editor_style( get_stylesheet_directory_uri() .'/assets/css/editor-styles.css' ); //css読み込み
}
add_action( 'after_setup_theme', 'my_theme_add_editor_styles' );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'wp-emoji-styles' );
});

function custom_block_styles(): void {
    wp_enqueue_block_style(
        'core/image',
        array(
            'handle' => 'image-border-circle',
            'src'    => get_parent_theme_file_uri( '/assets/css/image-styles.css' )
        )
    );

    wp_enqueue_block_style(
        'core/categories',
        array(
            'handle' => 'sidebar-categories-style',
            'src'    => get_parent_theme_file_uri( '/assets/css/sidebar-categories-styles.css' )
        )
    );

    register_block_style(
        'core/image', // ブロック名
        array(
            'name'         => 'image-border-circle', // スタイル名
            'label'        => '丸', // スタイルの表示名
        )
    );

    register_block_style(
        'core/query-pagination',
        array(
            'name'         => 'custom1-style', // スタイル名
            'label'        => '装飾1', // スタイルの表示名
        )
    );
    
    register_block_style(
        'core/list',
        array(
            'name'         => 'list-custom-style-1',
            'label'        => '装飾1'
        )
    );
}
add_action( 'init', 'custom_block_styles' );
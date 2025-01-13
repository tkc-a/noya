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

/**
 * 絵文字に関するスクリプト、スタイルを削除
 * 
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'wp-emoji-styles' );
});

/**
 * ブロックの装飾選択肢を増やし、スタイルを読み込む
 * register_block_style...ブロックに装飾を追加
 * wp_enqueue_block_style.追加した装飾のスタイルを読み込む
 *
 */

function custom_block_styles(): void {
    wp_enqueue_block_style( //定義したスタイルの読み込み
        'core/image', //ブロックを指定
        array(
            'handle' => 'image-border-circle', //装飾名
            'src'    => get_parent_theme_file_uri( '/assets/css/image-styles.css' ) //読み込み先
        )
    );

    wp_enqueue_block_style(
        'core/categories',
        array(
            'handle' => 'sidebar-categories-style',
            'src'    => get_parent_theme_file_uri( '/assets/css/sidebar-categories-styles.css' )
        )
    );

    register_block_style( //ブロックに装飾を定義
        'core/image', // ブロックを指定
        array(
            'name'         => 'image-border-circle', // 装飾名
            'label'        => '丸', // 装飾の表示名
        )
    );

    register_block_style(
        'core/query-pagination',
        array(
            'name'         => 'custom1-style', 
            'label'        => '装飾1'
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
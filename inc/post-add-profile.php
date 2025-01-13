<?php

/**
 * 投稿ページに著者情報を追加
 * 投稿編集画面の下部、サイドにメタボックスを追加
 */
function add_author_single_content($content) {
    // 投稿ページのみ実行
    if (is_single() && in_the_loop() && is_main_query()) {
        $author_info = get_post_author();

        // 最初の見出し直前に著者情報を挿入
        if (preg_match('/<h[1-6].*?>/', $content, $matches, PREG_OFFSET_CAPTURE)) {
            $position = $matches[0][1];
            $content = substr_replace($content, $author_info, $position, 0);
        } else {
            // 見出しがない場合は先頭に追加
            $content = $author_info . $content;
        }
    }
    return $content;
}
add_filter('the_content', 'add_author_single_content');

/**
 * 著者情報を生成し取得
 * 投稿編集画面のサイドにメタボックスを追加
 */
function get_post_author() {
    global $post;
    //投稿から著者情報を取得
    $author = get_userdata($post->post_author);
    // 著者情報を取得
    $author_name = get_the_author();
    $author_bio = get_the_author_meta('description');
    $author_avatar = get_avatar(get_the_author_meta($author->ID), 80);
    $result = "
        <div id='post_author_box'>
            <div class='author-avatar'>
                $author_avatar
                <p class='author-name'>$author_name</p>
            </div>
            <div class='author-details'>
                <p>$author_bio</p>
            </div>
        </div>
    ";
    return $result;
}


/**
 * 投稿ページに著者情報を追加
 * 投稿編集画面のサイドにメタボックスを追加
 */
function add_post_metabox_author() {
    add_meta_box(
        'author_display', // メタボックスのID
        '著者情報の表示設定',  // メタボックスのタイトル
        'render_post_metabox_author', // コールバック関数
        'post',                      // 投稿タイプ
        'side',                      // 表示位置
        'default'                    // 優先度
    );
}
add_action('add_meta_boxes', 'add_post_metabox_author');

/**
 * 投稿に著者情報の表示非表示を追加
 * 投稿編集画面のサイドに著者情報の表示非表示を追加
 */
function render_post_metabox_author($post) {
    // 現在の値を取得。デフォルトは "no"
    $value = get_post_meta($post->ID, '_display_author_info', true) ?: false;
    // チェック状態を生成
    $checked = checked($value, "true", false);
    // セキュリティ向上のためnonceを生成
    wp_nonce_field('save_post_metabox_author', 'post_metabox_author_nonce');

    echo <<<EOF
        <label for="display_author_info">
            <input type="checkbox" name="display_author_info" id="display_author_info" value="true" $checked>
            著者情報を表示する
        </label>
    EOF;
}

/**
 * 投稿に著者情報の表示非表示を追加
 * 投稿編集画面のサイドに著者情報の表示非表示を追加
 */

function save_post_metabox_author($post_id) {
    // 投稿保存時にメタ情報を保存
    if ( !empty( $_POST ) && check_admin_referer( 'save_post_metabox_author', 'post_metabox_author_nonce' ) ) {
        //入力値を無害化
        $value = sanitize_text_field($_POST['display_author_info']);
        //無害化したフラグを保存
        update_post_meta($post_id, '_display_author_info', $value);
    } else {
        //チェックボックスが入っていない場合
        update_post_meta($post_id, '_display_author_info', false);
    }
}
add_action('save_post', 'save_post_metabox_author');
<?php 
/**
 * ***** 以下全てNOYA-SEOに移植 *****
 * 投稿にメタボックスを追加
 * 投稿編集画面の下部、サイドにメタボックスを追加
 */
/*
function add_post_metabox() {
    add_meta_box(
        'author_info_check', // メタボックスのID
        '著者情報の表示設定',  // メタボックスのタイトル
        'render_author_info_metabox', // コールバック関数
        'post',                      // 投稿タイプ
        'side',                      // 表示位置
        'default'                    // 優先度
    );
    add_meta_box(
        'post_seo_setting', 
        'SEO設定',
        'render_seo_setting_metabox',
        'post',
        'advanced',
        'default'
    );
}
add_action('add_meta_boxes', 'add_post_metabox');
*/
/**
 * 投稿に著者情報の表示非表示を追加
 * 投稿編集画面のサイドに著者情報の表示非表示を追加
 */
/*
function render_author_info_metabox($post) {
    // 現在の値を取得。デフォルトは "yes"
    $value = get_post_meta($post->ID, '_show_author_info', true) ?: true;
    $checked = checked($value, true, false);
    echo <<<HTML
        <label for="show_author_info">
            <input type="checkbox" name="show_author_info" id="show_author_info" value="true" $checked>
            著者情報を表示する
        </label>
    HTML;
}*/
/*
function save_post_metabox($post_id) {
    // 投稿保存時にメタ情報を保存
    if (isset($_POST['show_author_info'])) {
        update_post_meta($post_id, '_show_author_info', true);
    } else {
        update_post_meta($post_id, '_show_author_info', false);
    }
}
add_action('save_post', 'save_post_metabox');

function get_author_info() {
    // パターンの取得
    $pattern = get_block_template('noya',"404");
    var_dump($pattern);
    if (!$pattern) {
        return '';
    }
    return do_blocks($pattern->content);
}
add_shortcode('author_info', 'get_author_info');

function render_seo_setting_metabox() {
    global $post;

    // SEOタイトルの入力値
    $seo_title = get_post_meta($post->ID, '_seo_title', true);
    // SEOディスクリプションの入力値
    $seo_description = get_post_meta($post->ID, '_seo_description', true);
    // サイトの区切り線
    $separator_style = get_post_meta($post->ID, '_separator_style', true);
    //EOMの中でselected()を使用
    $selected ='selected';
    // nonceフィールドを追加
    wp_nonce_field('save_separator_setting', 'separator_setting_nonce');
    echo <<<EOM
    <div>
        <p>
            <label for="seo_result">検索結果イメージ</label><br />
            <div>
                <p id="seo_title_result" style="color: #0000ee; font-size: 20px; margin-bottom: 0px; width: 540px;" ></p>
                <p id="seo_description_result" style="font-size: 14px; margin-top: 0px; width: 540px;"></p>
            </div>
        </p>
        <p>
            <label for="seo_title">このページのタイトル</label><br />
            <input type="text" id="seo_title" name="seo_title" value="{$seo_title}" style="width: 100%;"/>
        </p>
        <p>
            <label for="seo_description">このページのディスクリプション</label><br />
            <textarea id="seo_description" name="seo_description" rows="4" style="width: 100%;">{$seo_description}</textarea>
        </p>
        <p>
            <label for="seo_separater">サイトの区切り線</label><br />
            <select name="separator_style" id="seo_separater" style="width: 100%;">
                <option value="|"  {$selected($separator_style, '|', false)} >|</option>
                <option value="-" {$selected($separator_style, '-', false)} >-</option>
                <option value="なし" {$selected($separator_style, '', false)} ></option>
            </select>
        </p>
    </div>
    EOM;
?>
    <script>
        const siteTitle = <?php echo json_encode( esc_js(get_bloginfo('name'))); ?>;
        // 初期値がある場合、すでに反映させる
        document.addEventListener('DOMContentLoaded', function() {

            const titleInput = document.getElementById('seo_title');
            const titleOutput = document.getElementById('seo_title_result');
            const descriptionInput = document.getElementById('seo_description');
            const descriptionOutput = document.getElementById('seo_description_result');
            const separatorInput = document.getElementById('seo_separater');
            const idx = separatorInput.selectedIndex;

            // 初期値を反映
            titleOutput.textContent = titleInput.value;
            titleOutput.textContent = titleOutput.textContent + ' ' + separatorInput.options[idx].text + ' ' + siteTitle;
            descriptionOutput.textContent = descriptionInput.value;

            // titleの内容が変わるたびにoutputを更新
            titleInput.addEventListener('input', function() {
                titleOutput.textContent = titleInput.value + ' ' + separatorInput.options[idx].text + ' ' + siteTitle;
            });
            // descriptionの内容が変わるたびにoutputを更新
            descriptionInput.addEventListener('input', function() {
                descriptionOutput.textContent = descriptionInput.value;
            });
            // 区切り線の内容が変わるたびにoutputを更新
            separatorInput.addEventListener('input', function() {
                console.log(separatorInput.options[separatorInput.selectedIndex].text);
                if(separatorInput.options[separatorInput.selectedIndex].text !== 'なし') {
                    titleOutput.textContent = titleInput.value + ' ' + separatorInput.options[separatorInput.selectedIndex].text + ' ' + siteTitle;
                }else {
                    titleOutput.textContent = titleInput.value + ' ' + siteTitle;
                }
                
            });
        });
    </script>
<?php }

// メタボックスのデータを保存
function save_seo_metabox_data($post_id) {

    // nonceの確認（セキュリティ対策）
    if (!isset($_POST['separator_setting_nonce']) || 
        !wp_verify_nonce($_POST['separator_setting_nonce'], 'save_separator_setting')) {
        return;
    }

    // 自動保存や下書き保存時の処理を防ぐ
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // SEOタイトルとディスクリプションの入力値を保存
    if (isset($_POST['seo_title'])) {
        update_post_meta($post_id, '_seo_title', sanitize_text_field($_POST['seo_title']));
    }
    if (isset($_POST['seo_description'])) {
        update_post_meta($post_id, '_seo_description', sanitize_textarea_field($_POST['seo_description']));
    }

    // サイト区切り線の入力値を保存
    if (isset($_POST['separator_style'])) {
        $separator_style = sanitize_text_field($_POST['separator_style']);
        update_post_meta($post_id, '_separator_style', $separator_style);
    } else {
        delete_post_meta($post_id, '_separator_style');
    }
}
add_action('save_post', 'save_seo_metabox_data');\
*/

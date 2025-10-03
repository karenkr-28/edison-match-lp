<?php

if (!function_exists('lab_setup')) :

	function lab_setup()
	{
		/*
	 * 自動フィードリンク
	 */
		add_theme_support('automatic-feed-links');

		/*
	 * titleを自動で書き出し
	 */
		add_theme_support('title-tag');

		/*
	 * アイキャッチ画像を設定できるようにする
	 */
		add_theme_support('post-thumbnails');

		/*
	 * 検索フォーム、コメントフォーム、コメントリスト、ギャラリー、キャプションでHTML5マークアップの使用を許可します
	 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		/*
	 * テーマカスタマイザーにおける編集ショートカット機能の使用
	 */
		add_theme_support('customize-selective-refresh-widgets');

		/*
	 * カスタムメニュー位置を定義
	 */
		register_nav_menus(array(
			'global' => 'グローバルナビ',
		));
	}
endif;
add_action('after_setup_theme', 'lab_setup');



// ---------------------------　必須設定　必ず設定してください　-----------------------

//----------------------------------------------------------------------
//  CSS読み込み ※arrayの引数は自身よりも先に読み込ませたいCSSを記述
//----------------------------------------------------------------------

function add_stylesheet()
{
	// SwiperのCSSを読み込む
	wp_enqueue_style(
		'swiper-css',
		get_template_directory_uri() . '/assets/styles/swiper-bundle.min.css',
		array(),
		'1.0',
		'all'
	);

	// メインのスタイルシートを読み込む
	wp_enqueue_style(
		'main',
		get_template_directory_uri() . '/assets/styles/style.css',
		array('swiper-css'),
		date('YmdHi', filemtime(get_template_directory() . '/assets/styles/style.css')),
		'all'
	);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

//---------------------------------------------------------------------
// JavaScriptの読み込み
//---------------------------------------------------------------------
function enqueue_custom_scripts()
{
	// 外部ライブラリのスクリプトをキューに追加
	wp_enqueue_script(
		'gsap',
		'https://cdn.jsdelivr.net/npm/gsap@3.7.0/dist/gsap.min.js',
		[],
		'1.0',
		true
	);

	wp_enqueue_script(
		'ScrollTrigger',
		'https://cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js',
		[],
		'1.0',
		true
	);

	wp_enqueue_script(
		'ScrollToPlugin',
		'https://cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollToPlugin.min.js',
		[],
		'1.0',
		true
	);

	// Swiperライブラリを読み込み
	wp_enqueue_script(
		'swiper',
		get_template_directory_uri() . '/assets/scripts/swiper-bundle.min.js',
		[],
		'1.0',
		true
	);

	// メインのJavaScriptファイルをキューに追加
	wp_enqueue_script(
		'main-js',
		get_template_directory_uri() . '/assets/scripts/main.js',
		['gsap', 'ScrollTrigger', 'ScrollToPlugin', 'swiper'],
		date('YmdHi', filemtime(get_template_directory() . '/assets/scripts/main.js')),
		true
	);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


/**
 * 不要なブロックを削除する
 */
function enqueue_custom_script()
{
	if (is_admin()) {
		wp_enqueue_script(
			'remove_block',
			get_template_directory_uri() . '/js/remove-block.js',
			array('wp-blocks'),
			'1.0',
			true
		);
	}
}
add_action('enqueue_block_editor_assets', 'enqueue_custom_script');



//---------------------------　必須設定　ここまで　------------------------------------

/**
 * 投稿アーカイブページの作成
 */
function post_has_archive($args, $post_type)
{
	if ('post' == $post_type) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news'; //任意のスラッグ名
	}
	return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// 投稿タイプ「投稿」の名称を「News」に変更
function change_post_menu_label()
{
	global $menu, $submenu;
	$menu[5][0] = 'お知らせ';
	$submenu['edit.php'][5][0] = 'お知らせ一覧';
	$submenu['edit.php'][10][0] = '新規お知らせ追加';
}
add_action('admin_menu', 'change_post_menu_label');

function change_post_object_label()
{
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'お知らせ';
	$labels->singular_name = 'お知らせ';
	$labels->add_new = '新規追加';
	$labels->add_new_item = 'お知らせの新規追加';
	$labels->edit_item = 'お知らせの編集';
	$labels->new_item = '新規お知らせ';
	$labels->view_item = 'お知らせを表示';
	$labels->search_items = 'お知らせを検索';
	$labels->not_found = 'お知らせが見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱にお知らせはありません';
}
add_action('init', 'change_post_object_label');

// 投稿から「タグ」を削除
function remove_post_taxonomies()
{
	unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'remove_post_taxonomies');

function hide_all_discussion_panels()
{
?>
	<style>
		/* クラシックエディタ用 */
		#commentstatusdiv,
		#trackbacksdiv {
			display: none !important;
		}

		/* Gutenberg用 */
		.edit-post-post-visibility__dialog,
		.edit-post-post-status__row-comments,
		.edit-post-post-status__row-pings,
		.components-panel__body[data-title="ディスカッション"] {
			display: none !important;
		}
	</style>
<?php
}
add_action('admin_head', 'hide_all_discussion_panels');

function hide_quick_edit_comment_ping_checkbox()
{
	echo '<style>
	  .inline-edit-row input[name="comment_status"],
	  .inline-edit-row input[name="ping_status"],
	  .inline-edit-row label[for^="comment_status"],
	  .inline-edit-row label[for^="ping_status"] {
		display: none !important;
	  }
	</style>';
}
add_action('admin_head', 'hide_quick_edit_comment_ping_checkbox');

// クイック編集のチェックボックス・ラベル・固定表示を非表示
function hide_quick_edit_fields()
{
	echo '<style>
	  .inline-edit-row input[name="comment_status"],
	  .inline-edit-row input[name="ping_status"],
	  .inline-edit-row input[name="sticky"],
	  .inline-edit-row label[for^="comment_status"],
	  .inline-edit-row label[for^="ping_status"],
	  .inline-edit-row label[for^="sticky"] {
		display: none !important;
	  }
	</style>';
}
add_action('admin_head', 'hide_quick_edit_fields');

// 投稿一覧の「コメント」列を非表示
function remove_comments_column($columns)
{
	unset($columns['comments']);
	return $columns;
}
add_filter('manage_edit-post_columns', 'remove_comments_column');
function hide_quick_edit_comment_ping_labels()
{
	echo '<style>
	  /* 「コメントを許可」「トラックバック/ピンバックを許可」だけを非表示 */
	  .inline-edit-row label.alignleft:has(.checkbox-title),
	  .inline-edit-row input[name="comment_status"],
	  .inline-edit-row input[name="ping_status"] {
		display: none !important;
	  }
	</style>';
}
add_action('admin_head', 'hide_quick_edit_comment_ping_labels');

// 管理者以外のサイドメニュー制御
function custom_remove_menus_for_non_admin()
{
	if (!current_user_can('administrator')) {
		remove_menu_page('edit-comments.php');       // コメント
		remove_menu_page('tools.php');               // ツール

	}
}
add_action('admin_menu', 'custom_remove_menus_for_non_admin', 999);


/**
 * サイドバーの名称変更
 */
function change_menu_label()
{
	global $menu, $submenu;

	// メディアの名称変更
	$menu[10][0] = '画像・ファイル';
	$submenu['upload.php'][5][0] = '画像・ファイル一覧';
	$submenu['upload.php'][10][0] = '画像・ファイルを追加';
}
add_action('admin_menu', 'change_menu_label');



// ダッシュボードウィジェットから「クイック投稿」を削除
function remove_draft_widget()
{
	remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}
add_action('wp_dashboard_setup', 'remove_draft_widget');


// すべてのダッシュボードウィジェットを削除
function remove_all_dashboard_widgets()
{
	global $wp_meta_boxes;
	$wp_meta_boxes['dashboard'] = array();
}
add_action('wp_dashboard_setup', 'remove_all_dashboard_widgets', 999);

// クイック追加ウィジェットを追加
function add_custom_dashboard_quick_button()
{
	if (!current_user_can('edit_posts')) return;

	// settings-movieページのIDを取得
	$settings_page = get_page_by_path('settings-movie');
	$settings_page_url = $settings_page ? get_edit_post_link($settings_page->ID) : admin_url('post-new.php?post_type=page');
?>
	<style>
		.quick-action a {
			display: block;
			background: #2271b1;
			color: #fff;
			padding: 10px;
			border-radius: 3px;

		}
	</style>
	<ul class="quick-action">
		<li>
			<a href="<?php echo admin_url('post-new.php'); ?>" class="quick-action-button">
				<span class="dashicons-before dashicons-admin-post"></span>
				お知らせを投稿する
			</a>
		</li>
		<li>
			<a href="<?php echo admin_url('edit.php?post_type=attorneys'); ?>" class="quick-action-button">
				<span class="dashicons-before dashicons-groups"></span>
				所属弁護士一覧
			</a>
		</li>
	</ul>
<?php
}
add_action('wp_dashboard_setup', function () {
	wp_add_dashboard_widget('custom_quick_add', 'クイックアクセス', 'add_custom_dashboard_quick_button');
}, 1000);

// 管理画面のメニュー順序を変更
function custom_admin_menu_order($menu_order)
{
	if (!$menu_order) return true;

	return array(
		'index.php', // ダッシュボード
		'edit.php', // 投稿（News）
		'edit.php?post_type=attorneys', // 所属弁護士
		'upload.php', // メディア
		'edit.php?post_type=page', // 固定ページ
		'themes.php', // 外観
		'plugins.php', // プラグイン
		'users.php', // ユーザー
		'tools.php', // ツール
		'options-general.php', // 設定
	);
}
add_filter('custom_menu_order', '__return_true');
add_filter('menu_order', 'custom_admin_menu_order');

// 投稿一覧にサムネイルカラムを追加
function add_thumbnail_column($columns)
{
	$new_columns = array();
	$new_columns['cb'] = $columns['cb'];
	$new_columns['featured_image'] = 'サムネイル';
	unset($columns['cb']);
	return array_merge($new_columns, $columns);
}
add_filter('manage_posts_columns', 'add_thumbnail_column');
add_filter('manage_attorneys_posts_columns', 'add_thumbnail_column');

// サムネイルカラムの内容を表示
function display_thumbnail_column($column, $post_id)
{
	if ($column === 'featured_image') {
		if (has_post_thumbnail($post_id)) {
			echo get_the_post_thumbnail($post_id, array(50, 50));
		} else {
			echo '<span style="color: #999;">画像なし</span>';
		}
	}
}
add_action('manage_posts_custom_column', 'display_thumbnail_column', 10, 2);
add_action('manage_attorneys_posts_custom_column', 'display_thumbnail_column', 10, 2);

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
	return false;
}
// カタカナのみを許可するバリデーション
add_filter('wpcf7_validate_text*', 'custom_katakana_validation', 20, 2);
function custom_katakana_validation($result, $tag)
{
	$name = $tag['name'];
	if ($name == 'user-name-kana') {
		$value = isset($_POST[$name]) ? trim($_POST[$name]) : '';
		if (!preg_match('/^[ァ-ヶー]+$/u', $value)) {
			$result->invalidate($tag, 'ふりがなはカタカナで入力してください。');
		}
	}
	return $result;
}

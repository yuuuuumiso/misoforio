<?php



/* ---------- カスタム投稿「作品」の追加
追加後はパーマリンクを更新しないと表示されない
---------- */
add_action( 'init', 'create_post_type' );

function create_post_type() {

  // 「作品」のカスタム投稿追加
  register_post_type( // カスタム投稿タイプの追加関数
    'works', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => '作品', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'menu_icon' => 'dashicons-smiley',//アイコン
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );
  // カスタムタクソノミー
  register_taxonomy( // カスタムタクソノミーの追加関数
    'works-genre', // カテゴリーの名前（半角英数字の小文字）
    'works',     // カテゴリーを追加したいカスタム投稿タイプ名
    array(      // オプション（以下
      'label' => '作品ジャンル', // 表示名称
      'public' => true, // 管理画面に表示するかどうかの指定
      'hierarchical' => true, // 階層を持たせるかどうか
      'show_in_rest' => true, // REST APIの有効化。ブロックエディタの有効化
    )
  );
}














// 各テンプレートごとのメイン画像を表示
function get_main_image() {
	if ( is_page() || is_singular( 'daily_contribution' ) ):
		$attachment_id = get_field( 'main_image' );
		if ( is_front_page() ):
			return wp_get_attachment_image( $attachment_id, 'top' );
		else:
			return wp_get_attachment_image( $attachment_id, 'detail' );
		endif;
	elseif ( is_category( 'news' ) || is_singular( 'post' ) ):
		return '<img src="'. get_template_directory_uri(). '/assets/images/bg-page-news.jpg" />';
	elseif ( is_search() || is_404() ):
		return '<img src="'. get_template_directory_uri() .'/assets/images/bg-page-search.jpg">';
	elseif ( is_tax( 'works' ) ):
		$term_obj = get_queried_object();
		$image_id = get_field( 'xxxxxxxxxxx', $term_obj->taxonomy. '_'. $term_obj->term_id );
		return wp_get_attachment_image( $image_id, 'xxxxxxxx' );
	else:
		return '<img src="'. get_template_directory_uri(). '/img/bg-page-dummy.jpg" />';
	endif;
}


// メイン画像上にテンプレートごとの英語タイトルを表示
function get_main_en_title() {
	if ( is_category() ):
		$term_obj = get_queried_object();
		$english_title = get_field( 'english_title', $term_obj->taxonomy. '_'. $term_obj->term_id );
		return $english_title;
	elseif ( is_singular( 'post' ) ):
		$term_obj = get_the_category();
		$english_title = get_field( 'english_title', $term_obj[0]->taxonomy. '_'. $term_obj[0]->term_id );
		return $english_title;
	elseif ( is_page() || is_singular( 'works' ) ):
		return get_field( 'english_title' );
	elseif ( is_search() ):
		return 'Search Result';
	elseif ( is_404() ):
		return '404 Not Found';
	elseif ( is_tax() ):
		$term_obj = get_queried_object();
		$english_title = get_field( 'english_title', $term_obj->taxonomy. '_'. $term_obj->term_id );
		return $english_title;
	endif;
}




// メイン画像上にテンプレートごとの文字列を表示
function get_main_title() {
	if ( is_singular( 'post' ) ):
		$category_obj = get_the_category();
		return $category_obj[0]->name;
	elseif ( is_page() ):
		return get_the_title();
	elseif ( is_category() || is_tax() ):
		return single_cat_title();
	elseif ( is_search() ):
		return ' サイト内検索結果';
	elseif ( is_404() ):
		return ' ページが見つかりません';
	elseif ( is_singular( 'works' ) ):
		$term_obj = get_the_terms( get_queried_object()->ID, 'works-genre' );
		return $term_obj[0]->name;
	endif;
}


<?php


function themeSetup() {
 
//サムネイル利用
    add_theme_support('post-thumbnails');
 
    //タイトルタグ
    add_theme_support('title-tag');

//2番目のパラメータに指定した箇所がHTML5に準拠した形で出力されるようになります。例えばtype='text/javascript'やtype='text/css'のような不要な属性は出力されなくなります。
add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
) );

}
add_action( 'after_setup_theme', 'themeSetup' );
















// cssをhead内ではなく、function.phpから動的に読み込むパターン

//テーマディレクトリまでのパスを定数にしておくと便利です
define("DIRE", get_template_directory_uri());

function add_files(){

    //css読み込み
//    wp_enqueue_style('notosansjp','http://fonts.googleapis.com/earlyaccess/notosansjp.css');
//    wp_enqueue_style('lato','https://fonts.googleapis.com/css?family=Lato');
// 上記ではiPhoneで反映されなかった
wp_enqueue_style('googlefonts', "https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap", array(), null );
wp_enqueue_style(
  "swiper-css",
  "https://unpkg.com/swiper@8/swiper-bundle.min.css"
);
// wp_enqueue_style( 'swiper-css' );
wp_enqueue_style('my_style',DIRE.'/css/style.css');

    //WP本体のjQuery+jsファイルを読み込む
    wp_enqueue_script('jquery');
    wp_enqueue_script('my_script',DIRE.'/js/script.js');
    wp_enqueue_script('swiper-js','https://unpkg.com/swiper@8/swiper-bundle.min.js',array(),false,true);
	//実際に動かすための設定ファイル
	wp_enqueue_script(
		"swiper-conf",
		get_theme_file_uri("/js/swiper-conf.js"),
		array("swiper-js"),
		false,
		true
	);


}
add_action('wp_enqueue_scripts', 'add_files');













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
      'show_in_rest' => true, // REST APIの有効化。ブロックエディタの有効化。
    )
  );
}
<?php

//パーツ呼び出し
require_once get_theme_file_path( './func/post.php' ); //投稿の設定
require_once get_theme_file_path( './func/custom-post.php' ); //カスタム投稿の設定









//WP基本設定
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


/**
 * タイトルタグの区切り文字をエン・ダッシュから縦線に変更する
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator){
    $separator = '|';
    return $separator;
}







// ウィジェット機能を有効化
function theme_widgets_init() {
    register_sidebar( array(
        'name' => ' サイドバーウィジェット',
        'id' => 'side-widget',
        'description' => ' サイドバーで使うウィジェット',
        'before_widget' => '<li class="sidebar__blk">',
        'after_widget' => '</li>',
    ) );
}
add_action('widgets_init','theme_widgets_init' );










/**
 * bodyタグ開始に挿入
 */
add_action('wp_body_open', function() {
	?>
	<!-- ここから挿入したいソースコードなどスタート -->
	<!-- ここまで -->
	<?php });











// css js をhead内ではなく、function.phpから動的に読み込むパターン
//テーマディレクトリまでのパスを定数にしておく
define("DIRE", get_template_directory_uri());
define("PATH", get_template_directory());

function add_files(){
//css読み込み
//wp_enqueue_style('notosansjp','http://fonts.googleapis.com/earlyaccess/notosansjp.css');
//wp_enqueue_style('lato','https://fonts.googleapis.com/css?family=Lato');
// 上記ではiPhoneで反映されなかった
wp_enqueue_style('googlefonts', "https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap", array(), null );
wp_enqueue_style("swiper-css","https://unpkg.com/swiper@8/swiper-bundle.min.css");
//wp_enqueue_style( 'swiper-css' );
//wp_enqueue_style('my_style',DIRE.'/css/style.css');
//wp_enqueue_style('style', DIRE.'/css/style.css', array(), date('YmdGis', filemtime(get_template_directory().'/css/style.css')));//パラメータ付与

//関数wp_cssを定義する
function wp_css($css_name, $file_path){
  wp_enqueue_style($css_name, DIRE.$file_path, array(), date('YmdGis', filemtime(PATH.$file_path)));
}
//関数wp_cssの第一引数へスタイルシートのid名'style'、第二引数へスタイルシートのパス'/css/style.css'を引き渡して実行する
wp_css('style', '/css/style.css');


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











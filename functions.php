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
    wp_enqueue_style('my_style',DIRE.'/css/style.css');
//    wp_enqueue_style('notosansjp','http://fonts.googleapis.com/earlyaccess/notosansjp.css');
//    wp_enqueue_style('lato','https://fonts.googleapis.com/css?family=Lato');

// 上記ではiPhoneで反映されなかった
wp_enqueue_style('googlefonts', "https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap", array(), null );



    //WP本体のjQuery+jsファイルを読み込む
    wp_enqueue_script('jquery');
    wp_enqueue_script('my_script',DIRE.'/js/script.js');

}
add_action('wp_enqueue_scripts', 'add_files');





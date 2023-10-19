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
    wp_enqueue_style('notosansjp','http://fonts.googleapis.com/earlyaccess/notosansjp.css');
    wp_enqueue_style('lato','https://fonts.googleapis.com/css?family=Lato');
    wp_enqueue_style( 'Mplus_1p', 'https://fonts.googleapis.com/earlyaccess/mplus1p.css' );


    //WP本体のjQuery+jsファイルを読み込む
    wp_enqueue_script('jquery');
    wp_enqueue_script('my_script',DIRE.'/js/script.js');

}
add_action('wp_enqueue_scripts', 'add_files');





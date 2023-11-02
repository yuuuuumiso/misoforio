
<?php

//投稿の表示件数を変更9時13分
function my_pre_get_posts_number( $query ) { 
        if(is_admin() || ! $query -> is_main_query()) return; 
        // if($query->is_home()){
        //   $query->set( 'posts_per_page',3); 
        // }
        if ($query->is_archive() ) {
            $query->set( 'posts_per_page', '6' );
  }
} 
add_action('pre_get_posts','my_pre_get_posts_number'); 


// パンくずリストはfunction.phpで出すパターンとtlpを用意するパターンがある.現在はtplから出力
function breadcrumb()
{
    $home = '<li><a href="' . get_bloginfo('url') . '" >HOME</a></li>';
    echo '<ul class="breadCrumb">';
    if (is_front_page()) {
        // トップページの場合は表示させない
    }
    // カテゴリページ
    else if (is_category()) {
        $cat = get_queried_object();
        $cat_id = $cat->parent;
        $cat_list = array();
        while ($cat_id != 0) {
            $cat = get_category($cat_id);
            $cat_link = get_category_link($cat_id);
            array_unshift($cat_list, '<li><a href="' . $cat_link . '">' . $cat->name . '</a></li>');
            $cat_id = $cat->parent;
        }
        echo $home;
        foreach ($cat_list as $value) {
            echo $value;
        }
        the_archive_title('<li>', '</li>');
    }
    // アーカイブ・タグページ
    else if (is_archive()) {
        echo $home;
        the_archive_title('<li>', '</li>');
    }
    //カスタム投稿「works」 だったら
    else  if (is_singular('works')) {
        echo $home;
        the_archive_title('<li>', '</li>');
    }
    // 投稿ページ「blog」
    else if (is_single()) {
        $cat = get_the_category(); //カスタム投稿だとこれは効かないのでワーニングが出る
        //var_dump($cat);
        if (isset($cat[0]->cat_ID)) $cat_id = $cat[0]->cat_ID;
        $cat_list = array();
        while ($cat_id != 0) {
            $cat = get_category($cat_id);
            $cat_link = get_category_link($cat_id);
            array_unshift($cat_list, '<li><a href="' . $cat_link . '">' . $cat->name . '</a></li> ');
            $cat_id = $cat->parent;
        }
        foreach ($cat_list as $value) {
            echo $value;
        }
        the_title('<li>', '</li>');
    }
    // 固定ページ
    else if (is_page()) {
        echo $home;
        the_title('<li>', '</li>');
    }
    // 404ページの場合
    else if (is_404()) {
        echo $home;
        echo '<li>ページが見つかりません</li>';
    }
    //それ以外：投稿のアーカイブなど
    else {
        echo $home;
        the_title('<li>', '</li>'); //もしくはthe_archive_title
    }
    echo "</ul>";
}
// アーカイブのタイトルを削除
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_month()) {
        $title = single_month_title('', false);
    }
    return $title;
});

























/* 投稿アーカイブを有効にしてスラッグを指定する */
//通常投稿blogのURLを/ドメイン/記事名⇒/ドメイン/blog/記事名。パーマリンクを更新しないと反映されない：https://fundemic.jp/blog/the-tohr-archive/
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'blog'; //任意のスラッグ名　←アーカイブページを有効に
        $args['label'] = 'ブログ'; //「投稿」から変更
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
add_filter('post_type_archive_link', function ($link, $post_type) {
    if ('post' === $post_type) {
        $post_type_object = get_post_type_object('post');
        $slug = $post_type_object->has_archive;
        $link = get_home_url(null, '/' . $slug . '/');
    }
    return $link;
}, 10, 2);
function add_article_post_permalink($permalink)
{
    $permalink = '/blog' . $permalink;
    return $permalink;
}
add_filter('pre_post_link', 'add_article_post_permalink');
function add_article_post_rewrite_rules($post_rewrite)
{
    $return_rule = array();
    foreach ($post_rewrite as $regex => $rewrite) {
        $return_rule['blog/' . $regex] = $rewrite;
    }
    return $return_rule;
}
add_filter('post_rewrite_rules', 'add_article_post_rewrite_rules');

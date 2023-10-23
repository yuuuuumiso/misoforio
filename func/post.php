
<?php


// パンくずリスト
function breadcrumb() {
  $home = '<li><a href="'.get_bloginfo('url').'" >HOME</a></li>';

  echo '<ul>';
  if ( is_front_page() ) {
      // トップページの場合は表示させない
  }
  // カテゴリページ
  else if ( is_category() ) {
      $cat = get_queried_object();
      $cat_id = $cat->parent;
      $cat_list = array();
      while ($cat_id != 0){
          $cat = get_category( $cat_id );
          $cat_link = get_category_link( $cat_id );
          array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
          $cat_id = $cat->parent;
      }
      echo $home;
      foreach($cat_list as $value){
          echo $value;
      }
      the_archive_title('<li>', '</li>');
  }
  // アーカイブ・タグページ
  else if ( is_archive() ) {
  echo $home;
  the_archive_title('<li>', '</li>');
  }
  // 投稿ページ
  else if ( is_single() ) {
  $cat = get_the_category();
      if( isset($cat[0]->cat_ID) ) $cat_id = $cat[0]->cat_ID;
      $cat_list = array();
      while ($cat_id != 0){
          $cat = get_category( $cat_id );
          $cat_link = get_category_link( $cat_id );
          array_unshift( $cat_list, '<li><a href="'.$cat_link.'">'.$cat->name.'</a></li>' );
          $cat_id = $cat->parent;
      }
      foreach($cat_list as $value){
          echo $value;
      }
      the_title('<li>', '</li>');
  }
  // 固定ページ
  else if( is_page() ) {
  echo $home;
  the_title('<li>', '</li>');
  }
  // 404ページの場合
  else if( is_404() ) {
  echo $home;
  echo '<li>ページが見つかりません</li>';
  }
  echo "</ul>";
}
// アーカイブのタイトルを削除
add_filter( 'get_the_archive_title', function ($title) {
  if ( is_category() ) {
      $title = single_cat_title( '', false );
  } elseif ( is_tag() ) {
      $title = single_tag_title( '', false );
  } elseif ( is_month() ) {
      $title = single_month_title( '', false );
  }
  return $title;
});
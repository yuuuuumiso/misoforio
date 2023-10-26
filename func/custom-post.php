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








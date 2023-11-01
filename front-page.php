<?php get_header(); ?>

<div class="mv">
  <div class="mv__logo">Miso's<br>PORTFOLIO</div>
  <div class="mv__img"><img src="<?php echo get_template_directory_uri(); ?>/img/mv_img03.png"></div>
</div>

<section class="sec about">
  <div class="sec__inner">
    <div class="sec__ttlBox">
      <h2 class="sec__ttl">A<span class="sec__ttl--small">bout</span></h2>
      <p class="sec__ttl-sub">わたしについて</p>
    </div>
    <div class="aboutBox">
      <div class="aboutBox__img"><img src="<?php echo get_template_directory_uri(); ?>/img/about_img01.jpg"></div>
      <div class="aboutBox__body">
        <h3 class="aboutBoxTtl">Webコーダー / ブロガー<br><span>味噌</span></h3>
        <p class="aboutBox__desc">1990年生まれのオス。大学を卒業後、営業職に従事するも職場でのパワハラに合い、メンタル崩壊前に逃亡。<br><br>その後は東南アジアを放浪し、職業訓練校にてWeb制作を学ぶ。卒業後は制作会社でコーダーとして3年間勤務。現在はメーカーでWeb担当として働いてます。主な業務は「コーディング・デザイン・マーケティング」です。<br><br>個人では月間PVは3.5万の「味噌ブログ」を運営。並行して運用しているnoteは11万アクセスを突破しました。</p>
        <ul class="aboutBox__snsLists">
          <li class="aboutBox__snsList"><a href="https://twitter.com/shiromisooo"><img src="<?php echo get_template_directory_uri(); ?>/img/ico_tw.svg"></a></li>
          <li class="aboutBox__snsList"><a href="https://www.instagram.com/misomisomisoooo/"><img src="<?php echo get_template_directory_uri(); ?>/img/ico_ig.svg"></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>







<section class="sec works">
  <div class="sec__inner">
    <div class="sec__ttlBox">
      <h2 class="sec__ttl">W<span class="sec__ttl--small">orks</span></h2>
      <p class="sec__ttl-sub">作品集</p>
    </div>
  </div>


  <div class="worksBody">

    <div class="slide-btn">
      <a href="" class="left-btn swiper-left-btn" tabindex="0" role="button" aria-label="Next slide"></a>
      <a href="" class="right-btn swiper-right-btn" tabindex="0" role="button" aria-label="Previous slide"></a>
    </div>

      <!-- ここ関数化できるな -->
    <div class="worksItems swiper-container">
      <div class="worksItems__wrap swiper-wrapper">
        <?php
        $args = array( //サブクエリは専用のphpに書くか、関数化する
          'post_type' => 'works', //投稿タイプ
          'post_status' => 'publish', //公開済み
          'posts_per_page' => 6, // 表示する数
          'orderby'        => 'date', //投稿日時
          'order'          => 'DESC', //降順
          'has_password' => false,
        ); ?>
        <?php $my_query = new WP_Query($args); ?>
        <?php if ($my_query->have_posts()) : ?>
          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <?php get_template_part('template-parts/loop', 'topWorks'); ?>
        <?php endwhile;
        endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <!-- ページネーション（※省略可） -->
      <!-- <div class="swiper-pagination"></div> -->
      <!-- ナビゲーションボタン（※デフォルトのやつ。今回はカスタム）
    <div class="swiper-button-prev"></div> 
    <div class="swiper-button-next"></div>
    -->
      <!-- スクロールバー（※省略可） -->
      <!-- <div class="swiper-scrollbar"></div>  -->
      <p class="btn01 btn01--A"><a href="<?php echo get_post_type_archive_link('works'); ?>" class="btn">一覧を見る<img src="<?php echo get_template_directory_uri(); ?>/img/ico_btn01.png"></a>
    </div>
  </div>


</section>






<section class="sec skill">
  <div class="sec__inner">
    <div class="sec__ttlBox">
      <h2 class="sec__ttl">S<span class="sec__ttl--small">kills</span></h2>
      <p class="sec__ttl-sub">できること</p>
    </div>
    <div class="skillBox">
      <div class="skillBox__inner">
        <ul class="skillLists">
          <li class="skillList">
            <h3 class="skillList__ttl">コーディング</h3>
            <p class="skillList__ttl--sub">Cording</p>
            <p class="skillList__img"><img src="<?php echo get_template_directory_uri(); ?>/img/skill_ico01.svg"></p>
            <p class="skillList__desc">html、css、jQueryを使用したコーディングができます。WordPressの組み込みも可能です。本サイトもWordPressで構築しました。</p>
          </li>
          <li class="skillList">
            <h3 class="skillList__ttl">デザイン</h3>
            <p class="skillList__ttl--sub">Design</p>
            <p class="skillList__img"><img src="<?php echo get_template_directory_uri(); ?>/img/skill_ico02.svg"></p>
            <p class="skillList__desc">バナーやLPなどのデザインができます。実務ではECサイト用の画像を制作したり、自社サイトのLPをデザインしました。Photoshop、Illustrator、Figmaなどのデザインソフトを使用しています。</p>
          </li>
          <li class="skillList">
            <h3 class="skillList__ttl">ライティング</h3>
            <p class="skillList__ttl--sub">Writing</p>
            <p class="skillList__img"><img src="<?php echo get_template_directory_uri(); ?>/img/skill_ico03.svg"></p>
            <p class="skillList__desc">3年以上運営しているブログの経験を活かしてWebライティングを行います。月間最高PVは3.5万、noteの総アクセス数は11万です。SEOも学んでおり、複数記事で検索順位1位を取った経験もあります。</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>





<section class="sec blog">
  <div class="sec__inner">
    <div class="sec__ttlBox">
      <h2 class="sec__ttl">B<span class="sec__ttl--small">log</span></h2>
      <p class="sec__ttl-sub">ブログ</p>
    </div>
    <div class="blogBox">
      <ul class="blogLists">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/loop', 'topBlog'); ?>
        <?php endwhile;
        endif; ?>
      </ul>
      <p class="btn01"><a href="<?php echo esc_url(home_url('blog')); ?>">一覧を見る<img src="<?php echo get_template_directory_uri(); ?>/img/ico_btn01.png"></a></p>
    </div>
  </div>
</section>















<?php get_footer(); ?>
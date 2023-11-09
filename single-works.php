<?php get_header(); ?>





<div class="page-head">
			  <?php echo get_main_image(); ?>
              <div class="wrapper">
                <span class="page-title-en"><?php echo get_main_en_title(); ?></span>
                <h2 class="page-title"><?php echo get_main_title(); ?></h2>
              </div>
            </div>





<main class="content content--works">
  <article class="content__main content__main--works">
    <div class="content__wrap">
      <div class="postHead">
        <?php get_template_part('template-parts/tpl', 'breadcrumb'); ?>
        <div class="single-post__info">
          <div class="catsList catsList--works"><?php echo get_the_terms(get_the_ID(), 'works-genre')[0]->name; ?></div>
          <p class="postData"><i class="far fa-clock"></i><span><?php echo get_the_date(); ?></span><i class="fas fa-history"></i></span><?php the_modified_date(); ?></span></p>
        </div>
      </div>
      <div class="postBlock">
      <div class="postBlock__img swiper-container">
        <div class="swiper-wrapper">
          <p class="swiper-slide"><img src="<?php the_field('works-img'); ?>"></p>
          <p class="swiper-slide"><img src="<?php the_field('works-img02'); ?>"></p>
        </div>
        <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
      </div>
      <div class="postBlock__body">
        <h1 class="postTtl01"><?php the_title(); ?></h1>
        <dl class="worksList">
          <dt>作品名</dt>
          <dd>：<?php echo get_field('works-name'); ?></dd>
          <dt>URL</dt>
          <dd>：<a href="<?php echo get_field('works-url'); ?>"><?php echo get_field('works-url'); ?></a></dd>
          <dt>使用ツール</dt>
          <dd>：<?php echo get_field('works-tool'); ?></dd>
          <dt>制作期間</dt>
          <dd>：<?php echo get_field('works-period'); ?></dd>
          <dt>ポイント</dt>
          <dd>：<?php echo get_field('works-point'); ?></dd>
        </dl>
      </div>
      </div>
    </div>

<div class="postArticle">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>


  </div>
  </article>
</main>














<?php get_footer(); ?>
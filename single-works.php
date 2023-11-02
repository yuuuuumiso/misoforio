<?php get_header(); ?>











<main class="content content--works">
  <article class="content__main content__main--works">
    <div class="worksContent">
      <div class="single-post__head">
        <?php get_template_part('template-parts/tpl', 'breadcrumb'); ?>
        <div class="single-post__info">
          <div class="catsList catsList--works"><?php echo get_the_terms(get_the_ID(), 'works-genre')[0]->name; ?></div>
          <p class="postData"><i class="far fa-clock"></i><span><?php echo get_the_date(); ?></span><i class="fas fa-history"></i></span><?php the_modified_date(); ?></span></p>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 class="postTtl01"><?php the_title(); ?></h1>
      </div>
      <div class="postWorks">
        <div class="postBody__img">img<img src=""></div>
        <div class="postBody__body">wrap<img src=""></div>
        <?php //the_content(); ?>
      </div>
      <?php get_template_part('template-parts/tpl', 'snsicon'); ?>
      <?php get_template_part('template-parts/tpl', 'pagenation'); ?>
    </div>
    <?php endwhile;endif; ?>
  </article>
</main>






<?php get_footer(); ?>
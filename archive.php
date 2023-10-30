<?php get_header(); ?>











<main class="content post">
  <article class="content__main single-post">
    <div class="contentMain__inner">
      <div class="contentMain__head">
        <?php get_template_part('template-parts/tpl', 'breadcrumb'); ?>
      </div>
      <ul class="blogLists blogLists--card">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/loop', 'archiveList'); ?>
          <?php endwhile; ?>
          <?php else : ?>
          <p>まだ記事がありません</p>
        <?php endif; ?>
      </ul>
      <div class="pageNation"><?php the_posts_pagination(); ?></div>
    </div>
  </article>
  <?php get_sidebar(); ?>
</main>






<?php get_footer(); ?>
<li class="blogList" id="post-<?php the_ID(); ?>" >
  <a class="blogList__link" href="<?php the_permalink(); ?>">
    <p class="blogList__img">

<?php if (has_post_thumbnail()) : ?>
<?php the_post_thumbnail('thumb'); ?>
<?php else: ?>
  <img src="<?php echo get_template_directory_uri(); ?>/img/blog_img01.png">
<?php endif; ?>  

  </p>
    <div class="blogList__body">
      <p class="blogList__date"><?php the_time('Y/n/j'); ?></p>
      <ul class="catsList catsList--top">
        <li class="catsList__item">
          <?php if (is_post_type_archive('works')) : ?>
            <?php echo get_the_terms(get_the_ID(), 'works-genre')[0]->name; ?>
          <?php else : ?>
            <?php $cat = get_the_category(); ?><?php $cat = $cat[0]; ?><?php echo get_cat_name($cat->term_id); ?>
          <?php endif; ?>
        </li>
      </ul>
      <p class="blogList__ttl"><?php echo wp_trim_words(get_the_title(), 32, '...'); ?></p>
      <div class="blogList__excerpt"><?php echo get_flexible_excerpt(40); ?></div>
    </div>
  </a>
</li>
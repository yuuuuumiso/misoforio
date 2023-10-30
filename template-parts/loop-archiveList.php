



<!-- カスタム投稿用のarchive-works.phpつくる。<?php $cat = get_the_category(); ?><?php $cat = $cat[0]; ?><?php echo get_cat_name($cat->term_id); ?>が使えない -->

<li class="blogList">
      <a class="blogList__link" href="<?php the_permalink(); ?>">
        <p class="blogList__img"><img src="<?php echo get_template_directory_uri(); ?>/img/blog_img01.png"></p>
        <div class="blogList__body">
          <p class="blogList__date"><?php the_time('Y/n/j'); ?></p>
          <ul class="catsList catsList--top">
            <li class="catsList__item"><?php $cat = get_the_category(); ?><?php $cat = $cat[0]; ?><?php echo get_cat_name($cat->term_id); ?></li>
          </ul>
          <p class="blogList__ttl"><?php echo wp_trim_words(get_the_title(), 32, '...'); ?></p>
        </div>
      </a>
    </li>
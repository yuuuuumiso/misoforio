<div class="worksItems__item swiper-slide">
<a href="<?php the_permalink(); ?>">
<div class="worksItems__image"><?php the_post_thumbnail();?></div>
<div class="worksItems__body">
<div class="worksItems__date"><?php the_modified_date('Y/n/j'); ?></div>
<h3 class="worksItems__ttl"><?php echo the_title(); ?></h3>
</div>
</a>
</div>
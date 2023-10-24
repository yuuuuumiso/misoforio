<?php get_header(); ?>











<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<?php //if(have_posts()): the_post(); ?>
<main class="post">
<article class="single-post">
<div class="single-post__inner">
  
<div class="single-post__head">
<div class="catsList"><?php echo get_the_terms(get_the_ID(), 'works-genre')[0]->name;?></div>
<p class="postData"><?php echo get_the_date(); ?></p>
<h1 class="postTtl01"><?php the_title(); ?></h1>
<p class="postThumb"><?php the_post_thumbnail(); ?></p>
</div>


<div class="postBody">
<p><?php the_field('works-name'); ?></p>
<p><?php the_field('works-url'); ?></p>

  <?php the_content(); ?>
  </div>
  

 
  
  <?php get_template_part( 'template-parts/tpl', 'snslist' ); ?>
  <?php get_template_part( 'template-parts/tpl', 'pagenation' ); ?>



  
  </div>
  </article>
  </main>
<?php //endif; ?>
<?php
endwhile;
endif;
?>



  <?php get_footer(); ?>
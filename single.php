<?php get_header(); ?>











<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<?php //if(have_posts()): the_post(); ?>
  <main class="post">
  <article class="single-post">
  <div class="single-post__inner">
  
  <div class="single-post__head">
  
  <h1 class="postTtl01"><?php the_title(); ?></h1>
  <p class="postData"><?php echo get_the_date(); ?></p>
  
  
  <ul class="catsList catsList--single">
    <li class="catsList__item"><?php the_category(); ?></li>
  </ul>


  <p class="postThumb"><?php the_post_thumbnail(); ?></p>
  </div>
  
  <div class="postBody">
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
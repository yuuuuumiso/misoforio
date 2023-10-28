<?php get_header(); ?>










<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
  <main class="post">
  <article class="single-post">
  <div class="single-post__inner">
  <div class="single-post__head">

  <?php //breadcrumb(); ?>
  <?php get_template_part( 'template-parts/tpl', 'breadcrumb' ); ?>

  <div class="single-post__info">
  <div class="catsList catsList--single"><?php the_category(); ?></div>
  <p class="postData"><i class="far fa-clock"></i><span><?php echo get_the_date(); ?></span><i class="fas fa-history"></i></span><?php the_modified_date(); ?></span></p>
  </div>

  <h1 class="postTtl01"><?php the_title(); ?></h1>
  <p class="postThumb"><?php the_post_thumbnail(); ?></p>
  </div>  
  <div class="postBody">
  <?php the_content(); ?>
  </div>
  <?php get_template_part( 'template-parts/tpl', 'snsicon' ); ?>
  <?php get_template_part( 'template-parts/tpl', 'pagenation' ); ?>
  </div>

  <?php get_sidebar(); ?>

</article>
  </main>
<?php
endwhile;
endif;
?>



  <?php get_footer(); ?>
<?php
/*
 * Template Name: archive.php
 *メインループなので投稿数が管理画面で設定した数になる：今は④件
 */
?>
<?php get_header();?>


<main class="content content--typeB">

<article class="content__main single-post">
<ul class="blogLists">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php get_template_part( 'template-parts/loop', 'topblog' ); ?>
<?php endwhile; endif; ?>
</ul>
</article>

<?php get_sidebar(); ?>

</main>



<?php get_footer();?>
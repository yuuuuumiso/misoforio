<?php
/*
 * Template Name: archive.php
 *メインループなので投稿数が管理画面で設定した数になる：今は④件
 */
?>
<?php get_header();?>

<style>
    .archive{
        font-size: 2rem;
    }
</style>

<main class="archive">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="blog-list__list-item">
        <a href="<?php the_permalink(); ?>" class="blog-item">
                <h3 class="blog-item__title"><?php the_title(); ?></h3>
        </a>
    </article>
<?php endwhile; endif; ?>
</main>

<p>index.php</p>

<?php get_footer();?>
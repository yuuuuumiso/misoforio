<?php get_header(); ?>


<style>
    .main{
        font-size: 3rem;
        text-align: center;
        margin: auto;
    }
</style>




<div class="main">
<?php get_template_part('template-parts/tpl', 'breadcrumb'); ?>
<h2 class="pageTitle">404 NOT FOUND<span>ERROR</span></h2>
<div class="container">
        <p>お探しのページが見つかりませんでした。</p>
        <p>申し訳ございませんが、<a href="<?php echo home_url('/'); ?>">こちらのリンク</a>からトップページにお戻りください。</p>
    </div>
</div>

<?php get_footer(); ?>

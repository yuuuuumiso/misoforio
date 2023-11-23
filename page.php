<?php get_header(); ?>


<style>
    .main{
        font-size: 3rem;
        text-align: center;
        padding: 10rem;
    }
</style>


<div class="page-main main">
                <div class="lead-inner">
<?php
if( have_posts() ):
	while( have_posts() ):the_post();
		the_content();
	endwhile;
endif;
?>
                </div>
              </div>
<?php get_footer(); ?>



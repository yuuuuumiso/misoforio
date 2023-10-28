<?php $related_display = get_theme_mod( 'related_display', 'on' ); ?>
<?php $related_number_post = get_theme_mod( 'related_number_post', '8' ); ?>
<?php if ( $related_display == 'on' ): ?>
	<?php if( ! get_post_meta( $post->ID, "related_post_off", true) == '関連記事非表示' ) : ?>
		<div class="related-post">
			<h4 class="related-post-title"><?php echo get_theme_mod('related_title_post', 'RELATED POSTS'); ?></h4>
			<?php
				$categories = get_the_category($post->ID);
				$cat_name = $categories[0]->cat_name;
				$category_ID = array();
				foreach($categories as $category):
					array_push( $category_ID, $category -> cat_ID);
				endforeach ;
				$cat_ID = $categories[0]->cat_ID;
				$cat_post_num = get_category($cat_ID);
				$cat_num = $cat_post_num->count;
				$args = array(
					'post__not_in' => array($post -> ID),
					'posts_per_page'=> $related_number_post,//カスタマイザで指定した値を取得
					'category__in' => $category_ID,
					'orderby' => 'rand',
				);
				$query = new WP_Query($args); 
			?>
			<div class="pc-related-flex-wrap">
			<?php while ($query -> have_posts()) : $query -> the_post(); ?>
				<div class="pc-related-flex">
					<div class="related-eyecatch">
						<?php if (has_post_thumbnail()): ?>
							<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail('custom_thumbnail'); ?>
							</a>
						<?php else: ?>
							<a href="<?php the_permalink() ?>">
								<img width="640" height="360" src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" alt="アイキャッチ画像はありません">
							</a>
						<?php endif; ?>
					</div>
					<h2><?php the_title(); ?></h2>
					<p class="date">
						<time itemprop="datePublished"><?php echo get_the_date(); ?></time>
					</p>
				</div>
			<?php endwhile;?>
			<?php wp_reset_query(); ?>
			</div>
		</div>
	<?php endif; ?>
<?php endif; ?>
<div class="prev-next-post">
	<?php
		$prevpost = get_adjacent_post(false, '', true); //前の記事
		$prevpost_title = $prevpost->post_title;
		$prevpost_id = $prevpost->ID;
		$nextpost = get_adjacent_post(false, '', false); //次の記事
		$nextpost_title = $nextpost->post_title;
		$nextpost_id = $nextpost->ID;
	?>
	<?php $prev_display = get_theme_mod( 'prev_display', 'on' ); ?>
	<?php if ( $prev_display == 'on' ): ?>
		<?php if( ! get_post_meta( $post->ID, "prev_post_off", true) == '前の記事非表示' ) : ?>
			<?php if ( $prevpost ) : ?>
				<div class="prev-post">
					<h4 class="prev-post-title"><?php echo get_theme_mod('prev_title_post', 'PREV POST'); ?></h4>
					<div class="prev-image">
						<?php if( has_post_thumbnail($prevpost->ID) ) :?>
							<a class="prev-link" href="<?php echo get_the_permalink($prevpost->ID); ?>" title="<?php echo get_the_title($prevpost->ID); ?>">
								<?php echo get_the_post_thumbnail($prevpost->ID, 'custom_thumbnail'); ?>
							</a>
						<?php else: ?>
							<a class="prev-link" href="<?php echo get_the_permalink($prevpost->ID); ?>" title="<?php echo get_the_title($prevpost->ID); ?>">
								<img width="640" height="360" src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" alt="アイキャッチ画像はありません" />
							</a>
						<?php endif; ?>
					</div>
					<h2 class="prev-title"><?php echo $prevpost_title; ?></h2>
					<p class="date">
						<time itemprop="datePublished"><?php echo get_the_date('Y/m/d',$prevpost_id); ?></time>
					</p>
				</div>
			<?php else: ?>
				<div class="prev-post"></div>
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
	
	<?php $next_display = get_theme_mod( 'next_display', 'on' ); ?>
	<?php if ( $next_display == 'on' ): ?>
		<?php if( ! get_post_meta( $post->ID, "next_post_off", true) == '次の記事非表示' ) : ?>
			<?php if ( $nextpost ) :?>
				<div class="next-post">
					<h4 class="next-post-title"><?php echo get_theme_mod('next_title_post', 'NEXT POST'); ?></h4>
					<div class="next-image">
						<?php if( has_post_thumbnail($nextpost->ID) ) :?>
							<a class="next" href="<?php echo get_the_permalink($nextpost->ID); ?>" title="<?php echo get_the_title($nextpost->ID); ?>">
								<?php echo get_the_post_thumbnail($nextpost->ID, 'custom_thumbnail'); ?>
							</a>
						<?php else: ?>
							<a class="next" href="<?php echo get_the_permalink($nextpost->ID); ?>" title="<?php echo get_the_title($nextpost->ID); ?>">
								<img width="640" height="360" src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" alt="アイキャッチ画像はありません" />
							</a>
						<?php endif; ?>
					</div>
					<h2 class="next-title"><?php echo $nextpost_title; ?></h2>
					<p class="date">
						<time itemprop="datePublished"><?php echo get_the_date('Y/m/d',$nextpost_id); ?></time>
					</p>
				</div>
			<?php else: ?>
				<div class="next-post"></div>
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
</div>
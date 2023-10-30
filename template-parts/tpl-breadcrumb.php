<!-- テーマSIMPLE引用 -->
<div class="breadcrumb">
	<ul class="breadcrumb__items">
		<li>
			<span>
				<a href="<?php echo home_url(); ?>">
					<span><i class="fas fa-home"></i>HOME</span>
				</a><i class="fas fa-chevron-right"></i>
			</span>
		</li>
		<?php if (is_404()) : /* 404エラーページの場合 */  ?>
			<li>
				<span>
					<span>ページは見つかりませんでした</span>
				</span>
			</li>
			<?php elseif (is_archive('blog')) : /* 通常投稿 アーカイブ slugがblogだった場合 */ ?>
			<li>
				<span>
					<a href="<?php echo home_url(); ?>/blog/">
						<span>ブログ</span>
					</a>
				</span>
			</li>
			<?php elseif (is_post_type_archive('works')) : /* カスタム投稿 アーカイブの場合 */ ?>
			<li>
				<span>
					<a href="<?php echo home_url(); ?>/works/">
						<span>作品</span>
					</a>
				</span>
			</li>
		<?php elseif (is_singular('works')) : /* カスタム投稿の場合 */ ?>
			<?php
			//https://web-guided.com/1141/
			$wp_obj = get_queried_object();
			//	var_dump($wp_obj);
			$post_slug = get_post_type();
			//	var_dump($post_slug);
			$post_label = get_post_type_object($post_slug)->label;
			//	var_dump($post_label);
			$post_id = $wp_obj->ID;
			//	var_dump($post_id);
			$post_title = $wp_obj->post_title;
			//	var_dump($post_title);
			$post_link = get_post_type_archive_link($post_slug);
			//	var_dump($post_link);
			?>
			<li>
				<span>
					<a href="<?php echo $post_link ?>">
						<span><?php echo $post_label ?></span>
					</a>
				</span>
			</li>
		<?php elseif (is_category()) : /* カテゴリーページの場合 */ ?>
			<?php
			$parent_cat = get_queried_object();
			$parent_cat_id = $parent_cat->parent;
			$cat = get_category($parent_cat_id);
			$cat_link = get_category_link($parent_cat_id);
			?>
			<?php if ($parent_cat_id) : ?>
				<li>
					<span>
						<a href="<?php echo $cat_link; ?>">
							<span><?php echo $cat->name; ?></span>
						</a><i class="fas fa-chevron-right"></i>
					</span>
				</li>
			<?php endif; ?>
			<li>
				<span>
					<span><?php single_cat_title(); ?></span>
				</span>
			</li>
		<?php elseif (is_tag()) : /* タグページの場合 */ ?>
			<li>
				<span>
					<span><?php single_tag_title(); ?></span>
				</span>
			</li>
		<?php elseif (is_archive()) : /* 日別・月別・年別アーカイブページの場合 */ ?>
			<?php
			$year = get_the_time('Y');
			$month = get_the_time('n');
			$day = get_the_time('d');
			?>
			<?php if (is_day()) : /* 日別アーカイブ */ ?>
				<li>
					<span>
						<a href="<?php echo get_year_link($year); ?>">
							<span><?php echo $year; ?>年</span>
						</a><i class="fas fa-chevron-right"></i>
					</span>
				</li>
				<li>
					<span>
						<a href="<?php echo get_month_link($year, $month); ?>">
							<span><?php echo $month; ?>月</span>
						</a><i class="fas fa-chevron-right"></i>
					</span>
				</li>
				<li>
					<span>
						<span><?php echo $day; ?>日</span>
					</span>
				</li>
			<?php elseif (is_month()) : /* 月別アーカイブ */ ?>
				<li>
					<span>
						<a href="<?php echo get_year_link($year); ?>">
							<span><?php echo $year; ?>年</span>
						</a><i class="fas fa-chevron-right"></i>
					</span>
				</li>
				<li>
					<span>
						<span><?php echo $month; ?>月</span>
					</span>
				</li>
			<?php elseif (is_year()) : /* 年別アーカイブ */ ?>
				<li>
					<span>
						<span><?php echo $year; ?>年</span>
					</span>
				</li>
			<?php endif; ?>
		<?php elseif (is_single()) : /* 投稿ページの場合 */ ?>
			<?php
			$current_post_id = get_the_ID(); //記事のIDを取得
			//				var_dump($current_post_id);
			$current_post_category = get_the_category($current_post_id); //記事のカテゴリ情報オブジェクトを取得
			//				var_dump($current_post_category);
			$current_post_category_name = $current_post_category[0]->cat_name; //オブジェクトから記事のカテゴリ名（1番目）を取得
			//				var_dump($current_post_category_name);
			$current_post_category_id = $current_post_category[0]->cat_ID; //カテゴリのID
			//				var_dump($current_post_category_id);
			$current_post_category_link = get_category_link($current_post_category_id); //カテゴリのリンク文字列
			//				var_dump($current_post_category_link);
			?>
			<li>
				<span>
					<a href="<?php echo $current_post_category_link; ?>">
						<span><?php echo $current_post_category_name; ?></span>
					</a><!-- <i class="fas fa-chevron-right"></i> -->
				</span>
			</li>
			<!-- <li>
				<span>
					<span><?php echo get_the_title(); ?></span>
				</span>
			</li> -->
		<?php elseif (is_page()) : /* 固定ページの場合 */ ?>
			<li>
				<span>
					<span><?php single_post_title(); ?></span>
				</span>
			</li>
		<?php elseif (is_search()) : /* 検索ページの場合 */ ?>
			<li>
				<span>
					<span>検索結果「<?php echo get_search_query(); ?>」</span>
				</span>
			</li>
		<?php endif; ?>
	</ul>
</div>
<div class="breadcrumb">
	<ul itemscope itemtype="https://schema.org/BreadcrumbList">
		<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			<span>
				<a href="<?php echo home_url(); ?>" itemprop="item">
					<span itemprop="name"><i class="fas fa-home"></i>HOME</span>
				</a><i class="fas fa-chevron-right"></i>
			</span>
			<meta itemprop="position" content="1">
		</li>
		<?php if (is_404()) : /* 404エラーページの場合 */  ?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span>
					<span itemprop="name">ページは見つかりませんでした</span>
				</span>
				<meta itemprop="position" content="2">
			</li>
		<?php elseif(is_category()): /* カテゴリーページの場合 */ ?>
			<?php
				$parent_cat = get_queried_object();
				$parent_cat_id = $parent_cat->parent;
				$cat = get_category($parent_cat_id);
				$cat_link = get_category_link($parent_cat_id);
			?>
			<?php if($parent_cat_id): ?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<span>
						<a href="<?php echo $cat_link; ?>" itemprop="item">
							<span itemprop="name"><?php echo $cat->name; ?></span>
						</a><i class="fas fa-chevron-right"></i>
					</span>
					<meta itemprop="position" content="2">
				</li>
			<?php endif; ?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span>
					<span itemprop="name"><?php single_cat_title(); ?></span>
				</span>
				<meta itemprop="position" content="3">
			</li>
		<?php elseif(is_tag()): /* タグページの場合 */ ?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span>
					<span itemprop="name"><?php single_tag_title(); ?></span>
				</span>
				<meta itemprop="position" content="2">
			</li>
		<?php elseif(is_archive()): /* 日別・月別・年別アーカイブページの場合 */ ?>
			<?php
				$year = get_the_time('Y');
				$month = get_the_time('n');
				$day = get_the_time('d');
			?>
			<?php if(is_day()): /* 日別アーカイブ */?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<span>
						<a href="<?php echo get_year_link($year); ?>" itemprop="item">
							<span itemprop="name"><?php echo $year; ?>年</span>
						</a><i class="fas fa-chevron-right"></i>
					</span>
					<meta itemprop="position" content="2">
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<span>
						<a href="<?php echo get_month_link($year,$month); ?>" itemprop="item">
							<span itemprop="name"><?php echo $month; ?>月</span>
						</a><i class="fas fa-chevron-right"></i>
					</span>
					<meta itemprop="position" content="3">
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<span>
						<span itemprop="name"><?php echo $day; ?>日</span>
					</span>
					<meta itemprop="position" content="4">
				</li>
			<?php elseif(is_month()): /* 月別アーカイブ */?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<span>
						<a href="<?php echo get_year_link($year); ?>" itemprop="item">
							<span itemprop="name"><?php echo $year; ?>年</span>
						</a><i class="fas fa-chevron-right"></i>
					</span>
					<meta itemprop="position" content="2">
				</li>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<span>
						<span itemprop="name"><?php echo $month; ?>月</span>
					</span>
					<meta itemprop="position" content="3">
				</li>
			<?php elseif(is_year()): /* 年別アーカイブ */ ?>
				<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
					<span>
						<span itemprop="name"><?php echo $year; ?>年</span>
					</span>
					<meta itemprop="position" content="2">
				</li>
			<?php endif; ?>
		<?php elseif(is_single()): /* 投稿ページの場合 */ ?>
			<?php
				$current_post_id = get_the_ID();//記事のIDを取得
//				var_dump($current_post_id);
				$current_post_category = get_the_category($current_post_id);//記事のカテゴリ情報オブジェクトを取得
//				var_dump($current_post_category);
				$current_post_category_name = $current_post_category[0]->cat_name;//オブジェクトから記事のカテゴリ名（1番目）を取得
//				var_dump($current_post_category_name);
				$current_post_category_id = $current_post_category[0]->cat_ID;//カテゴリのID
//				var_dump($current_post_category_id);
				$current_post_category_link = get_category_link($current_post_category_id);//カテゴリのリンク文字列
//				var_dump($current_post_category_link);
?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span>
					<a href="<?php echo $current_post_category_link; ?>" itemprop="item">
						<span itemprop="name"><?php echo $current_post_category_name; ?></span>
					</a><!-- <i class="fas fa-chevron-right"></i> -->
				</span>
				<meta itemprop="position" content="2">
			</li>
			<!-- <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span>
					<span itemprop="name"><?php echo get_the_title(); ?></span>
				</span>
				<meta itemprop="position" content="3">
			</li> -->
		<?php elseif(is_page()): /* 固定ページの場合 */ ?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span>
					<span itemprop="name"><?php single_post_title(); ?></span>
				</span>
				<meta itemprop="position" content="2">
			</li>
		<?php elseif(is_search()): /* 検索ページの場合 */ ?>
			<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
				<span>
					<span itemprop="name">検索結果「<?php echo get_search_query(); ?>」</span>
				</span>
				<meta itemprop="position" content="2">
			</li>
		<?php endif; ?>
	</ul>
</div>
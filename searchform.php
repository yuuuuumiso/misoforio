<div class="sidebar__ttl sidebar__ttl--search">検索</div>
<form action="<?php echo home_url('/'); ?>" method="get" class="sideSearch">
<input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="キーワードを入力" class="sideSearch__input">
<button type="submit" class="sideSearch__btn"><i class="fas fa-search"></i></button>
</form>

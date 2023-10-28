  <ul class="postSnsLinks">
  <li class="postSnsLinks__item"><a href="">SNS</a></li>
  <li class="postSnsLinks__item"><a href="">SNS</a></li>
  </ul>




<div class="sns-wrap">
	<?php
		$url_encode = urlencode(get_permalink());
		$title_encode = urlencode(get_the_title())." - ".$site_name;
	?>
	<div class="sns">
		<ul>
			<li class="twitter">
				<a href="http://twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>">
					<i class="fab fa-twitter"></i>
				</a>
			</li>
			<li class="facebook">
				<a href="http://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
					<i class="fab fa-facebook-f"></i>
				</a>
			</li>
			<li class="hatebu">
				<a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo $url_encode ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=510');return false;" >
					<i class="fas fa-bookmark"></i>
				</a>
			</li>
			<li class="pocket">
				<a href="http://getpocket.com/edit?url=<?php echo $url_encode;?>&title=<?php echo $title_encode;?>">
					<i class="fab fa-get-pocket"></i>
				</a>
			</li>
			<li class="line">
				<a href="http://line.me/R/msg/text/?<?php echo $url_encode;?>">
					<i class="fab fa-line"></i>
				</a>
			</li>
		</ul>
	</div>
</div>


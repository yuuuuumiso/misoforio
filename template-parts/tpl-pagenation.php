<div class="postLinks">
<?php if (get_previous_post()): ?>
<div class="postLinks__item prev"><?php previous_post_link(); ?></div>
<?php endif; ?>
<?php if (get_next_post()): ?>
<div class="postLinks__item next"><?php next_post_link(); ?></div>
<?php endif; ?>
</div>
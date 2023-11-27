<?php if(! $foot_cache = get_transient('foot_cache')):ob_start();?>
<footer>
<div class="mv__waves">
  <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
      <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
    </defs>
    <g class="parallax">
      <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"></use>
    </g>
  </svg>
</div>
<section class="sec contact">
  <div class="sec__inner sec__inner--contact">
    <div class="sec__ttlBox">
      <h2 class="sec__ttl sec__ttl--contact">C<span class="sec__ttl--small">ontact</span></h2>
      <p class="sec__ttl-sub">ご連絡</p>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="b25a1d8" title="コンタクトフォーム 1"]'); ?>
  </div>
</section>
</div><!-- .wrap -->
<?php get_template_part('template-parts/tpl', 'loading'); ?>
<?php 
    $foot_cache = ob_get_clean();
    set_transient('foot_cache', $foot_cache, 60*240 ); 
else:
    echo $foot_cache;
endif;
?>
<?php wp_footer(); ?>
</footer>
</body>
</html>

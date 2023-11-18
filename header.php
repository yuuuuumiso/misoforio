<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# <?php if ( is_front_page() ) { echo 'website'; } else {echo 'article';} ?>: http://ogp.me/ns/<?php if ( is_front_page() ) { echo 'website'; } else {echo 'article';} ?>#">
<!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VRLGZ01DVB"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-VRLGZ01DVB');
  </script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- OGPタグ -->
  <meta property="og:title" content="<?php if ( is_front_page() ) { echo get_bloginfo('name'); } else {echo the_title();} ?>">
  <meta property="og:type" content="<?php if ( is_front_page() ) { echo 'website'; } else {echo 'article';} ?>" />
  <meta property="og:image" content="https://works.yuuuuumiso.com/wp-content/themes/v/img/ogp.png">
  <meta property="og:url" content="<?php echo bloginfo('url');?>" />
  <meta property="og:site_name" content="<?php echo bloginfo('name');?>" />
  <meta property="og:description" content="<?php if (is_front_page()) {echo get_bloginfo('description');} else {echo get_field('meta-description');} ?>" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="wrap">
    <header class="header">
      <div class="header__inner">
        <p class="header__logo"><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a></p>
        <div class="openbtn">
          <div class="openbtn-area"><span></span><span></span><span></span></div>
        </div>
      </div>
      <nav id="g-nav" class="">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'header-menu',
            'container' => 'div',
            'container_id' => 'g-nav-list',
            'menu_class' => 'list',
          )
        );
        ?>
      </nav>
      <div class="g-nab-bg"></div>
    </header>
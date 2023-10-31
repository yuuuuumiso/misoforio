<!DOCTYPE html>
<html lang="ja">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VRLGZ01DVB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-VRLGZ01DVB');
</script>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrap">
  <header class="header">
  <div class="header__inner">
    <p class="header__logo"><a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a></p>
    <div class="openbtn"><div class="openbtn-area"><span></span><span></span><span></span></div></div>
  </div>
  <nav id="g-nav" class="">
    <div id="g-nav-list">
    <ul>
    <li><a href="<?php echo esc_url( home_url() ); ?>">Home</a></li>
    <li><a href="<?php echo esc_url( home_url() ); ?>/works/">Works</a></li>
    <li><a href="<?php echo esc_url( home_url() ); ?>/blog/">Blog</a></li>
    </ul>
<?php
wp_nav_menu(
array(
'theme_location' => 'header-menu',
'container' => 'div',
'container_id' => 'g-nav-list',
// 'menu_class' => 'header-list',
// 'before' => '<span class="menu-link">',
// 'after' => '</span>',
// 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
//％1 $ sに ‘menu_id’のパラメーターの値が展開。％2 $ sに ‘menu_class’のパラメーターの値が展開。％3 $ sはリストアイテムが値として展開されます。
)
);
?>
    </div>
    </nav>
    <div class="g-nab-bg"></div>
</header>






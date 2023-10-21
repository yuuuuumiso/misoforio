<!DOCTYPE html>
<html lang="ja">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
<div class="wrap">
  <header class="header">
  <div class="header__inner">
    <p class="header__logo"><a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a></p>
    <div class="openbtn"><div class="openbtn-area"><span></span><span></span><span></span></div></div>
  </div>
  <nav id="g-nav" class="">
    <div id="g-nav-list">
    <ul>
    <li><a href="#">Top</a></li>	
    <li><a href="#">About</a></li>
    <li><a href="#">Skills</a></li>	
    <li><a href="#">Blog</a></li>
    <li><a href="#">Contact</a></li>	
    </ul>
    </div>
    </nav>
    <div class="g-nab-bg"></div>
</header>
<!DOCTYPEhtml>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container header-inner">
    <div class="logo-area">
      <?php
      if (function_exists('the_custom_logo') && has_custom_logo()) {
          the_custom_logo();
      } else {
          ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
            Magister Ekonomi<br>
            <span>Fakultas Ekonomi dan Bisnis Universitas Samudra</span>
          </a>
          <?php
      }
      ?>
    </div>
    <nav class="main-nav">
      <?php
      wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'nav-menu',
          'fallback_cb'    => false,
      ]);
      ?>
    </nav>
  </div>
</header>
<main class="main-content">
  <div class="container">

 

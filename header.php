<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<?php
// Dynamic content from ACF fields
$cta_text = function_exists('get_field') ? get_field('hero_cta_text') : 'Get Quote';
$cta_url = function_exists('get_field') ? get_field('hero_cta_link') : '/contact';
?>

<body <?php body_class(); ?>>
  <!-- <a class="skip-link" href="#main-content"><?php esc_html_e('Skip to content', 'textdomain'); ?></a> -->

  <!-- Header -->
  <header class="header">
    <nav class="nav">
      <div class="nav-container">
        <div class="nav-logo">
          <img src="/placeholder.svg?height=50&width=120" alt="ATL Crane Trucks">
        </div>
        <!-- <ul class="nav-menu" id="nav-menu">
          <li><a href="#home" class="nav-link">HOME</a></li>
          <li><a href="#about" class="nav-link">WHY ATL</a></li>
          <li><a href="#services" class="nav-link">SERVICES</a></li>
          <li><a href="#projects" class="nav-link">PROJECTS</a></li>
          <li><a href="#blog" class="nav-link">BLOG</a></li>
        </ul> -->
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'nav-menu',
          'fallback_cb'    => false,
          'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s<li id="nav_contact" class="menu-item nav-cta"><a href="#contact">CONTACT</a></li></ul>',
        ]);
        ?>

        <div class="nav-toggle" id="nav-toggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </nav>
  </header>
  <!-- <header class="header">
    <nav class="nav">
      <div class="nav-container">
        <div class="nav-logo">
          <?php
          if (has_custom_logo()) {
            the_custom_logo();
          } else {
            bloginfo('name');
          }
          ?>
        </div>
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'nav-menu',
          'fallback_cb'    => false,
        ]);
        ?>
        <a href="#contact" class="nav-cta">CONTACT</a>
        <div class="nav-toggle" id="nav-toggle">
          <span></span><span></span><span></span>
        </div>
      </div>
    </nav>
  </header> -->
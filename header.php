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

  <!-- Header -->
  <header class="header">
    <nav class="nav">
      <div class="nav-container">
        <div class="nav-logo">
          <?php
          // Check if a custom logo exists in WordPress customizer
          if (has_custom_logo()) {
            // Display the custom logo
            the_custom_logo();
          } else {
            // If no custom logo, use a fallback image from the child theme
          ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/section--1-navlogo.png?height=50&width=120" alt="ATL Crane Trucks">
          <?php
          }
          ?>
        </div>

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
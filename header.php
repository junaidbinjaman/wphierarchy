<?php
/** 
 * Short description: main header for the website
 *
 * @package WordPress
 * @subpackage wphierarchy
 * Author: Junaid Jwolt
 * Date: 17/09/2022
 * time: 02:46 PM
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div id="page">

    <a href="#content" class="skip-link screen-reader-text">
      <?php esc_html_e('Skip to content', 'wphierarchy'); ?>
    </a>

    <header id="masthead" class="site-header" role="banner">

      <div class="site-branding">

        <p class="site-title">
          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <?php bloginfo('name'); ?>
          </a>
        </p>
        <p class="site-description">
          <?php bloginfo('description'); ?>
        </p>
      </div>

      <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
      </nav>

    </header>

    <div id="content" class="site-content">

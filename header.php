<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://salwamasour.com">
   <?php wp_head(); ?>
</head>
<body  <?php  body_class();  ?>  >
  <div id="page">

  <a href="#content"  class="skip-link screen-reader-text">
            <?php esc_html_e('Skip to contect', 'wphairirchy'); ?>
        </a>

    <header id="masthead" class="stiky-part site-header" role="header of the page">
        
       <div class="site-randing">
       <a href="  <?php echo esc_url(  home_url('/') ); ?>  ">
        <img src="<?php get_template_directory_uri(); ?>/images/logo.png" alt="" class="logo">
        </a>
            <p class="site-title">
                <a href="  <?php echo esc_url(  home_url('/') ); ?>  ">
                <?php   bloginfo('name');   ?>
            </a>
            </p>
            <p class="site-description">
                <?php  bloginfo('description');  ?>
            </p>
          
       </div>

        <input type="checkbox" id="nav-check" style="display: none;">
        <label for="nav-check"><img src="<?php get_template_directory_uri(); ?>/images/menu.png" id="menu-btn" alt=""></label>
        <nav id="side-nav" class="" role="navigation" >
       <!-- <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Featuers</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">Offers</a></li>
            <li><a href="#">Contact</a></li>
        </ul> -->
        <?php 
            $args = [
                'theme_location' => 'main-menu'
            ];
            wp_nav_menu($args);
        ?>
        </nav>
    </header>
    <div id="content" class="site-content">
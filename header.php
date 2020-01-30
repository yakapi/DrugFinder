<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="screen-container">
  <!-- Menu header -->
  <header class="header">
    <nav>
      <!-- Panneau de Navigation -->
      <div class="navigation-board">
        <div class="encard-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo-DF.svg" alt="Logo">
        </div>
        <?php

        if ($user_log === true) {
          wp_nav_menu(array(
            'menu' => 'Main',
          ));
        }

        ?>
      </div>
      <!-- Logo -->
      <a id="logo-block" href="<?php echo home_url('/'); ?>">
        <h1>Natural Drugs Finder</h1>
      </a>

      <!-- Panneau de Connexion/Inscription -->
      <div class="connect-board">
        <?php $user_log = is_user_logged_in();

        if ($user_log === true) {
          wp_nav_menu(array(
            'menu' => 'Logout',
          ));
        } else {
          wp_nav_menu(array(
            'menu' => 'Login',
          ));
        }
        ?>
      </div>
    </nav>
  </header>

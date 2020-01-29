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
  <header class="header">

    <nav>
      <a href="<?php echo home_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo-DF.svg" alt="Logo">
      </a> 
      
      <h1>Natural Drugs Finder</h1>


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
    </nav>
    
    <nav>
      <?php 
      
      if ($user_log === true) {
      wp_nav_menu(array(
        'menu' => 'Main',
      ));   
    }
    
    ?>

  </nav>

  </header>
  <!-- Menu header -->
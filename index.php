<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>WordpressTheme-Test</title>
  <?php wp_head(); ?>
</head>
  <?php
    wp_body_open();
    get_header();
    get_template_part('404');
    get_footer();
    wp_footer();
  ?>
</body>
</html>

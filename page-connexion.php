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

    ?>
    <div class="login-form-block">

    <?php 
    wp_login_form();
?>
      <div class="gif-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/login-gif.gif" alt="">
      </div>
</div>
</div>

<footer class="c-footer-register">

  <div class="footer-content">
    <a href="#">Mentions légales </a>
    <p> © 2020 | ACS Belfort</p>
  </div>

</footer>
<?php
        wp_footer();
  ?>
</body>
</html>

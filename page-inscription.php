<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>WordpressTheme-Test</title>
  <?php wp_head(); ?>
</head>
<?php
get_header();
wp_body_open();

$array_user = [];
$user_mail = $_POST['mailOf'];
$test = get_users();

foreach ($test as $value) {
  array_push($array_user, $value->user_email);
}

$boolean =  true;

for ($i = 0; $i < sizeof($array_user); $i++) {
  if ($user_mail == $array_user[$i]) {
    $boolean = false;
  }
}

if ($boolean == true) {

  echo $_POST['login'];
  if (isset($_POST['sub'])) {
    if (isset($_POST['login']) && isset($_POST['mailOf']) && isset($_POST['pswd'])) {

      $userdata = array(
        'user_pass' => $_POST['pswd'],
        'user_login' => $_POST['login'],
        'user_email' => $_POST['mailOf'],
      );
      wp_insert_user($userdata);
    }
  }
} else {
  echo 'Adresse déjà existante';
}
?>

<div class="c-form-block">
  <div class="gif-block">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/register-igf.gif">
  </div>
  <?php
  the_content();

  ?>
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
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
    get_header();
    wp_body_open();
    //custom_regist();
    // var_dump(get_users(array('fields' =>
    // [
    //   'nicename',
    //   ]
    // )));
    $test = get_users();

    foreach ($test as $value) {
      
      echo $value->display_name."<br>";
    }
    // echo $_POST['login'];
    // if (isset($_POST['sub'])) {
    //   if (isset($_POST['login']) && isset($_POST['mailOf']) && isset($_POST['pswd'])) {
    //
    //     $userdata = array(
    //       'user_pass' => $_POST['pswd'],
    //       'user_login' => $_POST['login'],
    //       'user_email' => $_POST['mailOf'],
    //     );
    //     wp_insert_user($userdata);
    //   }
    // }
    the_content();
    get_footer();
    wp_footer();
  ?>
</body>
</html>

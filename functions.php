<?php
// Ajout des fonctionnaliter de theme
      // Ajouter la prise en charge des images mises en avant
      add_theme_support( 'post-thumbnails' );

      // Ajouter automatiquement le titre du site dans l'en-tête du site
      add_theme_support( 'title-tag' );

      // Ajouter un logo perso
      add_theme_support( 'custom-logo', array(
          'height' => 480,
          'width'  => 720,
      ) );

      // Add default posts and comments RSS feed links to head.
    	add_theme_support( 'automatic-feed-links' );

      // Add theme support for selective refresh for widgets.
      add_theme_support( 'customize-selective-refresh-widgets' );

      // Ajouter un background perso
      $defaults = array(
        'default-image'          => '',
        'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
        'default-position-x'     => 'left',    // 'left', 'center', 'right'
        'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
        'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
        'default-repeat'         => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
        'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
        'default-color'          => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
        );
        add_theme_support( 'custom-background', $defaults );

// // Ajout jQuery CDN
//   add_action( 'init', 'wpm_jquery' );

//   function wpm_jquery() {
//   if ( !is_admin() ) {
//   //La fonction supprime l'utilisation du fichier original de JQuery sur votre serveur
//       wp_deregister_script( 'jquery' );
//   //Elle enregistre alors le nouvel emplacement de JQuery, chargé depuis le CDN de Google
//       wp_register_script( 'jquery', get_template_directory_uri() . 'assets/js/external/jquery/jquery.js', false, null, true );
//   //La fonction charge JQuery
//   }
// }
// Ajoute proprement les enqueue scripts et styles

      function wpdocs_theme_name_scripts() {
          wp_enqueue_style( 'style-principale', get_stylesheet_uri() );
          wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
          wp_enqueue_script( 'ex-jquery', get_template_directory_uri() . '/assets/js/external/jquery/jquery.js', array(), '1.0.0', false );
          wp_enqueue_script( 'script-jquery', get_template_directory_uri() . '/assets/js/jquery-ui.js', array(), '1.0.0', false );
          wp_enqueue_script( 'script-loader', get_template_directory_uri() . '/assets/js/loader.js', array(), '1.0.0', true );
          wp_enqueue_script( 'script-ajax', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
          wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/scss/style.css', array(), '1.0' );
      }
      add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


// Ajout des fonctionnaliter MENU
  function mytheme_menus() {

  	$locations = array(
  		'primary'  => __( 'Desktop Horizontal Menu', 'twentytwenty' ),
  		'expanded' => __( 'Desktop Expanded Menu', 'twentytwenty' ),
  		'mobile'   => __( 'Mobile Menu', 'twentytwenty' ),
  		'footer'   => __( 'Footer Menu', 'twentytwenty' ),
  		'social'   => __( 'Social Menu', 'twentytwenty' ),
  	);

  	register_nav_menus( $locations );
  }

  add_action( 'init', 'mytheme_menus' );


//Maybe WidjetActive

function mytheme_sidebar_widgets() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'twentytwenty' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'twentytwenty' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),
			)
		)
	);

}

add_action( 'widgets_init', 'mytheme_sidebar_widgets' );


function custom_regist(){
  $html = '<form id="c_register_form" class="c_register_form" action="" method="post">
    <div class="row_form">
      <label for="register_name">Identifiant :</label>
      <input type="text" id="register_name" name="login" value="">
    </div>
    <div class="row_form">
      <label for="register_password">Mot de Passe :</label>
      <input type="text" id="register_password" name="pswd" value="">
    </div>
    <div class="row_form">
      <label for="register_mail">E-mail :</label>
      <input type="email" id="register_mail" name="mailOf" value="">
    </div>
    <div class="row_form">
      <input type="submit" id="register_sub" name="sub" value="Inscription">
    </div>
  </form>';
  return $html;
}

add_shortcode( 'register_form', 'custom_regist' );



// public function some_function($some_parameter) {
//   global $wpdb;
//   $results = $wpdb->get_results( 
//               $wpdb->prepare("SELECT code_cis FROM name_product WHERE name =", $some_parameter) 
//            );
// }
 ?>

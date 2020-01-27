<body <?php body_class(); ?>>
  <header class="header">
    <!-- bloginfo contient le titre du site  -->
    <h1><?php echo get_bloginfo();?></h1>

    <!-- Affiche le Logo choisi pour notre site -->
    <a href="<?php echo home_url( '/' ); ?>">
      <?php $test = the_custom_logo();?>
    </a>
  </header>
  <!-- Menu header -->
  <nav>
    <?php wp_nav_menu('main'); ?>
    <?php get_search_form(); ?>
  </nav>
  <h2><?php echo esc_html( get_the_title() ); ?></h2>

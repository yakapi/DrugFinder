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

    if (have_posts()) : while (have_posts()) : the_post(); ?>
    			<article class="post">
    				<h2><?php echo esc_html( get_the_title() );  ?></h2>

    				<?php the_post_thumbnail(); ?>

    				<p class="post__meta">
    					Publié le <?php the_time(get_option('date_format')); ?>
    					par <?php the_author(); ?> | <?php comments_number(); ?>
    				</p>

    				<?php the_excerpt(); ?>


    				<p class="link-post">
    					<a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
    				</p>
    			</article>

    <?php
    endwhile;
    endif;

    get_footer();

    wp_footer();
  ?>
</body>
</html>

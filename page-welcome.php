  <?php

    get_header();

    //Khaoula Course
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
  ?>

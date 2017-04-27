<?php
/*
    Template Name: Interview Single
*/
?>


    <div class="article-banner">
      <div class="article-background container">
        <div class="article-category"><p>Interview</p>
        </div>
      <?php while (have_posts()) : the_post(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <h2 class="article-subtitle"><?php the_field('subtitle'); ?></h2>
      <?php endwhile; ?>
    </div>
    </div>

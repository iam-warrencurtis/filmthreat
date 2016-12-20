<?php
/*
    Template Name: News
*/
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>

<div class="row">
<?php
query_posts('cat=2');
while(have_posts()) : the_post();
?>


  <div class="col-sm-4">
    <a href="<?php the_permalink(); ?>"><img width="350" src="<?php the_field('teaser_image'); ?>"></a>
    <p class="review-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
  </div>


<?php endwhile;
wp_reset_query();
?>
</div>

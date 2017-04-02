<?php /*
    Template Name: Interviews
*/
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>

<div class="row">
<?php
query_posts('cat=4,-1');
while(have_posts()) : the_post();
?>


  <div class="col-sm-4">
    <div class="interview-section-wrapper">
      <div class="interview-image">
      <a href="<?php the_permalink(); ?>"><img src="<?php the_field('teaser_image'); ?>"></a>
      </div>
      <p class="interview-page-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
      <h4 class="interview-page-subtitle"><?php the_field('subtitle'); ?></h4>
      <p style="display: none;" class="interview-author">By <?= get_the_author(); ?></p>
      <p class="interview-excerpt"><?php the_field('excerpt'); ?></p>
    </div>
  </div>


<?php endwhile;
wp_reset_query();
?>
</div>

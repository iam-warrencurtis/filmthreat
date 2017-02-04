<?php
/*
    Template Name: Review Single
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

<?php endwhile; ?>

<div class="row">
<?php
query_posts('cat=3,-1');
while(have_posts()) : the_post();
?>


  <div class="col-sm-4">
    <a href="<?php the_permalink(); ?>"><img width="350" src="<?php the_field('teaser_image'); ?>"></a>
    <p class="review-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    <p class="review-author"><?php the_field('author_alias'); ?></p>
    <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
  </div>


<?php endwhile;
wp_reset_query();
?>
</div>

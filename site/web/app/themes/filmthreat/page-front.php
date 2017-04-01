

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/content', 'page'); ?>


<?php endwhile; ?>

<?php
query_posts('posts_per_page=1&cat=7');
while(have_posts()) : the_post();
?>

<style>
.banner {
  background-image: url(<?php the_post_thumbnail_url('full'); ?>);
}
</style>
<div class="featured-home-copy">
  <!-- <h1 class="featured-story">Featured Story</h1> -->
  <h2 class="featured-subtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</div>

<?php endwhile;
wp_reset_query();
?>

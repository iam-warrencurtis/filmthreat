

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
  <h1 class="featured-story">Featured Story</h1>
  <h2 class="featured-subtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</div>

<?php endwhile;
wp_reset_query();
?>

<div class="home-articles">
<div class="row">
<div class="col-sm-12">
  <h1 class="latest-articles">Latest Articles</h1>
</div>


<?php
$current_year = get_the_date('Y')+1;
query_posts('posts_per_page=40&cat=-7,-1&year=' . $current_year);
while(have_posts()) : the_post();
?>


  <div class="col-sm-4">
    <a href="<?php the_permalink(); ?>"><img width="350" src="<?php the_field('teaser_image'); ?>"></a>
    <div class="home-article-category"><p>
      <?php
        $category = get_the_category();
        echo $category[0]->cat_name;
      ?></p>
    </div>
    <p class="home-article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
  </div>


<?php endwhile;
wp_reset_query();
?>
</div>
</div>

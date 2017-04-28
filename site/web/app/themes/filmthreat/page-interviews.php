<?php /*
    Template Name: Interviews
*/
?>

<style>

.interview-card {
  display: none;
}

.totop {
    position: fixed;
    bottom: 10px;
    right: 20px;
}
.totop a {
    display: none;
}

#loadMore {
    padding: 10px;
    text-align: center;
    margin auto;
    background-color: #640005;
    color: #fff;
    border-width: 0 1px 1px 0;
    border-style: solid;
    border-color: #fff;
    transition: all 600ms ease-in-out;
    -webkit-transition: all 600ms ease-in-out;
    -moz-transition: all 600ms ease-in-out;
    -o-transition: all 600ms ease-in-out;
}
#loadMore:hover {
    background-color: #ccc;
    color: #ffffff;
}
</style>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>

<div class="row">
<?php
query_posts('cat=4,-1');
while(have_posts()) : the_post();
?>


  <div class="interview-card col-sm-4">
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

<a style="margin: 0 auto; text-decoration: none;" href="#" id="loadMore">More Posts >></a>
<br><br>
<!-- <p class="totop">
    <a href="#top">Back to top</a>
</p> -->

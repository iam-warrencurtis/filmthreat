<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="article-banner">
      <div class="article-background container">
        <div class="article-category"><p>
          <?php
            $category = get_the_category();
            echo $category[0]->cat_name;
          ?></p>
        </div>
      <?php while (have_posts()) : the_post(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <h2 class="article-subtitle"><?php the_field('subtitle'); ?></h2>
      <?php endwhile; ?>
    </div>
    </div>
    <div class="wrap container
    " role="document">
      <div class="content row">
        <main class="col-sm-12">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->

      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>

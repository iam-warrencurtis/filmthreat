<div class="header-wrapper row">
<header class="banner">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">

    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img class="logo" src="/app/uploads/2016/12/film-threat-logo-1.png"></a>
      </div>
  <div class="col-sm-6">
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
  <div class="col-sm-2 top-search">
    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <input style="width: 120px; margin-top: 15px; border: none;" type="text" value="" placeholder="search" name="s" id="s" />
        <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
    </div>
</form>
  </div>
</div>
  </div>

  <div id="carousel-home" class="carousel slide" data-ride="ride">
    <div class="carousel-inner" role="listbox">

    <?php
      query_posts('posts_per_page=60&cat=7');
      while(have_posts()) : the_post();
      ?>

       <?php $featured_title = get_field( "featured_title" ); ?>

      <div class="carousel-item" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
        <div class="featured-home-copy">
          <?php if ( $featured_title ) : ?>
          <h1 class="featured-story"><?php the_field('featured_title'); ?></h1>
          <?php endif; ?>
        <h2 class="featured-subtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
      </div>


    <?php endwhile;
    wp_reset_query();
    ?>
    <a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev">
     <span class="fa fa-angle-right" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
     <span class="fa fa-angle-left" aria-hidden="true"> <span class="previous"></span></span>
     <span class="sr-only">Next</span>
   </a>
  </div>


</header>
</div>

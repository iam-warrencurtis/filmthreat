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
  <div class="col-sm-2">
    <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <input style="width: 120px; margin-top: 15px; border: none;" type="text" value="" placeholder="search" name="s" id="s" />
        <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
    </div>
</form>
  </div>
</div>
  </div>
</header>
</div>

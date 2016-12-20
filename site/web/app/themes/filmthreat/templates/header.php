<div class="header-wrapper row">
<header class="banner">
  <div class="container">
    <div class="row">
      <div class="col-xs-4">

    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img class="logo" src="/app/uploads/2016/12/film-threat-logo-1.png"></a>
      </div>
  <div class="col-xs-8">
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</div>
  </div>
</header>
</div>

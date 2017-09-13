
<?php while (have_posts()) : the_post(); ?>
<style>
.article-background {
  background-image: url(<?php the_post_thumbnail_url('full'); ?>);
}
</style>


  <article <?php post_class(); ?>>
    <div class="row">
      <div class="col-sm-8 <?php if ( ! is_active_sidebar('article-sidebar1') ) : ?>col-lg-12<?php endif; ?>">
      <header>
        <h2 class="byline"><?php the_field('author_alias'); ?></h2>
        <?php get_template_part('templates/entry-meta'); ?>
        <div class="share-icons"><?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></div>
      </header>
      <div class="entry-content">
        <p class="article-intro"><?php the_field('introduction'); ?></p>
      </div>
      <?php the_content(); ?>
    </div>
      <div class="col-sm-4">
        <?php dynamic_sidebar('article-sidebar1'); ?>
      </div>
    </div>



    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>

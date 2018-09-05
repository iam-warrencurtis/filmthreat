<h2 class="byline author vcard">By <?php if( get_field('author_alias') ): ?>by <?php the_field('author_alias'); ?><?php endif; ?></h2>
<time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>

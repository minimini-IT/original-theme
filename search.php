<?php get_header(); ?>
<!--<section>
  <h2>検索結果</h2> 
-  <ul class="newsarea"> -->
    <?php if(!have_posts()): ?>
      <h2>お探しの記事が存在しません。</h2>
    <?php endif; ?>
    <?php while(have_posts()): the_post(); ?>
<article>
  <header>
<?php the_title(sprintf("<h2><a href='%s'>", esc_url(get_permalink())), "</a></h2>"); ?>
  </header>
  <section>
<?php the_excerpt(); ?>
  </section>
  <footer>
    <p>
      <span><?php the_date("Y/m/d"); ?></span>
      <?php the_tags("", " "); ?>
    </p>
  </footer>
</article>
<!--      <li><a href="<?php the_permalink(); ?>"><span><?php echo get_the_date('Y年n月j日'); ?></span><?php the_title(); ?></a></li> -->
    <?php endwhile; ?>
<!--  </ul>
</section> -->
<?php get_footer();?>

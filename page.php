<?php get_header(); ?>
<section>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <h2>当サイトの<?php the_title(); ?></h2>
    <div class="contents_area"><?php the_content(); ?></div>
  <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>

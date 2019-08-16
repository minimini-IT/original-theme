<?php get_header(); ?>
<section>
  <?php
  $category = get_the_category();
  $cat_name = $category[0] -> cat_name; 
  $args = array(
    "posts_per_page" => 10
  );
  $posts = get_posts($args);
  foreach($posts as $post):
    setup_postdata($post);
?>
    <a href="<?php the_permalink(); ?>"><h2 class="serif"><?php the_title(); ?></h2></a>
    <p><?php the_excerpt(); ?></p>
    <p><?php echo get_the_date('Y年n月j日'); ?></p>
    <p><?php echo $cat_name; ?></p>
    <?php 
      $tags = get_the_tags(); 
      if(!empty($tags)):
        foreach($tags as $tag):
    ?>      
          <span><?php echo $tag -> name; ?></span>
        <?php endforeach; ?>
      <?php endif; ?>
  <?php endforeach; ?>

<!--
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <h2><?php echo $cat_name; ?></h2>
      <span><?php echo get_the_date('Y年n月j日'); ?></span>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php endwhile; endif;?>
-->
</section>
<?php get_footer(); ?>

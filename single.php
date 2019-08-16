<?php get_header(); ?>
<section class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2">
      <article>
        <header class="mt-5">
<?php
if(have_posts()){
  while(have_posts()){
    the_post(); 
    the_title("<h1 class='title py-4 text-center'>", "</h1>"); 
?>
          <p class="date mt-2"><span><?php the_date("Y/n/j"); ?></span></p>
        </header>
        <section>
    <!--<p><span><?php the_date("Y/n/j"); ?></span></p>-->
    <?php the_content(); ?>
        </section>
        <footer>
          <p class="tags">
    <?php the_tags("", " "); ?>
        </footer>
          <?php 
            }
          }
          ?>
      </article>
    </div>
  </div>
</section>
<?php get_footer(); ?>

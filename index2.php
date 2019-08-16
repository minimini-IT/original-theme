<?php get_header(); ?>
<section class="container">
  <header>
    <p class="text-center my-2">
      <a href="/notes">免責事項</a>
    </p>
    <div class="text-center my-2">
      <?php get_search_form(); ?>
    </div>
  </header>
  <div class="row">
    <div class="col-xs-10 offset-xs-1 col-md-8 offset-md-2">
  <?php
  if(have_posts()){
    while(have_posts()){
      the_post();
  ?>
      <div class="row article">
        <div class="col-md-12">
          <article class="my-4">
            <header>
          <?php the_title(sprintf("<h2 class='text-center'><a href='%s'>", esc_url(get_permalink())), "</a></h2>"); ?>
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
        </div>
      </div>
  <?php
    }
  }
  ?>
</section>
<?php get_footer(); ?>

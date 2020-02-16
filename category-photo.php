<?php get_header(); ?>
  <div class="main">
    <div class="content">
      <div class="cattitle">
        <h1><?php single_cat_title(); ?></h1>
        <?php echo category_description(); ?>
      </div>
      <div class="photolist">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div>
          <h2><a href="<?php the_permalink(); ?>">
          <?php the_title(); ?></a></h2>
          <h3><a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('photolarge'); ?></a></h3>
        </div>
        <?php endwhile; endif; ?>
      </div>
  </div>      
<?php get_sidebar(); ?>
  </div>
      <div class="prevnext">
        <p class="prev"><?php previous_posts_link('PREV'); ?></p>
        <p class="next"><?php next_posts_link('NEXT'); ?></p>
  </div>
<?php get_footer(); ?>

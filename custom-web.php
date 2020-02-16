  <div class="main">
    <div class="content">
      <div class="cattitle">
        <?php $postcats = get_the_category(); ?>
        <h1><?php echo $postcats[0]->name; ?></h1>
        <p><?php echo $postcats[0]->description; ?></p>
      </div>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
      <div class="post">
        <div class="postimage">
          <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
          </a>
        </div>
        <div class="postinfo">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="address">
            <?php echo get_post_meta($post->ID, 'アドレス', true); ?>
          </p>
          <?php the_content(); ?>
          <table class="metainfo">
          <?php $fields = get_post_custom();
            foreach($fields as $name => $value) {
              if(!(preg_match("/^_/", $name)) && $name !== 'アドレス') {
                echo '<tr><th>';
                echo $name;
                echo '</th><td>';
                echo $value[0];
                echo '</td></tr>';
              }
            }
           ?>
           </table>
        </div>
      </div>
<?php endwhile; endif; ?>
    </div>      
<?php get_sidebar(); ?>
    </div>
        <div class="prevnext">
          <p class="prev"><?php previous_post_link('%link', 'PREV', true); ?></p>
          <p class="next"><?php next_post_link('%link', 'NEXT', true); ?></p>
        </div>

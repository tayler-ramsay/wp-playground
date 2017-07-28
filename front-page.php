<?php get_header(); ?>


<!--site-content-->
<div class="site-content clearfix">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php else: '<p>No content found</p>' ?>
    <?php endif; ?>
<div class="home-columns clearfix">
<div class="one-half-column">
<!-- random posts loop begins here -->
<?php $randomPosts = new WP_Query('cat=5&posts_per_page=2&orderby=ran'); ?>

  <?php if ($randomPosts->have_posts()) : ?>
    <?php while ($randomPosts->have_posts()) : $randomPosts->the_post(); ?>
      <div class="random-column clearfix">
        <?php the_post_thumbnail('small-thumbnail'); ?>

        <div class="random-posts">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
</div>

<div class="one-half-column">
  <!-- dev posts loop begins here -->
  <?php $devPosts = new WP_Query('cat=12&posts_per_page=2'); ?>

    <?php if ($devPosts->have_posts()) : ?>
      <?php while ($devPosts->have_posts()) : $devPosts->the_post(); ?>

<div class="random-column clearfix">
  <?php the_post_thumbnail('small-thumbnail'); ?>

  <div class="random-posts">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
  </div>
</div>

      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>

 </div>
</div>
<!--site-content-->


<?php get_footer(); ?>

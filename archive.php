<?php
get_header(); // Include the header.php file
?>

<div class="container">
  <h1>
    <?php
        // Display the archive title dynamically
        the_archive_title();
        ?>
  </h1>
  <div class="post-list">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="post-item">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p class="post-meta">Published on <?php echo get_the_date(); ?></p>
      <div class="post-excerpt">
        <?php the_excerpt(); ?>
      </div>
    </div>
    <?php endwhile; ?>

    <!-- Pagination -->
    <div class="pagination">
      <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => __('&laquo; Previous', 'my-custom-theme'),
                    'next_text' => __('Next &raquo;', 'my-custom-theme'),
                ));
                ?>
    </div>
    <?php else : ?>
    <p><?php _e('No posts found.', 'my-custom-theme'); ?></p>
    <?php endif; ?>
  </div>
</div>

<?php
get_footer(); // Include the footer.php file
?>
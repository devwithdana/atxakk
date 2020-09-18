<?php get_header(); ?> <!-- Pull in header.php file -->

<div id="ttr_main">
  <div id="ttr_content"> <!-- Likely all bootstrap. -->

    <div>
      <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
      <!-- If there are posts the while there are posts get post? -->
        <div>
          <!-- More bootstrap -->
          <h1><?php the_title(); ?></h1>
          <h4>Posted on <?php the_time('F jS, Y') ?></h4>

          <p><?php the_content(__('(more...)')); ?></p>
          <!-- How to access post content -->
        </div>
      <?php endwhile; else : ?> <!-- Elaborate if else -->
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>
      <!-- Tutorial says this pulls in post from WordPress admin area -->
    </div>
    
  </div>
  <?php get_sidebar(); ?> <!-- Pull in sidebar.php file -->
</div>

<?php get_footer(); ?> <!-- Pull in footer.php file -->
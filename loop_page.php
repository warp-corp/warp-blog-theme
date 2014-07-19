<?php
/**
 * Basic simple page loop
 * 
 */
?>

<!-- the post -->
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="post">
      <div class="post-content">
				<h3 class="post-title">
	        <?php the_title(); ?>
	      </h3>
        <div class="post-body">
				  <?php the_content(); ?>
        </div>
      </div> 
    </div>
  <?php endwhile; ?>
<?php endif; ?>
<!-- /the post -->
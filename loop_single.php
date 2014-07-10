<?php
/**
 * Basic simple article loop
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
        <ul class="unstyled man pan post-info">
          <li class="inbl mrs"><i class="fa fa-user"></i> <?php the_author(); ?></li>
          <li class="inbl mrs"><i class="fa fa-clock-o"></i> <?php the_date(); ?></li>
          <li class="inbl"><i class="fa fa-comment"></i> <?php echo get_comments_number(); ?></li>
        </ul>
        <div class="post-body">
				  <?php the_content(); ?>
        </div>
        <div class="post-tags">
          <?php echo get_the_tag_list('<p><i class="fa fa-tags mrs"></i>',', ','</p>'); ?>
        </div>
      </div> 
    </div>
  <?php endwhile; ?>
<?php endif; ?>
<!-- /the post -->

<!-- similar post -->

<!-- /similar post -->
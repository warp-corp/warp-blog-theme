<?php
/**
 * Basic article loop
 * 
 */
?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="post">
      <div class="post-content">
      	<section class="grid">
      		<section class="grid1-3">
      			<aside><div class="thumb"><?php the_post_thumbnail('thumbnail'); ?></div></aside>
      			<aside>
      				 <h3 class="post-title">
				        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				      </h3>
				      <div class="hide-phone">
      					<?php the_excerpt(); ?>
      				</div>
      				<ul class="unstyled man pan post-info">
			          <li class="inbl mrs"><i class="fa fa-clock-o"></i> <?php the_date(); ?></li>
			          <li class="inbl"><i class="fa fa-comment"></i> <?php echo get_comments_number(); ?></li>
			        </ul>
      			</aside>
      		</section>
      	</section> 
      </div> 
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <p class="nothing">
    Il n'y a pas de Post à afficher !
  </p>
<?php endif; ?>